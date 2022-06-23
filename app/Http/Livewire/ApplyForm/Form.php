<?php

namespace App\Http\Livewire\ApplyForm;

use Livewire\Component;

class Form extends Component
{
    public $eligible = false;
    public $formApply = true;

    // ABOUT YOU
    public $firstName;
    public $lastName;
    public $email;
    public $cellPhone;
    public $zipCode;
    public $state = 0;
    public $city = 0;

    // ABOUT YOUR VEHICLE
    public $vehicleType = 0;
    public $year = 0;
    public $make = 0;
    public $model = 0;
    public $trim = 0;
    public $mileage = 0;

    protected $rules = [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'zipCode' => 'required',
        'state' => 'required|not_in:0',
        'city' => 'required|not_in:0',
        'vehicleType' => 'required|not_in:0',
        'year' => 'required|not_in:0',
        'make' => 'required|not_in:0',
        'model' => 'required|not_in:0',
        'trim' => 'required|not_in:0',
        'mileage' => 'required|not_in:0',
    ];

    protected $messages = [
        'state.not_in' => 'Please select a valid :attribute',
        'city.not_in' => 'Please select a valid :attribute',
        'vehicleType.not_in' => 'Please select a valid :attribute',
        'year.not_in' => 'Please select a valid :attribute',
        'make.not_in' => 'Please select a valid :attribute',
        'model.not_in' => 'Please select a valid :attribute',
        'trim.not_in' => 'Please select a valid :attribute',
        'mileage.not_in' => 'Please select a valid :attribute',
    ];

    public function submit()
    {
        $this->validate();
        $this->eligible = true;
        $this->formApply = false;
    }

    public function render()
    {
        return view('livewire.apply-form.form');
    }
}
