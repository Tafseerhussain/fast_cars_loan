<?php

namespace App\View\Components\how-loan-works;

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
        return view('components.how-loan-works.hero');
    }
}
