<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller
{

    /**
     * index function 
     *
     * @return render
     */
    public function index() {
        return view('index');
    }

    public function contact() {
        return view('pages.contact', [
            'title' => 'Contact Us',
        ]);
    }

    public function about() {
        return view('pages.about', [
            'title' => 'About Us'
        ]);
    }

}
