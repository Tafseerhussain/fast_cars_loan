<?php

namespace App\View\Components\how-personal-loan-works;

use Illuminate\View\Component;

class personal-loan-approved extends Component
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
    
    public function render()
    {
        return view('components.how-personal-loan-works.personal-loan-approved');
    }
}
