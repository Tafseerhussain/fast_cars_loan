<?php

namespace App\Http\Livewire\Admin\HowTitleLoanWorksPage;

use Livewire\Component;

use App\Models\HowTitleLoanWork;
use App\Models\TitleLoanState;

class LoanRequirement extends Component
{
    public $stateName;
    public $stateDescription;
    public $states;

    public $isHidden;

    public function submit()
    {
        $this->validate([
            'stateName' => 'required',
            'stateDescription' => 'required',
        ]);
        $loan = new TitleLoanState;
        $loan->state_name = $this->stateName;
        $loan->state_text = $this->stateDescription;
        $loan->save();
        $this->reset();
        session()->flash('New State Added', 'Saved!');
    }

    public function deleteState($id)
    {
        $state = TitleLoanState::findOrFail($id);
        $state->delete();
    }

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        $loan = HowTitleLoanWork::where('id', 1)->first();
        $loan->state_hidden = $value;
        $loan->save();
    }

    public function render()
    {
        $loan = HowTitleLoanWork::where('id', 1)->first(['state_hidden']);
        $this->states = TitleLoanState::all();
        $this->isHidden = $loan->state_hidden;
        return view('livewire.admin.how-title-loan-works-page.loan-requirement');
    }
}
