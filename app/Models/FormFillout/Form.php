<?php

namespace App\Models\FormFillout;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\FormFillout\PersonalInformation;
use App\Models\FormFillout\ContactInformation;
use App\Models\FormFillout\VehicleInformation;
use App\Models\FormFillout\AdditionalPersonalInformation;
use App\Models\FormFillout\PersonalReference;
use App\Models\FormFillout\EmploymentInformation;
use App\Models\FormFillout\DisposableIncome;
use App\Models\FormFillout\Acknowledgement;

class Form extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function personalInfo()
    {
        return $this->hasOne(PersonalInformation::class);
    }
    public function contactInfo()
    {
        return $this->hasOne(ContactInformation::class);
    }
    public function vehicleInfo()
    {
        return $this->hasOne(VehicleInformation::class);
    }
    public function additionalPersonalInfo()
    {
        return $this->hasOne(AdditionalPersonalInformation::class);
    }
    public function personalReference()
    {
        return $this->hasOne(PersonalReference::class);
    }
    public function employmentInfo()
    {
        return $this->hasOne(EmploymentInformation::class);
    }
    public function disposableIncome()
    {
        return $this->hasOne(disposableIncome::class);
    }
    public function acknowledgement()
    {
        return $this->hasOne(Acknowledgement::class);
    }
}
