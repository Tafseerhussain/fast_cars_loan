<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;

class HeroForm extends Component
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
        return view('components.common.hero-form');
    }
}
