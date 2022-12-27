<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;

class HowLoanWorksVideo extends Component
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
    
    public function render()
    {
        return view('components.common.how-loan-works-video');
    }
}
