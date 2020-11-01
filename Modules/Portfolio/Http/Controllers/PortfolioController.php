<?php

namespace Modules\Portfolio\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Portfolio\Entities\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $portfolios = Portfolio::paginate(10);
        return view('portfolio::index', [
            'portfolios' => $portfolios,
            'title' => 'Portfolio'
        ]);
    }
    /**
     * Display a Silge Portfolio resource.
     * @return Renderable
     */
    public function singlePortfolio($slug)
    {
        $portfolio = Portfolio::whereSlug($slug)->first();
        return view('portfolio::single-portfolio', [
            'portfolio' => $portfolio,
        ]);
    }
}
