<?php

namespace App\View\Components\About;

use Illuminate\View\Component;
use App\Models\AboutPage;

class whatWeOffer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $offer = AboutPage::where('id', 1)->first(
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
                    'offer_hidden']
                );
        return view('components.about.what-we-offer', compact('offer'));
    }
}
