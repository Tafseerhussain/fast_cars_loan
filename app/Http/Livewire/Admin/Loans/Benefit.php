<?php

namespace App\Http\Livewire\Admin\Loans;

use Livewire\Component;

use App\Models\Loan\CarLoan;

class Benefit extends Component
{
    public $sectionHeading;
    public $sectionText;
    public $benefitPoints;
    
    public $isHidden;

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        $loan = CarLoan::where('id', 1)->first();
        $loan->benefit_hidden = $value;
        $loan->save();
    }

    public function submit()
    {
        $this->validate([
            'sectionHeading' => 'required',
            'sectionText' => 'required',
            'benefitPoints' => 'required'
        ]);
        $loan = CarLoan::where('id', 1)->first();
        $loan->benefit_head = $this->sectionHeading;
        $loan->benefit_text = $this->sectionText;
        $loan->benefit_points = $this->benefitPoints;
        $loan->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function render()
    {
        $loan = CarLoan::where('id', 1)->first(
            [
                'benefit_head','benefit_text', 'benefit_points', 'benefit_hidden'
            ]
        );
        $this->sectionHeading = $loan->benefit_head;
        $this->sectionText = $loan->benefit_text;
        $this->benefitPoints = $loan->benefit_points;
        $this->isHidden = $loan->benefit_hidden;
        return view('livewire.admin.loans.benefit');
    }
}
