<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Home;

class WhyGetFunding extends Component
{
    public $funded;

    public function __construct()
    {
        $this->funded = Home::where('id', 1)->first(
            [
                'funding_heading',
                'funding_subheading',
                'funding_background',
                'funding_card_one_image',
                'funding_card_one_heading',
                'funding_card_one_text',
                'funding_card_two_image',
                'funding_card_two_heading',
                'funding_card_two_text',
                'funding_card_three_image',
                'funding_card_three_heading',
                'funding_card_three_text',
                'funding_card_four_image',
                'funding_card_four_heading',
                'funding_card_four_text',
                'funding_hidden'
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
        return view('components.why-get-funding');
    }
}
