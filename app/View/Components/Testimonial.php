<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Testimonial as Testimonials;
class Testimonial extends Component
{

    public $testimonials;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->testimonials = Testimonials::orderBy('id' , 'DESC')->limit(8)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('ui::components.testimonial');
    }
}
