<?php

namespace App\View\Components\how-title-loan-works;

use Illuminate\View\Component;

class loan-requirements extends Component
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
    
    public function render()
    {
        return view('components.how-title-loan-works.loan-requirements');
    }
}
