<?php

namespace App\View\Components\About;

use Illuminate\View\Component;
use App\Models\AboutPage;

class whoAreWe extends Component
{
    public $message;
    public function __construct($message)
    {
        $this->message = $message;
    }

    public function render()
    {
        return view('components.about.who-are-we');
    }
}
