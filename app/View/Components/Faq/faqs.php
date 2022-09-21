<?php

namespace App\View\Components\Faq;

use Illuminate\View\Component;
use App\Models\Faq;

class faqs extends Component
{
    public $faqs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faqs = Faq::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // $faqs = Faq::all();
        return view('components.faq.faqs');
    }
}
