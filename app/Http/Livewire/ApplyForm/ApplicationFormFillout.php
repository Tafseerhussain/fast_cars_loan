<?php

namespace App\Http\Livewire\ApplyForm;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\FormFillout\PersonalInformation;
use App\Models\FormFillout\Form;
use Auth;
use File;

class ApplicationFormFillout extends Component
{
    use WithFileUploads;
    public $haveErrors = false;

    public $loanAmount;
    public $personalFirstName;
    public $personalLastName;
    public $birthMonth;
    public $birthDate;
    public $birthYear;
    public $personalId;

    protected $rules = [
        'loanAmount' => 'required',
        'personalFirstName' => 'required',
        'personalLastName' => 'required',
        'birthMonth' => 'required|not_in:0',
        'birthDate' => 'required|not_in:0',
        'birthYear' => 'required|not_in:0',
        'personalId' => 'required',
    ];

    protected $messages = [
        'birthMonth.not_in' => 'Please select a valid :attribute',
        'birthDate.not_in' => 'Please select a valid :attribute',
        'birthYear.not_in' => 'Please select a valid :attribute'
    ];

    public function submit()
    {
        $this->haveErrors = true;
        $this->validate();
        $this->haveErrors = false;

        // Form ID
        $formId = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 15);
        $form = new Form;
        // $form->user_id = Auth::user()->id;
        $form->user_id = 1;
        $form->form_specific_id = $formId;
        $form->save();

        // Personal Information
        $personalInfo = new PersonalInformation;
        $personalInfo->loan_amount = $this->loanAmount;
        $personalInfo->form_id = $form->id;
        $personalInfo->first_name = $this->personalFirstName;
        $personalInfo->last_name = $this->personalLastName;
        $personalInfo->dob_month = $this->birthMonth;
        $personalInfo->dob_day = $this->birthDate;
        $personalInfo->dob_year = $this->birthYear;

        $extension1 = $this->personalId->getClientOriginalExtension();
        $img1 = $this->personalId->store('application_form', 'public');
        $imgUrl1 = 'storage/'.$img1;
        $personalInfo->uploaded_id = $imgUrl1;
        $personalInfo->save();

        // 
    }

    public function render()
    {
        return view('livewire.apply-form.application-form-fillout');
    }
}
