<?php

namespace App\View\Components\About;

use Illuminate\View\Component;
use App\Models\AboutPage;

class whatWeOffer extends Component
{
    public $offer;

    public function __construct()
    {
        $this->offer = AboutPage::where('id', 1)->first(
            [
                'offer_head',
                'offer_point_head_1', 
                'offer_point_head_2', 
                'offer_point_head_3', 
                'offer_point_head_4',
                'offer_point_text_1', 
                'offer_point_text_2', 
                'offer_point_text_3', 
                'offer_point_text_4', 
                'offer_hidden'
            ]
        );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        
        return view('components.about.what-we-offer');
    }
}
