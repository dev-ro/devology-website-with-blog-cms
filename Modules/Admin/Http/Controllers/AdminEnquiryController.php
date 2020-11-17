<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminEnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::enquiries.index' , [
            'enquiries' => Enquiry::orderBy('id' , 'DESC')->paginate('10')
        ]);
    }


    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::enquiries.respond' , [
            'enquiry' => Enquiry::findOrFail($id)
        ]);
    }

    /**
     * Respond to enquiry 
     * @param Request $request
     * @param int $id
     */
    public function respond(Request $request, $id) {

        $explodedEmail = rtrim(str_replace(' ' , '' , $request->respond_email) , ',');
        $explodedEmail = explode(','  , $explodedEmail);
        $request->respond_email = $explodedEmail;
        $validation = $request->validate([
            'respond_email.*' => 'required|email',
            'respond_msg' => 'required',
            'attached_image.*' => 'file|image'
        ]);
        
    }
}
