<?php

namespace App\View\Components\About;

use Illuminate\View\Component;
use App\Models\AboutPage;

class AboutHero extends Component
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
        $about = AboutPage::where('id', 1)->first(['hero_head','hero_text', 'hero_btn', 'hero_background', 'hero_hidden']);
        return view('components.about.about-hero', compact('about'));
    }
}
