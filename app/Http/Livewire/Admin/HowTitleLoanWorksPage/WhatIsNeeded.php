<?php

namespace App\Http\Livewire\Admin\HowTitleLoanWorksPage;

use Livewire\Component;

use App\Models\HowTitleLoanWork;
use Livewire\WithFileUploads;

class WhatIsNeeded extends Component
{
    use WithFileUploads;

    public $sectionHeading;
    public $sectionText;
    public $sectionImage;
    public $imagePreview;

    public $isHidden;

    public function submit()
    {
        $this->validate([
            'sectionHeading' => 'required',
            'sectionText' => 'required',
        ]);
        $loan = HowTitleLoanWork::where('id', 1)->first();
        $loan->what_head = $this->sectionHeading;
        $loan->what_text = $this->sectionText;
        $loan->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function submitImage()
    {
        $this->validate([
            'sectionImage' => 'required|image',
        ]);
        $loan = HowTitleLoanWork::where('id', 1)->first();
        $extension = $this->sectionImage->getClientOriginalExtension();
        $img = $this->sectionImage->storeAs('loan', 'what-is-needed-img.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $loan->what_img = $imgUrl;
        $loan->save();
        $this->reset();
        session()->flash('successMessageImage', 'Updated!');
    }

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        $loan = HowTitleLoanWork::where('id', 1)->first();
        $loan->what_hidden = $value;
        $loan->save();
    }

    public function render()
    {
        $loan = HowTitleLoanWork::where('id', 1)->first(['what_head','what_text', 'what_img', 'what_hidden']);
        $this->sectionHeading = $loan->what_head;
        $this->sectionText = $loan->what_text;
        $this->imagePreview = $loan->what_img;
        $this->isHidden = $loan->what_hidden;
        return view('livewire.admin.how-title-loan-works-page.what-is-needed');
    }
}
