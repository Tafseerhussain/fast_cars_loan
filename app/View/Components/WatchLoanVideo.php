<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Home;

class WatchLoanVideo extends Component
{
    public $video;

    public function __construct()
    {
        $this->video = Home::where('id', 1)->first(
            [
                'video_heading',
                'video_text_one',
                'video_text_two',
                'video_image',
                'video_link',
                'video_hidden'
            ]
        );
    }

    public function render()
    {
        return view('components.watch-loan-video');
    }
}
