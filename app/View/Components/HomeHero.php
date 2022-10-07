<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Home;

class HomeHero extends Component
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
        $hero = Home::where('id', 1)->first(['hero_head','hero_text', 'hero_btn', 'form_head', 'hero_background', 'hero_hidden']);
        return view('components.home-hero', compact('hero'));
    }
}
