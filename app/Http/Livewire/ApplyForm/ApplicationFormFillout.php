<?php

namespace App\Http\Livewire\ApplyForm;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\FormFillout\Form;
use App\Models\FormFillout\PersonalInformation;
use App\Models\FormFillout\ContactInformation;
use App\Models\FormFillout\VehicleInformation;
use App\Models\FormFillout\AdditionalPersonalInformation;
use App\Models\FormFillout\PersonalReference;
use App\Models\FormFillout\EmploymentInformation;
use App\Models\FormFillout\DisposableIncome;
use App\Models\FormFillout\Acknowledgement;
use Auth;
use File;

class ApplicationFormFillout extends Component
{
    use WithFileUploads;
    public $haveErrors = false;
    public $formCompleted = false;

    // Personal Information
    public $loanAmount;
    public $personalFirstName;
    public $personalLastName;
    public $birthMonth;
    public $birthDate;
    public $birthYear;
    public $personalId;

    // Contact Information
    public $contactAddress;
    public $contactState = 'Utah';
    public $contactCity;
    public $contactZip;
    public $contactEmail;
    public $contactPhone;
    public $contactBestTimeToCall;

    // Vehicle Information
    public $vehicleYear;
    public $vehicleMake;
    public $vehicleModel;
    public $vehicleTrim;
    public $vehicleLicensePlateNumber;
    public $vehicleMileage;
    public $vehicleVinNumber;
    public $vehicleImages = [];

    // Additional Personal Information
    public $livingInHomeTime;
    public $rentOrOwn;
    public $usCitizen;
    public $inMilitary;
    public $dependentInMilitary;
    public $driversLicenseNumber;

    // Personal Reference
    public $firstReferenceFirstName;
    public $firstReferenceLastName;
    public $firstReferenceRelation = "";
    public $firstReferencePhoneNumber;
    public $secondReferenceFirstName;
    public $secondReferenceLastName;
    public $secondReferenceRelation = "";
    public $secondReferencePhoneNumber;
    public $thirdReferenceFirstName;
    public $thirdReferenceLastName;
    public $thirdReferenceRelation = "";
    public $thirdReferencePhoneNumber;

    // Employment Information
    public $employmentWorkPlace;
    public $employmentAddress;
    public $employmentState;
    public $employmentCity;
    public $employmentZipCode;
    public $employmentGettingPaidTime;
    public $employmentLastPayday;
    public $employmentNextPayday;
    public $employmentDirectDeposit;
    public $employmentTypeOfIncome;

    // Consent Agreements
    public $consentAgreement;
    public $pointsAgreement;

    // Disposable Income
    public $netFromJob;
    public $otherIncome;
    public $rentMortage;
    public $insuranceExpense;
    public $utilitiesExpense;
    public $creditCardsExpense;
    public $foodExpense;
    public $musicOrOtherExpense;

    // Acknowledgements
    public $filedForBackruptcy;
    public $dateFiled;
    public $status;
    public $suitOrLegalAction;
    public $signature;


