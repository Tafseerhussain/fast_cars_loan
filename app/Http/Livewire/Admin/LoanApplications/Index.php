<?php

namespace App\Http\Livewire\Admin\LoanApplications;

use Livewire\Component;
use App\Models\FormFillout\Form;

class Index extends Component
{
    public function render()
    {
        $applications = Form::latest()->get();
        return view('livewire.admin.loan-applications.index', compact('applications'));
    }
}
