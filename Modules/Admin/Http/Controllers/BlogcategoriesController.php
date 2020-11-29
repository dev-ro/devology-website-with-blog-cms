<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\UploadController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Blogcategories;

class BlogcategoriesController extends BaseController
{

    /**
     * Blog Categories
     *
     * Modules\Blog\Entities\Blogcategories
     */
    protected $blogcategories;

    /**
     * Upload Directory for blog categories
     */
    protected $uploadDir = 'blogs/categories';



    public function __construct()
    {   
        $this->blogcategories = new Blogcategories();
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::blogs.categories.index' , [
            'blogcategories' => $this->blogcategories::withCount('blogs')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::blogs.categories.create', [
            'form_action' => route('blogs-categories-store'),
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
        $validation = $request->validate([
            'blogcategory_title' => 'required|min:2|unique:'.$this->blogcategories->getTable().',title'    
        ]);

        if($request->hasFile('blogcategory_image')) {
            $file = UploadController::uploadPlease($request->file('blogcategory_image'), $this->uploadDir);

            $validation['blogcategory_image'] = $file;
        }

        if($this->blogcategories::storeBlogCategory($validation)) {
            return back()->with('success' , 'Successfully updated');
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
        return view('admin::blogs.categories.edit', [
            'blogcategory' => $this->findOrFailById($this->blogcategories->getTable(), $id),
            'form_action' => route('blogs-categories-update' , $id),
            'method' => 'PATCH',
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
        
        $validation = $request->validate([
            'blogcategory_title' => 'required|min:2|unique:'.$this->blogcategories->getTable().',title,'.$id    
        ]);

        if($request->hasFile('blogcategory_image')) {
            $file = UploadController::uploadPlease($request->file('blogcategory_image'), $this->uploadDir);

            $validation['blogcategory_image'] = $file;
        }

        if($this->blogcategories::updateBlogCategory($validation, $id)) {
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
        $blogcategory = Blogcategories::findOrFail($id);
        if($blogcategory->image) {
            UploadController::removeImage($blogcategory->image);
        }
        if($blogcategory->delete()) {
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
        foreach($request->indexes as  $id) {
            $blogcat = Blogcategories::findOrFail($id);
            $blogcat->delete();
        }

        session()->flash('success' , 'Deleted successfully');

        if($request->wantsJson()) {
            return response()->json(['message' => 'Deleted successfully'], 200);
           
        } else {
            return back()->with('success' , 'Deleted successfully.');
        }


    }
}