    protected $rules = [
        'loanAmount' => 'required|numeric',
        'personalFirstName' => 'required',
        'personalLastName' => 'required',
        'birthMonth' => 'required|not_in:0',
        'birthDate' => 'required|not_in:0',
        'birthYear' => 'required|not_in:0',
        'personalId' => 'required|mimes:jpeg,jpg,png,svg,webp|max:2048',

        'contactAddress' => 'required',
        'contactState' => 'required',
        'contactCity' => 'required|not_in:0',
        'contactZip' => 'required',
        'contactEmail' => 'required|email',
        'contactPhone' => 'required',
        'contactBestTimeToCall' => 'required|not_in:0',

        'vehicleYear' => 'required',
        'vehicleMake' => 'required',
        'vehicleModel' => 'required',
        'vehicleTrim' => 'required',
        'vehicleLicensePlateNumber' => 'required',
        'vehicleMileage' => 'required',
        'vehicleVinNumber' => 'required',
        'vehicleImages' => 'required',
        'vehicleImages.*' => 'mimes:jpeg,jpg,png,svg,webp|max:2048',

        'livingInHomeTime' => 'required|not_in:0',
        'rentOrOwn' => 'required',
        'usCitizen' => 'required',
        'inMilitary' => 'required',
        'dependentInMilitary' => 'required',
        'driversLicenseNumber' => 'required',

        'employmentWorkPlace' => 'required',
        'employmentAddress' => 'required',
        'employmentState' => 'required|not_in:0',
        'employmentCity' => 'required|not_in:0',
        'employmentZipCode' => 'required',
        'employmentGettingPaidTime' => 'required|not_in:0',
        'employmentLastPayday' => 'required',
        'employmentNextPayday' => 'required',
        'employmentDirectDeposit' => 'required',
        'employmentTypeOfIncome' => 'required',

        'consentAgreement' => 'required',
        'pointsAgreement' => 'required',

        'netFromJob' => 'required|numeric|min:100',
        'otherIncome' => 'required|numeric|min:0',
        'rentMortage' => 'required|numeric|min:0',
        'insuranceExpense' => 'required|numeric|min:0',
        'utilitiesExpense' => 'required|numeric|min:0',
        'creditCardsExpense' => 'required|numeric|min:0',
        'foodExpense' => 'required|numeric|min:0',
        'musicOrOtherExpense' => 'required|numeric|min:0',

        'filedForBackruptcy' => 'required',
        'dateFiled' => 'required_if:filedForBackruptcy,yes',
        'status' => 'required',
        'suitOrLegalAction' => 'required',
        'signature' => 'required',

        // 'firstReferenceFirstName' => 'required_if|firstReferenceLastName,firstReferenceRelation,firstReferencePhone'
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

        if ($this->firstReferenceFirstName != '' | 
            $this->firstReferenceLastName != '' |
            $this->firstReferenceRelation != '' | 
            $this->firstReferencePhoneNumber != ''
        ) {
            $error = \Illuminate\Validation\ValidationException::withMessages([
               'firstReferenceFirstName' => ['Please fill all the fields for your first reference.'],
            ]);
            if ($this->firstReferenceFirstName != '' && 
                $this->firstReferenceLastName != '' &&
                $this->firstReferenceRelation != '' && 
                $this->firstReferencePhoneNumber != ''
            ) {
                $references = new PersonalReference;
                $references->ref1_first_name = $this->firstReferenceFirstName;
                $references->ref1_last_name = $this->firstReferenceLastName;
                $references->ref1_relation = $this->firstReferenceRelation;
                $references->ref1_phone = $this->firstReferencePhoneNumber;
            } else {
                throw $error;
            }
        }
        if ($this->secondReferenceFirstName != '' | 
            $this->secondReferenceLastName != '' |
            $this->secondReferenceRelation != '' | 
            $this->secondReferencePhoneNumber != ''
        ) {
            $error = \Illuminate\Validation\ValidationException::withMessages([
               'secondReferenceFirstName' => ['Please fill all the fields for your second reference.'],
            ]);
            if ($this->secondReferenceFirstName != '' && 
                $this->secondReferenceLastName != '' &&
                $this->secondReferenceRelation != '' && 
                $this->secondReferencePhoneNumber != ''
            ) {
                $references->ref2_first_name = $this->secondReferenceFirstName;
                $references->ref2_last_name = $this->secondReferenceLastName;
                $references->ref2_relation = $this->secondReferenceRelation;
                $references->ref2_phone = $this->secondReferencePhoneNumber;
            } else {
                throw $error;
            }
        }
        if ($this->thirdReferenceFirstName != '' | 
            $this->thirdReferenceLastName != '' |
            $this->thirdReferenceRelation != '' | 
            $this->thirdReferencePhoneNumber != ''
        ) {
            $error = \Illuminate\Validation\ValidationException::withMessages([
               'thirdReferenceFirstName' => ['Please fill all the fields for your third reference.'],
            ]);
            if ($this->thirdReferenceFirstName != '' && 
                $this->thirdReferenceLastName != '' &&
                $this->thirdReferenceRelation != '' && 
                $this->thirdReferencePhoneNumber != ''
            ) {
                $references->ref3_first_name = $this->thirdReferenceFirstName;
                $references->ref3_last_name = $this->thirdReferenceLastName;
                $references->ref3_relation = $this->thirdReferenceRelation;
                $references->ref3_phone = $this->thirdReferencePhoneNumber;
            } else {
                throw $error;
            }
        }

        $this->haveErrors = false;

        // Form ID
        $formId = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 15);
        $form = new Form;
        $form->user_id = Auth::user()->id;
        // $form->user_id = 1;
        $form->form_specific_id = $formId;
        $form->save();

        if ($this->firstReferenceFirstName != '') {
            $references->form_id = $form->id;
            $references->save();
        }


        // Personal Information
        $personalInfo = new PersonalInformation;
        $personalInfo->loan_amount = $this->loanAmount;
        $personalInfo->form_id = $form->id;
        $personalInfo->first_name = $this->personalFirstName;
        $personalInfo->last_name = $this->personalLastName;
        $personalInfo->dob_month = $this->birthMonth;
        $personalInfo->dob_day = $this->birthDate;
        $personalInfo->dob_year = $this->birthYear;

