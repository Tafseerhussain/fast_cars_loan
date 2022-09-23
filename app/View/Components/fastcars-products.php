<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Home;

class fastcars-products extends Component
{
    public $product;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->product = Home::where('id', 1)->first(['product_heading','product_subheading', 'product_points', 'product_text', 'product_image']);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.fastcars-products');
    }
}
