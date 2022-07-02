<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\Home;
use Livewire\WithFileUploads;

class Hero extends Component
{
    use WithFileUploads;

    public $heroHeading;
    public $heroText;
    public $heroButton;
    public $formHeading;
    public $heroBackground;
    public $heroPreview;


    public function submit()
    {
        $this->validate([
            'heroHeading' => 'required',
            'heroText' => 'required',
            'heroButton' => 'required',
            'formHeading' => 'required',
        ]);
        $hero = Home::where('id', 1)->first();
        $hero->hero_head = $this->heroHeading;
        $hero->hero_text = $this->heroText;
        $hero->hero_btn = $this->heroButton;
        $hero->form_head = $this->formHeading;
        $hero->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function submitImage()
    {
        $this->validate([
            'heroBackground' => 'required|image',
        ]);
        $hero = Home::where('id', 1)->first();
        $extension = $this->heroBackground->getClientOriginalExtension();
        $img = $this->heroBackground->storeAs('home', 'hero-bg.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $hero->hero_background = $imgUrl;
        $hero->save();
        session()->flash('successMessageImage', 'Updated!');
    }

    public function render()
    {
        $hero = Home::where('id', 1)->first(['hero_head','hero_text', 'hero_btn', 'form_head', 'hero_background']);
        $this->heroHeading = $hero->hero_head;
        $this->heroText = $hero->hero_text;
        $this->heroButton = $hero->hero_btn;
        $this->formHeading = $hero->form_head;
        $this->heroPreview = $hero->hero_background;
        return view('livewire.admin.home.hero', compact('hero'));
    }
}
