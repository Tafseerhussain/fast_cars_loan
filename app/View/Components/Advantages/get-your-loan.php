<?php

namespace App\View\Components\Advantages;

use Illuminate\View\Component;

class get-your-loan extends Component
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
    
    public function render()
    {
        return view('components.advantages.get-your-loan');
    }
}
