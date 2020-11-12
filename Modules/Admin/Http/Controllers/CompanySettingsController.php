<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\UploadController;
use App\Models\Company;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CompanySettingsController extends BaseController
{
    
    protected string $updir = 'configuration';
    /**
     * Display a company settings form
     * @return Renderable
     */
    public function index()
    {
        return view('admin::settings.company-settings.index');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request)
    {

        // return back();

        //  Validation
        $request->validate(Company::VALIDATION);

        $attributes = $request->all();

        // dd(json_decode($attributes['company_social']));

        // Check if company logo file exit
        if( $request->has('company_logo') ) {
            $logo = UploadController::uploadPlease($request->file('company_logo') , $this->updir);
            $attributes = array_merge($attributes , [
                'company_logo' => $logo
            ]);
        }

        // Check if company favicon file exit
        if( $request->has('company_favicon') ) {
            $favicon = UploadController::uploadPlease($request->file('company_favicon') , $this->updir);
            $attributes = array_merge($attributes , [
                'company_favicon' => $favicon
            ]);
        }

        // Update 
        if(Company::updateSetting($attributes)){
            return redirect()->back()->with('success' , 'Successfully updated.');
        }

        // When error 
        return back()
            ->with('error' , 'Something went wrong');
    }

    
    
}
