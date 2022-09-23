<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Home;

class FastCarProducts extends Component
{
    public $product;
    
    public function __construct()
    {
        $this->product = Home::where('id', 1)->first(
            [
                'product_heading',
                'product_subheading', 
                'product_points', 
                'product_text', 
                'product_image'
            ]
        );
    }

    public function render()
    {
        return view('components.fast-car-products');
    }
}
