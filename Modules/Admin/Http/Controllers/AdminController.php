<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Http\Controllers\UploadController;
use App\Models\Enquiry;
use App\Models\Testimonial;
use Modules\Blog\Entities\Blog;
use Modules\Portfolio\Entities\Portfolio;

class AdminController extends BaseController
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {   
        $enquiriesCount = Enquiry::count();
        $blogsCount = Blog::count();
        $testimonialsCount = Testimonial::count();
        $portfolioCount = Portfolio::count();

        return view('admin::index' , [
            'enquiriesCount' => $enquiriesCount,
            'blogsCount' => $blogsCount,
            'testimonialsCount' => $testimonialsCount,
            'portfolioCount' => $portfolioCount,
        ]);
    
    
    }

    /**
     * Redirect To login if not logged in 
     *
     * @return redirect
     */
    public function redirectToLogin() {
        return redirect()->route('dashboard-home');
    }

    /**
     * XHR Upload
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function xhrUpload(Request $request) {
        $file = UploadController::uploadPlease($request->file, 'editor');
        return '/storage/'.$file;
    }
}
