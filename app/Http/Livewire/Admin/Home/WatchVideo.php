<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\Home;
use Livewire\WithFileUploads;

class WatchVideo extends Component
{
    use WithFileUploads;

    public $heading;
    public $firstParagraph;
    public $secondParagraph;
    public $VideoLink;
    public $imagePreview;
    public $videoThumbnail;

    public $isHidden;

    public function mount()
    {
        $video = Home::where('id', 1)->first(
            [
                'video_heading',
                'video_text_one',
                'video_text_two',
                'video_image',
                'video_link',
                'video_hidden'
            ]
        );

        $this->heading = $video->video_heading;
        $this->firstParagraph = $video->video_text_one;
        $this->secondParagraph = $video->video_text_two;
        $this->VideoLink = $video->video_link;
        $this->imagePreview = $video->video_image;

        $this->isHidden = $video->video_hidden;
    }

    public function submit()
    {
        $this->validate([
            'heading' => 'required',
            'firstParagraph' => 'required',
            'secondParagraph' => 'required',
            'VideoLink' => 'required'
        ]);
        $video = Home::where('id', 1)->first();
        $video->video_heading = $this->heading;
        $video->video_text_one = $this->firstParagraph;
        $video->video_text_two = $this->secondParagraph;
        $video->video_link = $this->VideoLink;
        $video->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function submitImage()
    {
        $this->validate([
            'videoThumbnail' => 'required|image',
        ]);
        $video = Home::where('id', 1)->first();
        $extension = $this->videoThumbnail->getClientOriginalExtension();
        $img = $this->videoThumbnail->storeAs('home', 'watch-video.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $video->video_image = $imgUrl;
        $video->save();
        session()->flash('successMessageImage', 'Updated!');
    }

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        $video = Home::where('id', 1)->first();
        $video->video_hidden = $value;
        $video->save();
    }

    public function render()
    {
        return view('livewire.admin.home.watch-video');
    }
}
