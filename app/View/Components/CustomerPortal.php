<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Home;

class CustomerPortal extends Component
{
    public $portal;
    
    public function __construct()
    {
        $this->portal = Home::where('id', 1)->first(
            [
                'portal_heading',
                'portal_card_one_text',
                'portal_card_two_text',
                'portal_card_three_text',
                'portal_card_four_text',
                'portal_card_one_image',
                'portal_card_two_image',
                'portal_card_three_image',
                'portal_card_four_image',
                'portal_hidden'
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
        return view('components.customer-portal');
    }
}