        $img1 = $this->personalId->store('application_form/personal_id', 'public');
        $imgUrl1 = 'storage/'.$img1;
        $personalInfo->uploaded_id = $imgUrl1;
        $personalInfo->save();

        // Contact Information
        $contactInfo = new ContactInformation;
        $contactInfo->form_id = $form->id;
        $contactInfo->address = $this->contactAddress;
        $contactInfo->state = $this->contactState;
        $contactInfo->city = $this->contactCity;
        $contactInfo->zip = $this->contactZip;
        $contactInfo->email = $this->contactEmail;
        $contactInfo->phone = $this->contactPhone;
        $contactInfo->best_time = $this->contactBestTimeToCall;
        $contactInfo->save();

        // Vehicle Information
        $vehicleInfo = new VehicleInformation;
        $vehicleInfo->form_id = $form->id;
        $vehicleInfo->year = $this->vehicleYear;
        $vehicleInfo->make = $this->vehicleMake;
        $vehicleInfo->model = $this->vehicleModel;
        $vehicleInfo->trim = $this->vehicleTrim;
        $vehicleInfo->license_plate = $this->vehicleLicensePlateNumber;
        $vehicleInfo->mileage = $this->vehicleMileage;
        $vehicleInfo->vin = $this->vehicleVinNumber;
        $vehicleImagesArray = [];
        foreach ($this->vehicleImages as $key => $photo) {
            $carImage = $photo->store('application_form/vehicle_images', 'public');
            $carImageUrl = 'storage/'.$carImage;
            $vehicleImagesArray[] = [
                'image' => $carImageUrl,
            ];
        }
        $vehicleInfo->vehicle_images = json_encode($vehicleImagesArray);
        $vehicleInfo->save();

        // Additional Personal Information
        $additionalInfo = new AdditionalPersonalInformation;
        $additionalInfo->form_id = $form->id;
        $additionalInfo->home_living_time = $this->livingInHomeTime;
        $additionalInfo->rent_or_own = $this->rentOrOwn;
        $additionalInfo->us_citizen = $this->usCitizen;
        $additionalInfo->military = $this->inMilitary;
        $additionalInfo->dependent_on_military = $this->dependentInMilitary;
        $additionalInfo->drivers_license_number = $this->driversLicenseNumber;
        $additionalInfo->save();

        // Employment Information
        $employmentInfo = new EmploymentInformation;
        $employmentInfo->form_id = $form->id;
        $employmentInfo->work_place = $this->employmentWorkPlace;
        $employmentInfo->address = $this->employmentAddress;
        $employmentInfo->state = $this->employmentState;
        $employmentInfo->city = $this->employmentCity;
        $employmentInfo->zip = $this->employmentZipCode;
        $employmentInfo->get_paid = $this->employmentGettingPaidTime;
        $employmentInfo->last_payday = $this->employmentLastPayday;
        $employmentInfo->next_payday = $this->employmentNextPayday;
        $employmentInfo->direct_deposit = $this->employmentDirectDeposit;
        $employmentInfo->type_of_income = $this->employmentTypeOfIncome;
        $employmentInfo->save();

        // Disposable Income
        $disposableIncome = new DisposableIncome;
        $disposableIncome->form_id = $form->id;
        $disposableIncome->net_from_job = $this->netFromJob;
        $disposableIncome->other_income = $this->otherIncome;
        $disposableIncome->rent = $this->rentMortage;
        $disposableIncome->insurance = $this->insuranceExpense;
        $disposableIncome->utilities = $this->utilitiesExpense;
        $disposableIncome->cards = $this->creditCardsExpense;
        $disposableIncome->food = $this->foodExpense;
        $disposableIncome->other = $this->musicOrOtherExpense;
        $disposableIncome->save();

        // Acknowledgements
        $acknowledge = new Acknowledgement;
        $acknowledge->form_id = $form->id;
        $acknowledge->filed_for_bankruptcy = $this->filedForBackruptcy;
        $acknowledge->filed_date = $this->dateFiled;
        $acknowledge->status = $this->status;
        $acknowledge->suit_legal_judgement = $this->suitOrLegalAction;
        $acknowledge->sign = $this->signature;
        $acknowledge->save();

        $this->reset();

    }

    public function render()
    {
        return view('livewire.apply-form.application-form-fillout');
    }
}
