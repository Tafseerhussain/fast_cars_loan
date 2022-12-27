<?php

namespace App\Http\Livewire\Admin\HowPersonalLoanWorksPage;

use Livewire\Component;

use App\Models\HowPersonalLoanWork;
use Livewire\WithFileUploads;

class HowToApply extends Component
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
        $loan = HowPersonalLoanWork::where('id', 1)->first();
        $loan->how_head = $this->sectionHeading;
        $loan->how_text = $this->sectionText;
        $loan->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function submitImage()
    {
        $this->validate([
            'sectionImage' => 'required|image',
        ]);
        $loan = HowPersonalLoanWork::where('id', 1)->first();
        $extension = $this->sectionImage->getClientOriginalExtension();
        $img = $this->sectionImage->storeAs('loan', 'how-to-apply-img.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $loan->how_img = $imgUrl;
        $loan->save();
        $this->reset();
        session()->flash('successMessageImage', 'Updated!');
    }

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        $loan = HowPersonalLoanWork::where('id', 1)->first();
        $loan->how_hidden = $value;
        $loan->save();
    }

    public function render()
    {
        $loan = HowPersonalLoanWork::where('id', 1)->first(['how_head','how_text', 'how_img', 'how_hidden']);
        $this->sectionHeading = $loan->how_head;
        $this->sectionText = $loan->how_text;
        $this->imagePreview = $loan->how_img;
        $this->isHidden = $loan->how_hidden;
        return view('livewire.admin.how-personal-loan-works-page.how-to-apply');
    }
}
