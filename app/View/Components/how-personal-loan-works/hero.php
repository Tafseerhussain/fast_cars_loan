<?php

namespace App\View\Components\how-personal-loan-works;

use Illuminate\View\Component;

class hero extends Component
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
    
    public function render()
    {
        return view('components.how-personal-loan-works.hero');
    }
}
