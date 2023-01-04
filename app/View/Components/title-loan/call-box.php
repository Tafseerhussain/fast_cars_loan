<?php

namespace App\View\Components\title-loan;

use Illuminate\View\Component;

class call-box extends Component
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
    
    public function render()
    {
        return view('components.title-loan.call-box');
    }
}
