<?php

namespace App\View\Components\About;

use Illuminate\View\Component;
use App\Models\AboutPage;

class whatWeOffer extends Component
{
    public $message;
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        
        return view('components.about.what-we-offer');
    }
}
