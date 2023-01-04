<?php

namespace App\Http\Livewire\Admin\Loans;

use Livewire\Component;

use App\Models\Loan\CarLoan;
use Livewire\WithFileUploads;
use App\Models\PersonalLoan;

class Hero extends Component
{
    public $currentUrl;
    public $personalLoanPage = 'admin.personal-loan.customize';
    public $carLoanPage = 'admin.car-title-loan.customize';

    use WithFileUploads;

    public $sectionHeading;
    public $sectionText;
    public $sectionImage;
    public $imagePreview;

    public $boxText;
    public $boxImage;
    public $boxImagePrevview;
    public $boxMetaHeading;
    public $boxMetaText;

    public $isHidden;

    public function mount()
    {
        session()->put('currentUrl', \Request::route()->getName());
        // session('currentUrl') = \Request::route()->getName();
    }


    public function submit()
    {
        $this->validate([
            'sectionHeading' => 'required',
            'sectionText' => 'required'
        ]);
        if (session('currentUrl') == $this->personalLoanPage) {
            $loan = PersonalLoan::where('id', 1)->first();
        }
        if (session('currentUrl') == $this->carLoanPage) {
            $loan = CarLoan::where('id', 1)->first();
        }
        // $loan = CarLoan::where('id', 1)->first();
        $loan->hero_head = $this->sectionHeading;
        $loan->hero_text = $this->sectionText;
        $loan->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function submitBox()
    {
        $this->validate([
            'boxText' => 'required',
            'boxMetaHeading' => 'required',
            'boxMetaText' => 'required'
        ]);
        if (session('currentUrl') == $this->personalLoanPage) {
            $loan = PersonalLoan::where('id', 1)->first();
        }
        if (session('currentUrl') == $this->carLoanPage) {
            $loan = CarLoan::where('id', 1)->first();
        }
        // $loan = CarLoan::where('id', 1)->first();
        $loan->hero_box_text = $this->boxText;
        $loan->hero_box_head = $this->boxMetaHeading;
        $loan->hero_box_desc = $this->boxMetaText;
        $loan->save();
        session()->flash('successMessageBoxed', 'Saved!');
    }

    public function submitBoxImage()
    {
        $this->validate([
            'boxImage' => 'required|image',
        ]);
        if (session('currentUrl') == $this->personalLoanPage) {
            $loan = PersonalLoan::where('id', 1)->first();
            $extension = $this->boxImage->getClientOriginalExtension();
            $img = $this->boxImage->storeAs('loan/personal-loan', 'box-img.'.$extension , 'public');
        }
        if (session('currentUrl') == $this->carLoanPage) {
            $loan = CarLoan::where('id', 1)->first();
            $extension = $this->boxImage->getClientOriginalExtension();
            $img = $this->boxImage->storeAs('loan/car-loan', 'box-img.'.$extension , 'public');
        }
        // $loan = CarLoan::where('id', 1)->first();
        // $extension = $this->boxImage->getClientOriginalExtension();
        // $img = $this->boxImage->storeAs('loan/car-loan', 'box-img.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $loan->hero_box_img = $imgUrl;
        $loan->save();
        $this->reset();
        session()->flash('successMessageImage', 'Updated!');
    }

    public function submitImage()
    {
        $this->validate([
            'sectionImage' => 'required|image',
        ]);
        if (session('currentUrl') == $this->personalLoanPage) {
            $loan = PersonalLoan::where('id', 1)->first();
            $extension = $this->sectionImage->getClientOriginalExtension();
            $img = $this->sectionImage->storeAs('loan/personal-loan', 'hero-img.'.$extension , 'public');
        }
        if (session('currentUrl') == $this->carLoanPage) {
            $loan = CarLoan::where('id', 1)->first();
            $extension = $this->sectionImage->getClientOriginalExtension();
            $img = $this->sectionImage->storeAs('loan/car-loan', 'hero-img.'.$extension , 'public');
        }
        // $loan = CarLoan::where('id', 1)->first();
        // $extension = $this->sectionImage->getClientOriginalExtension();
        // $img = $this->sectionImage->storeAs('loan/car-loan', 'hero-img.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $loan->hero_img = $imgUrl;
        $loan->save();
        $this->reset();
        session()->flash('successMessageBoxedImage', 'Updated!');
    }

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        if (session('currentUrl') == $this->personalLoanPage) {
            $loan = PersonalLoan::where('id', 1)->first();
        }
        if (session('currentUrl') == $this->carLoanPage) {
            $loan = CarLoan::where('id', 1)->first();
        }
        // $loan = CarLoan::where('id', 1)->first();
        $loan->hero_hidden = $value;
        $loan->save();
    }

    public function render()
    {
        if (session('currentUrl') == $this->personalLoanPage) {
            $loan = PersonalLoan::where('id', 1)->first(
                [
                    'hero_head','hero_text', 'hero_img', 'hero_box_text', 'hero_box_img', 'hero_box_head', 'hero_box_desc', 'hero_hidden',
                ]
            );
        }
        if (session('currentUrl') == $this->carLoanPage) {
            $loan = CarLoan::where('id', 1)->first(
                [
                    'hero_head','hero_text', 'hero_img', 'hero_box_text', 'hero_box_img', 'hero_box_head', 'hero_box_desc', 'hero_hidden',
                ]
            );
        }
        
        $this->sectionHeading = $loan->hero_head;
        $this->sectionText = $loan->hero_text;
        $this->imagePreview = $loan->hero_img;

        $this->boxText = $loan->hero_box_text;
        $this->boxMetaHeading = $loan->hero_box_head;
        $this->boxMetaText = $loan->hero_box_desc;
        $this->boxImagePrevview = $loan->hero_box_img;
        $this->isHidden = $loan->hero_hidden;
        return view('livewire.admin.loans.hero');
    }
}
