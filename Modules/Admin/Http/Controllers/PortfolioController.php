<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Portfolio\Entities\Portfolio;
use App\Http\Controllers\UploadController;
class PortfolioController extends Controller
{

    protected $portfolios;

    public function __construct()
    {
        $this->portfolios = new Portfolio();
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::portfolios.index' , [
            'portfolios' => $this->portfolios::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::portfolios.create', [
            'form_action' => route('portfolio-store'),
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
        $request->validate([
            'portfolio_title' => 'required|min:2|unique:'.$this->portfolios->getTable().',title',
            'portfolio_image' => 'required|file|image|max:1024'
        ]);

        $attributes = [
            'title' => $request->portfolio_title,
            'excerpt' => $request->portfolio_excerpt,
            'description' => $request->portfolio_description,
            'slug' => $request->portfolio_title
        ];

        if($request->hasFile('portfolio_image')) {
            $file = UploadController::uploadPlease($request->file('portfolio_image') , 'portfolios');
            $attributes = array_merge($attributes, ['image' => $file]);
        }

        

        if($this->portfolios::createPortfolio($attributes)) {
            return back()->with('success' , 'Created successfully.');
        }

        return back()->with('errors' , 'Something went wrong');
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
        return view('admin::portfolios.edit' , [
            'form_action' => route('portfolio-update', $id),
            'method' => 'PATCH',
            'portfolio' => $this->portfolios::findOrFail($id)
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
        $portfolio = $this->portfolios::findOrFail($id);
        
        $request->validate([
            'portfolio_title' => 'required|min:2|unique:portfolios,title,'.$id,
            'portfolio_image' => 'required|file|image|max:1024'
        ]);

        $attributes = [
            'title' => $request->portfolio_title,
            'excerpt' => $request->portfolio_excerpt,
            'description' => $request->portfolio_description,
            'slug' => $request->portfolio_title
        ];

        if($request->hasFile('portfolio_image')) {
            UploadController::removeImage($portfolio->image);
            $file = UploadController::uploadPlease($request->file('portfolio_image') , 'portfolios');
            $attributes = array_merge($attributes, ['image' => $file]);
        }

        if($this->portfolios::updatePorfolio($attributes , $id)) {
            return back()->with('success' , 'Created successfully.');
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
        $portfolio = $this->portfolios::findOrFail($id);
        UploadController::removeImage($portfolio->image);
        if($portfolio->delete()) {
            return back()->with('success' , 'Deleted successfully.');
        }
        return back()->with('errors' , 'Something went wrong');
    }
}
