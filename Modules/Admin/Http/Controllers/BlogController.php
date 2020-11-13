<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\UploadController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Blog;
class BlogController extends BaseController
{

    /**
    * Upload Directory
    */
   protected string $updir = 'blogs';
   protected $blogs;

   public function __construct()
   {
       $this->blogs =  new Blog;
   }


    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $blogs = $this->blogs->paginate(10);
        return view('admin::blogs.index' , [
            'blogs' => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::blogs.create',  [
            'form_action' => route('blogs-store'),
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
        dd($request->all());
        // Validation
        $validation = $request->validate($this->blogs::VALIDATION);

        if($request->hasFile('blog_image')) {
            $file = UploadController::uploadPlease($request->file('blog_image'), 'blogs');
            $validation['blog_image'] = $file;
        }

        if($this->blogs::storeblog($validation)) {
            return back()->with('success' , 'Successfully created');
        }

        return back()->with('error' , 'Something went wrong');
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
        return view('admin::blogs.edit' , [
            'form_action' => route('blogs-update' , $id),
            'method' => 'PATCH',
            'blog' => $this->blogs->findOrFail($id)
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
        // Check If Id Exist
        $blog = $this->findOrFailById($this->blogs->getTable() , $id);

        // Validation
        $validation = $request->validate($this->blogs::VALIDATION);

        if($request->hasFile('blogimage')) {
            $file = UploadController::uploadPlease($request->file('blogimage'), 'blogs');
            $validation['blogimage'] = $file;
        }

        // Update Blog
        if($this->blogs->updateBlog($validation, $id)) {
            return back()->with('success' , 'Successfully updated');
        }

        return back()->with('error' , 'Something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $blog = $this->deleteById($this->blogs->getTable() , $id);
        if($blog) {
            return back()->with('success' , 'Deleted successfully.');
        }
        return back()->with('errors' , 'Something went wrong');
    }
}
