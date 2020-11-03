<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Blog\Entities\Blog;
use Modules\Services\Entities\Service;

class SearchController extends Controller
{

    protected array $searchType = [
        'services',
        'blogs'
    ];

    protected $results;

    public function searchBy(Request $request) {

        if($request->type === 'services') {
            $this->services($request->search);
        }

        if($request->type === 'blogs') {
            $this->services($request->search);
        }

        return view('pages.search' , [
            'title' => 'Search',
            'results' => $this->results,
            'search' => $request->search
        ]);    
    }


    protected function services($search) {
        $this->results = Service::where('name' , 'LIKE' , "%{$search}%")
            ->paginate(20);
    }

    protected function blogs($search) {
        $this->results = Blog::where('title' , 'LIKE' , "%{$search}%")
            ->paginate(20);
    }
}
