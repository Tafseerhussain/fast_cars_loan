<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Testimonial;

class testimonials extends Component
{
    public $testimonials;
    
    public function __construct($testimonials)
    {
        $this->testimonials = $testimonials;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.testimonials');
    }
}
