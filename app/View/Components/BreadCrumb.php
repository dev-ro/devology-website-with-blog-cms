<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Traits\BreadCrumb as BreadStructure;
class BreadCrumb extends Component
{

    public $breadcrumbs;
    public $page_title;

    use BreadStructure;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->breadcrumbs = $this->breadCrumbStructure()['breadcrumbs'];
        $this->page_title = $this->breadCrumbStructure()['page_title'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.breadcrumb');
    }
}
