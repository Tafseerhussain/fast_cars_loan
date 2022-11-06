<?php

namespace App\Http\Livewire\Admin\Forms;

use Livewire\Component;

class BaseForm extends Component
{
    public $leastIncome;
    public $creditScoreValues;

    public function mount()
    {
        $base = \App\Models\BaseForm::first();
        $this->leastIncome = $base->least_income;
        $this->creditScoreValues = $base->credit_scores;
    }

    public function submit()
    {
        $this->validate([
            'leastIncome' => 'required',
            'creditScoreValues' => 'required'
        ]);
        $base =  \App\Models\BaseForm::first();
        $base->least_income = $this->leastIncome;
        $base->credit_scores = $this->creditScoreValues;
        $base->save();
        session()->flash('successMessage', 'Updated!');
    }

    public function render()
    {
        return view('livewire.admin.forms.base-form');
    }
}
