<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Blog;
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

    public function showBlog($slug) {


        return view('blog::show-blog' , [
            'blog' => Blog::whereSlug($slug)->firstOrFail(),
        ]);
    }

   
}
