<?php

namespace App\View\Components\how-loan-works;

use Illuminate\View\Component;

class hero extends Component
{
    public $message;

    public function __construct()
    {
        $this->message = "Have your cash in hand with a few clicks";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.how-loan-works.hero');
    }
}
