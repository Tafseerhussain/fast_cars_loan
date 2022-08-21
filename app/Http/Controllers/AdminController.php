<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormFillout\Form;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function homepageCustomization()
    {
        return view('admin.customize.home');
    }
    public function viewLoanApplications()
    {
        return view('admin.loanApplications.index');
    }
    public function viewLoanApplication($id)
    {
        $application = Form::where('form_specific_id', $id)->first();
        return view('admin.loanApplications.view', compact('application'));
    }
}
