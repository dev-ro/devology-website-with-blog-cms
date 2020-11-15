<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\UploadController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Services\Entities\Service;
class ServicesController extends BaseController
{

    protected $services;
    protected $uploadDir = 'services';

    public function __construct()
    {
        $this->services = new Service();
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::services.index' , [
            'services' => $this->services::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::services.create' , [
            'form_action' => route('services-store'),
            'method' => 'POST',
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $validation = $request->validate(array_merge($this->services::VALIDATION, [
            'service_name' => 'required|min:2|unique:'.$this->services->getTable().',name'
        ]));

        if($request->hasFile('service_image')) {
            $file =UploadController::uploadPlease($request->file('service_image') , $this->uploadDir);
            $validation['service_image'] = $file;
        }

        if ($this->services->storeService($validation)) {
            return back()->with('success' , 'Updated successfully');
        }

        return back()->with('error' , 'Somwthing went wrong');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        
        return view('admin::services.edit' , [
            'form_action' => route('services-store'),
            'method' => 'PATCH',
            'service' => $this->findOrFailById($this->services->getTable() , $id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate(array_merge($this->services::VALIDATION, [
            'service_name' => 'required|min:2|unique:'.$this->services->getTable().',name,'.$id
        ]));

        if($request->hasFile('service_image')) {
            $file = UploadController::uploadPlease($request->file('service_image') , $this->uploadDir);
            $validation['service_image'] = $file;
        }

        if ($this->services->updateService($validation, $id)) {
            return back()->with('success' , 'Updated successfully');
        }

        return back()->with('error' , 'Somwthing went wrong');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        UploadController::removeImage($service->image);
        if($service->delete()) {
            return back()->with('success' , 'Deleted successfully.');
        }
        return back()->with('errors' , 'Something went wrong');
    }
}
