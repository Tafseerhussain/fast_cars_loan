<?php

namespace App\View\Components\how-title-loan-works;

use Illuminate\View\Component;

class loan-or-pawn extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.how-title-loan-works.loan-or-pawn');
    }
}
