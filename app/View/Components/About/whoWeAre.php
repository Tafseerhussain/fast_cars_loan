<?php

namespace App\View\Components\About;

use Illuminate\View\Component;
use App\Models\AboutPage;

class whoWeAre extends Component
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
        $who = AboutPage::where('id', 1)->first(
                [
                    'who_head',
                    'who_text', 
                    'who_img1', 
                    'who_img2', 
                    'who_img3',
                    'who_img4', 
                    'who_hidden']
                );
        return view('components.about.who-we-are', compact('who'));
    }
}
