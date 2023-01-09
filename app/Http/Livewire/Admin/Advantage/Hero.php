<?php

namespace App\Http\Livewire\Admin\Advantage;

use Livewire\Component;
use App\Models\Advantage;
use Livewire\WithFileUploads;

class Hero extends Component
{
    use WithFileUploads;

    public $heroHeading;
    public $heroText;
    public $heroButton;
    public $heroImage;
    public $imagePreview;

    public $isHidden;

    public function submit()
    {
        $this->validate([
            'heroHeading' => 'required',
            'heroText' => 'required',
            'heroButton' => 'required',
        ]);
        $hero = Advantage::where('id', 1)->first();
        $hero->hero_head = $this->heroHeading;
        $hero->hero_text = $this->heroText;
        $hero->hero_btn = $this->heroButton;
        $hero->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function submitImage()
    {
        $this->validate([
            'heroImage' => 'required|image',
        ]);
        $hero = Advantage::where('id', 1)->first();
        $extension = $this->heroImage->getClientOriginalExtension();
        $img = $this->heroImage->storeAs('advantage', 'hero-img.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $hero->hero_img = $imgUrl;
        $hero->save();
        session()->flash('successMessageImage', 'Updated!');
    }

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        $hero = Advantage::where('id', 1)->first();
        $hero->get_hidden = $value;
        $hero->save();
    }

    public function render()
    {
        $hero = Advantage::where('id', 1)->first(['hero_head','hero_text', 'hero_btn', 'hero_img', 'hero_hidden']);
        $this->heroHeading = $hero->hero_head;
        $this->heroText = $hero->hero_text;
        $this->heroButton = $hero->hero_btn;
        $this->imagePreview = $hero->hero_img;
        $this->isHidden = $hero->hero_hidden;
        return view('livewire.admin.advantage.hero');
    }
}
