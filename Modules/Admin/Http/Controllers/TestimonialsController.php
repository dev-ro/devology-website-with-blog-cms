<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\UploadController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Testimonial;
class TestimonialsController extends BaseController
{   

    /**
     * Upload Directory
     */
    protected string $updir = 'testimonials';
    protected $testimonial;

    public function __construct()
    {
        $this->testimonial =  new Testimonial;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::testimonials.index');
        
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::testimonials.create' , [
            'form_action' => route('testimonials-store'),
            'method' => 'POST'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {   
        $testimonial = $this->findOrFailById($this->testimonial->getTable() , $id);
        return view('admin::testimonials.edit' , [
            'form_action' => route('testimonials-update' , $testimonial->id),
            'method' => 'PATCH',
            'testimonial' => $testimonial
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
        // Validation
        $testimonial = $this->findOrFailById($this->testimonial->getTable() , $id);
        if($testimonial){
            $validate = $request->validate(Testimonial::Validation);
            if($request->hasFile('testimonial_image')) {
                $file = UploadController::uploadPlease($request->file('testimonial_image') , $this->updir);
                $validate['testimonial_image'] = $file;
            }
            // Update Testimonial
            if(Testimonial::updateTestimonial($validate , $id)){
                return back()->with('success' , 'Updated successfully.');
            }
        }
        return back()->with('errors' , 'Something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $testimonial = $this->deleteById($this->testimonial->getTable() , $id);
        if($testimonial) {
            return back()->with('success' , 'Deleted successfully.');
        }
        return back()->with('errors' , 'Something went wrong');
    }


     /**
     * To mass delete the customer
     *
     * @param Request $request
     */
    public function massDestroy(Request $request) {
        foreach($request->indexes as  $testimonialId) {
            $testimonial = Testimonial::findOrFail($testimonialId);
            $testimonial->delete();
        }

        session()->flash('success' , 'Deleted successfully');

        if($request->wantsJson()) {
            return response()->json(['message' => 'Deleted successfully'], 200);
           
        } else {
            return back()->with('success' , 'Deleted successfully.');
        }


    }

}
