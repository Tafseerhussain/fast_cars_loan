<?php

namespace App\Http\Livewire\Admin\HowPersonalLoanWorksPage;

use Livewire\Component;

use App\Models\HowPersonalLoanWork;

class Apply extends Component
{
    public $sectionHeading;
    public $sectionText;
    public $sectionButton;

    public $isHidden;
    public function submit()
    {
        $this->validate([
            'sectionHeading' => 'required',
            'sectionText' => 'required',
        ]);
        $loan = HowPersonalLoanWork::where('id', 1)->first();
        $loan->apply_head = $this->sectionHeading;
        $loan->apply_text = $this->sectionText;
        $loan->apply_btn = $this->sectionButton;
        $loan->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        $loan = HowPersonalLoanWork::where('id', 1)->first();
        $loan->apply_hidden = $value;
        $loan->save();
    }

    public function render()
    {
        $loan = HowPersonalLoanWork::where('id', 1)->first(['apply_head','apply_text', 'apply_btn', 'apply_hidden']);
        $this->sectionHeading = $loan->apply_head;
        $this->sectionText = $loan->apply_text;
        $this->sectionButton = $loan->apply_btn;
        $this->isHidden = $loan->apply_hidden;
        return view('livewire.admin.how-personal-loan-works-page.apply');
    }
}
