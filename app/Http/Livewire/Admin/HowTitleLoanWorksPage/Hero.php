<?php

namespace App\Http\Livewire\Admin\HowTitleLoanWorksPage;

use Livewire\Component;

use App\Models\HowTitleLoanWork;
use Livewire\WithFileUploads;

class Hero extends Component
{
    use WithFileUploads;

    public $sectionHeading;
    public $sectionText;
    public $sectionButton;
    public $videoLink;
    public $sectionBackground;
    public $backgroundPreview;

    public $isHidden;

    public function submit()
    {
        $this->validate([
            'sectionHeading' => 'required',
            'sectionText' => 'required',
            'sectionButton' => 'required',
            'videoLink' => 'required',
        ]);
        $loan = HowTitleLoanWork::where('id', 1)->first();
        $loan->hero_head = $this->sectionHeading;
        $loan->hero_text = $this->sectionText;
        $loan->hero_btn = $this->sectionButton;
        $loan->video_url = $this->videoLink;
        $loan->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function submitImage()
    {
        $this->validate([
            'sectionBackground' => 'required|image',
        ]);
        $loan = HowTitleLoanWork::where('id', 1)->first();
        $extension = $this->sectionBackground->getClientOriginalExtension();
        $img = $this->sectionBackground->storeAs('loan', 'how-title-loan-works-bg.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $loan->hero_background = $imgUrl;
        $loan->save();
        session()->flash('successMessageImage', 'Updated!');
    }

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        $loan = HowTitleLoanWork::where('id', 1)->first();
        $loan->hero_hidden = $value;
        $loan->save();
    }

    public function render()
    {
        $loan = HowTitleLoanWork::where('id', 1)->first(['hero_head','hero_text', 'hero_btn', 'hero_background', 'hero_hidden', 'video_url']);
        $this->sectionHeading = $loan->hero_head;
        $this->sectionText = $loan->hero_text;
        $this->sectionButton = $loan->hero_btn;
        $this->backgroundPreview = $loan->hero_background;
        $this->isHidden = $loan->hero_hidden;
        $this->videoLink = $loan->video_url;
        return view('livewire.admin.how-title-loan-works-page.hero');
    }
}
