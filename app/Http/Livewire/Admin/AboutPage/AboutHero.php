<?php

namespace App\Http\Livewire\Admin\AboutPage;

use Livewire\Component;
use App\Models\AboutPage;
use Livewire\WithFileUploads;

class AboutHero extends Component
{
    use WithFileUploads;

    public $heroHeading;
    public $heroText;
    public $heroButton;
    public $formHeading;
    public $heroBackground;
    public $heroPreview;

    public $isHidden;

    public function submit()
    {
        $this->validate([
            'heroHeading' => 'required',
            'heroText' => 'required',
            'heroButton' => 'required',
        ]);
        $about = AboutPage::where('id', 1)->first();
        $about->hero_head = $this->heroHeading;
        $about->hero_text = $this->heroText;
        $about->hero_btn = $this->heroButton;
        $about->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function submitImage()
    {
        $this->validate([
            'heroBackground' => 'required|image',
        ]);
        $about = AboutPage::where('id', 1)->first();
        $extension = $this->heroBackground->getClientOriginalExtension();
        $img = $this->heroBackground->storeAs('about', 'about-bg.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $about->hero_background = $imgUrl;
        $about->save();
        session()->flash('successMessageImage', 'Updated!');
    }

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        $about = AboutPage::where('id', 1)->first();
        $about->hero_hidden = $value;
        $about->save();
    }

    public function render()
    {
        $about = AboutPage::where('id', 1)->first(['hero_head','hero_text', 'hero_btn', 'hero_background', 'hero_hidden']);
        $this->heroHeading = $about->hero_head;
        $this->heroText = $about->hero_text;
        $this->heroButton = $about->hero_btn;
        $this->heroPreview = $about->hero_background;
        $this->isHidden = $about->hero_hidden;
        return view('livewire.admin.about-page.about-hero');
    }
}
