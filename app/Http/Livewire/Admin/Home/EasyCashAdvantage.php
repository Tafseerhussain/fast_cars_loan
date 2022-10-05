<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\Home;
use Livewire\WithFileUploads;

class EasyCashAdvantage extends Component
{
    use WithFileUploads;

    public $firstSectionHeading;
    public $firstSectionText;
    public $secondSectionHeading;
    public $secondSectionText;
    public $advantages;
    public $imagePreview;
    public $sectionImage;

    public function mount()
    {
        $easy = Home::where('id', 1)->first(
            [
                'easy_cash_heading',
                'easy_cash_text',
                'easy_cash_heading_two',
                'easy_cash_text_two',
                'easy_cash_image',
                'easy_cash_advantages'
            ]
        );

        $this->firstSectionHeading = $easy->easy_cash_heading;
        $this->firstSectionText = $easy->easy_cash_text;
        $this->secondSectionHeading = $easy->easy_cash_heading_two;
        $this->secondSectionText = $easy->easy_cash_text_two;
        $this->imagePreview = $easy->easy_cash_image;
        $this->advantages = $easy->easy_cash_advantages;
    }

    public function submit()
    {
        $this->validate([
            'firstSectionHeading' => 'required',
            'firstSectionText' => 'required',
            'secondSectionHeading' => 'required',
            'secondSectionText' => 'required',
            'advantages' => 'required',
        ]);
        $easy = Home::where('id', 1)->first();
        $easy->easy_cash_heading = $this->firstSectionHeading;
        $easy->easy_cash_text = $this->firstSectionText;
        $easy->easy_cash_heading_two = $this->secondSectionHeading;
        $easy->easy_cash_text_two = $this->secondSectionText;
        $easy->easy_cash_advantages = $this->advantages;
        $easy->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function submitImage()
    {
        $this->validate([
            'sectionImage' => 'required|image',
        ]);
        $easy = Home::where('id', 1)->first();
        $extension = $this->sectionImage->getClientOriginalExtension();
        $img = $this->sectionImage->storeAs('home', 'fast-cash.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $easy->easy_cash_image = $imgUrl;
        $easy->save();
        session()->flash('successMessageImage', 'Updated!');
    }

    public function render()
    {
        return view('livewire.admin.home.easy-cash-advantage');
    }
}
