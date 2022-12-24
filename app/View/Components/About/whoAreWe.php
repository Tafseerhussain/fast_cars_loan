<?php

namespace App\View\Components\About;

use Illuminate\View\Component;
use App\Models\AboutPage;

class whoAreWe extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        $whoWeAre = AboutPage::where('id', 1)->first(['who_head', 'who_text', 'who_img1', 'who_img2', 'who_img3','who_img4', 'who_hidden']);
        return view('components.about.who-are-we', compact('whoWeAre'));
    }
}
