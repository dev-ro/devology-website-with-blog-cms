<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Entities\Blogcategories;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $blogs = Blog::paginate(10);
        return view('blog::index' , [
            'blogs' => $blogs
        ]);
        
    }


    /**
     * Display a single blog by the slug
     * @param slug $slug
     * @return Renderable
     */
    public function showBlog($slug) {
        return view('blog::show-blog' , [
            'blog' => Blog::whereSlug($slug)->firstOrFail(),
        ]);
    }


    /**
     * List the specific category with blogs
     *
     * @param string $catslug
     *
     * @return Rendeable
     */
    public function listCategoryWithBlogs($catslug) {
        $categorywithblogs = Blogcategories::with('blogs')
            ->whereSlug($catslug)->first();
        return view('blog::categoriesblog', [
            'categorywithblogs'=> $categorywithblogs 
        ]);
    }

   
}
