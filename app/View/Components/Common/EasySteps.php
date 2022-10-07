<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;
use App\Models\Home;

class EasySteps extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $message;

    public function __construct()
    {
        $this->message = Home::where('id', 1)->first([
            'steps_heading',
            'step_one_heading', 'step_one_text', 'step_one_image',
            'step_two_heading', 'step_two_text', 'step_two_image',
            'step_three_heading', 'step_three_text', 'step_three_image',
            'steps_hidden'
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.easy-steps');
    }
}
