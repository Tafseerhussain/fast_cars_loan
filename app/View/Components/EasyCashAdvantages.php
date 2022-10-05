<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Home;

class EasyCashAdvantages extends Component
{
    public $easy;
    
    public function __construct()
    {
        $this->easy = Home::where('id', 1)->first(
            [
                'easy_cash_heading',
                'easy_cash_text',
                'easy_cash_heading_two',
                'easy_cash_text_two',
                'easy_cash_image',
                'easy_cash_advantages',
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
        return view('components.easy-cash-advantages');
    }
}
