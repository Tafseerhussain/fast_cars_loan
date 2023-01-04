<?php

namespace App\Http\Livewire\Admin\Loans;

use Livewire\Component;

use App\Models\Loan\CarLoan;
use App\Models\PersonalLoan;

class Benefit extends Component
{
    public $currentUrl;
    public $personalLoanPage = 'admin.personal-loan.customize';
    public $carLoanPage = 'admin.car-title-loan.customize';

    public function mount()
    {
        $this->currentUrl = \Request::route()->getName();
    }
    public $sectionHeading;
    public $sectionText;
    public $benefitPoints;
    
    public $isHidden;

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        if ($this->currentUrl == $this->personalLoanPage) {
            $loan = PersonalLoan::where('id', 1)->first();
        }
        if ($this->currentUrl == $this->carLoanPage) {
            $loan = CarLoan::where('id', 1)->first();
        }
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
        if ($this->currentUrl == $this->personalLoanPage) {
            $loan = PersonalLoan::where('id', 1)->first();
        }
        if ($this->currentUrl == $this->carLoanPage) {
            $loan = CarLoan::where('id', 1)->first();
        }
        // $loan = CarLoan::where('id', 1)->first();
        $loan->benefit_head = $this->sectionHeading;
        $loan->benefit_text = $this->sectionText;
        $loan->benefit_points = $this->benefitPoints;
        $loan->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function render()
    {
        if ($this->currentUrl == $this->personalLoanPage) {
            $loan = PersonalLoan::where('id', 1)->first(
                [
                    'benefit_head','benefit_text', 'benefit_points', 'benefit_hidden'
                ]
            );
        }
        if ($this->currentUrl == $this->carLoanPage) {
            $loan = CarLoan::where('id', 1)->first(
                [
                    'benefit_head','benefit_text', 'benefit_points', 'benefit_hidden'
                ]
            );
        }
        
        $this->sectionHeading = $loan->benefit_head;
        $this->sectionText = $loan->benefit_text;
        $this->benefitPoints = $loan->benefit_points;
        $this->isHidden = $loan->benefit_hidden;
        return view('livewire.admin.loans.benefit');
    }
}
