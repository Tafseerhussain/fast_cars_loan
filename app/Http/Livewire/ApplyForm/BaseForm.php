<?php

namespace App\Http\Livewire\ApplyForm;

use Livewire\Component;

class BaseForm extends Component
{
    public $message;

    public $firstName;
    public $lastName;
    public $email;
    public $mobileCode;
    public $mobileNumber;
    public $income;
    public $creditScore = '';
    public $agree;

    public $leastIncome;
    public $creditScores;

    public $creditScoreValues;
    public $leastIncomeValue;

    public function mount($message)
    {
        $this->message = $message;
        $base = \App\Models\BaseForm::first();
        $this->leastIncomeValue = $base->least_income;
        $this->creditScoreValues = $base->credit_scores;
    }

    protected $rules = [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required',
        'mobileCode' => 'required',
        'mobileNumber' => 'required|numeric',
        'income' => 'required|numeric',
        'creditScore' => 'required',
    ];

    public function submit()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.apply-form.base-form');
    }
}
