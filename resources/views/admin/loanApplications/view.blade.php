@extends('admin.layouts.app')

@section('content')

	<div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h5 mb-0 text-gray-800">Application ID: {{ $application->form_specific_id }}</h1>
            <a href="{{ route('admin.loan-applications') }}"><i class="fas fa-arrow-left"></i> Return</a>
        </div>

        <div class="row">
            <div class="col-md-6">
                {{-- Personal Information --}}
                <div class="card shadow mb-4 personal_info_card">
                    <div class="card-header py-3 bg-secondary">
                        <h6 class="m-0 font-weight-bold text-white">Personal Info</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <b>Loan Amount: </b> 
                            <span class="loan-amount text-primary">${{ $application->personalInfo->loan_amount }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Name: </b> 
                            <span class="text-capitalize">
                                {{ $application->personalInfo->first_name }} {{ $application->personalInfo->last_name }}
                            </span>
                        </div>
                        <div class="mb-3">
                            <b>Date of Birth (yyyy-mm-dd):</b> 
                            <span>
                                {{ $application->personalInfo->dob_year }}-{{ $application->personalInfo->dob_month }}-{{ $application->personalInfo->dob_day }}
                            </span>
                        </div>
                        <div>
                            <b>Identification ID: </b> 
                            <span class="identification_id">
                                <img src="{{ asset($application->personalInfo->uploaded_id) }}" alt="id" class="w-100 img-thumbnail">
                            </span>
                        </div>
                    </div>
                </div>
                {{-- Vehicle Information --}}
                <div class="card shadow mb-4 vehicle_info_card">
                    <div class="card-header py-3 bg-secondary">
                        <h6 class="m-0 font-weight-bold text-white">Vehicle Information</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <b>Year: </b> 
                            <span>{{ $application->vehicleInfo->year }}</span>
                        </div>
                       <div class="mb-3">
                            <b>Make: </b> 
                            <span>{{ $application->vehicleInfo->make }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Model: </b> 
                            <span>{{ $application->vehicleInfo->model }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Trim: </b> 
                            <span>{{ $application->vehicleInfo->trim }}</span>
                        </div>
                        <div class="mb-3">
                            <b>License Plate No: </b> 
                            <span>{{ $application->vehicleInfo->license_plate }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Mileage: </b> 
                            <span>{{ $application->vehicleInfo->mileage }}</span>
                        </div>
                        <div class="mb-3">
                            <b>VIN: </b> 
                            <span>{{ $application->vehicleInfo->vin }}</span>
                        </div>
                        <div>
                            <b>Vehicle Images: </b> <br>
                            @php
                                $vehicleImages = json_decode($application->vehicleInfo->vehicle_images, true);
                            @endphp
                            @foreach ($vehicleImages as $vehicleImg)
                            <span class="vehicle_image">
                                <img src="{{ asset($vehicleImg['image']) }}" alt="id" class="w-100 img-thumbnail">
                            </span>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Employment Information --}}
                <div class="card shadow mb-4 employment_info_card">
                    <div class="card-header py-3 bg-secondary">
                        <h6 class="m-0 font-weight-bold text-white">Employment Information</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <b>Company: </b> 
                            <span>{{ $application->employmentInfo->work_place }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Address: </b> 
                            <span>{{ $application->employmentInfo->address }}</span>
                        </div>
                        <div class="mb-3">
                            <b>State: </b> 
                            <span>{{ $application->employmentInfo->state }}</span>
                        </div>
                        <div class="mb-3">
                            <b>City: </b> 
                            <span>{{ $application->employmentInfo->city }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Zip Code: </b> 
                            <span>{{ $application->employmentInfo->zip }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Get Paid: </b> 
                            <span>{{ $application->employmentInfo->get_paid }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Last Payday: </b> 
                            <span>{{ $application->employmentInfo->last_payday }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Next Payday: </b> 
                            <span>{{ $application->employmentInfo->next_payday }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Direct Deposit: </b> 
                            <span>
                                @if ($application->employmentInfo->direct_deposit == 'on')
                                    Yes
                                @else
                                    No
                                @endif
                            </span>
                        </div>
                        <div>
                            <b>Income Type: </b> 
                            <span>
                                @if ($application->employmentInfo->direct_deposit == 'on')
                                    Employment
                                @else
                                    Benefits
                                @endif
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Disposable Income --}}
                <div class="card shadow mb-4 disposable_income_card">
                    <div class="card-header py-3 bg-secondary">
                        <h6 class="m-0 font-weight-bold text-white">Disposable Income</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <b>Total Monthly Income: </b> 
                            <span class="badge badge-warning ">
                                @php
                                    $totalIncome = $application->disposableIncome->net_from_job + $application->disposableIncome->other_income;
                                @endphp
                                ${{ $totalIncome }}
                            </span>
                        </div>
                        <div class="mb-3">
                            <b>Monthly Expenses: </b> 
                            <span class="badge badge-danger ">
                                @php
                                    $totalExpenses = $application->disposableIncome->rent + 
                                                     $application->disposableIncome->insurance +
                                                     $application->disposableIncome->utilities +
                                                     $application->disposableIncome->cards +
                                                     $application->disposableIncome->foods +
                                                     $application->disposableIncome->other;
                                @endphp 
                                ${{ $totalExpenses }}
                            </span>
                        </div>
                        <div class="mb-3">
                            <b>Total Disposable Income: </b> 
                            <span class="badge badge-success ">
                                @php
                                    $totalDisposable = $totalIncome - $totalExpenses;
                                @endphp 
                                ${{ $totalDisposable }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                {{-- Contact Infromation Card --}}
                <div class="card shadow mb-4 contact_info_card">
                    <div class="card-header py-3 bg-secondary">
                        <h6 class="m-0 font-weight-bold text-white">Contact Information</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <b>Address: </b> 
                            <span>{{ $application->contactInfo->address }}</span>
                        </div>
                        <div class="mb-3">
                            <b>State: </b> 
                            <span>{{ $application->contactInfo->state }}</span>
                        </div>
                        <div class="mb-3">
                            <b>City:</b> 
                            <span>{{ $application->contactInfo->city }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Zip Code: </b> 
                            <span>{{ $application->contactInfo->zip }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Email: </b> 
                            <span>{{ $application->contactInfo->email }}</span>
                        </div>
                        <div>
                            <b>Phone Number: </b> 
                            <span>{{ $application->contactInfo->phone }}</span>
                        </div>
                    </div>
                </div>

                {{-- Additional Personal Information --}}
                <div class="card shadow mb-4 additional_info_card">
                    <div class="card-header py-3 bg-secondary">
                        <h6 class="m-0 font-weight-bold text-white">Additional Personal Information</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <b>How long have you lived in your home? </b> 
                            <span>{{ $application->additionalPersonalInfo->home_living_time }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Do you rent or own? </b> 
                            <span>{{ $application->additionalPersonalInfo->rent_or_own }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Are you a US Citizen? </b> 
                            <span>{{ $application->additionalPersonalInfo->us_citizen }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Are you in Military?</b> 
                            <span>{{ $application->additionalPersonalInfo->military }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Are You a Someone Dependent in The Military? </b> 
                            <span>{{ $application->additionalPersonalInfo->dependent_on_military }}/span>
                        </div>
                        <div>
                            <b>Driver’s Licence Number: </b> 
                            <span>{{ $application->additionalPersonalInfo->drivers_license_number }}</span>
                        </div>
                    </div>
                </div>

                {{-- Personal References --}}
                <div class="card shadow mb-4 personal_references_card">
                    <div class="card-header py-3 bg-secondary">
                        <h6 class="m-0 font-weight-bold text-white">Personal References</h6>
                    </div>
                    <div class="card-body">
                        @if (!$application->personalReference)
                            No References!
                        @else
                        <h6 class="h6 font-weight-bold text-dark mt-3">Reference 1</h6>
                        <div class="border rounded p-3">
                            <div class="mb-3">
                                <b>Name: </b> 
                                <span class="text-capitalize">
                                    @if ($application->personalReference->ref1_first_name == '')
                                        ---
                                    @else
                                        {{ $application->personalReference->ref1_first_name }} {{ $application->personalReference->ref1_last_name }}
                                    @endif
                                </span>
                            </div>
                            <div class="mb-3">
                                <b>Relation: </b> 
                                <span>
                                    @if ($application->personalReference->ref1_relation == '')
                                        ---
                                    @else
                                        {{ $application->personalReference->ref1_relation }}
                                    @endif
                                </span>
                            </div>
                            <div>
                                <b>Phone: </b> 
                                <span>
                                    @if ($application->personalReference->ref1_phone == '')
                                        ---
                                    @else
                                        {{ $application->personalReference->ref1_phone }}
                                    @endif
                                </span>
                            </div>
                        </div>
                        <h6 class="h6 font-weight-bold text-dark mt-3">Reference 2</h6>
                        <div class="border rounded p-3">
                            <div class="mb-3">
                                <b>Name: </b> 
                                <span class="text-capitalize">
                                    @if ($application->personalReference->ref2_first_name == '')
                                        ---
                                    @else
                                        {{ $application->personalReference->ref2_first_name }} {{ $application->personalReference->ref2_last_name }}
                                    @endif
                                </span>
                            </div>
                            <div class="mb-3">
                                <b>Relation: </b> 
                                <span>
                                    @if ($application->personalReference->ref2_relation == '')
                                        ---
                                    @else
                                        {{ $application->personalReference->ref2_relation }}
                                    @endif
                                </span>
                            </div>
                            <div>
                                <b>Phone: </b> 
                                <span>
                                    @if ($application->personalReference->ref2_phone == '')
                                        ---
                                    @else
                                        {{ $application->personalReference->ref2_phone }}
                                    @endif
                                </span>
                            </div>
                        </div>
                        <h6 class="h6 font-weight-bold text-dark mt-3">Reference 3</h6>
                        <div class="border rounded p-3">
                            <div class="mb-3">
                                <b>Name: </b> 
                                <span class="text-capitalize">
                                    @if ($application->personalReference->ref3_first_name == '')
                                        ---
                                    @else
                                        {{ $application->personalReference->ref3_first_name }} {{ $application->personalReference->ref3_last_name }}
                                    @endif
                                </span>
                            </div>
                            <div class="mb-3">
                                <b>Relation: </b> 
                                <span>
                                    @if ($application->personalReference->ref3_relation == '')
                                        ---
                                    @else
                                        {{ $application->personalReference->ref3_relation }}
                                    @endif
                                </span>
                            </div>
                            <div>
                                <b>Phone: </b> 
                                <span>
                                    @if ($application->personalReference->ref3_phone == '')
                                        ---
                                    @else
                                        {{ $application->personalReference->ref3_phone }}
                                    @endif
                                </span>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                {{-- Acknowledgements --}}
                <div class="card shadow mb-4 contact_info_card">
                    <div class="card-header py-3 bg-secondary">
                        <h6 class="m-0 font-weight-bold text-white">Acknowledgements</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <b>Bankrupcy in Last 6 Month: </b> 
                            <span>{{ $application->acknowledgement->filed_for_bankruptcy }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Bankrupcy Date: </b> 
                            <span>{{ $application->acknowledgement->filed_date }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Status: </b> 
                            <span>{{ $application->acknowledgement->status }}</span>
                        </div>
                        <div class="mb-3">
                            <b>Any Legal Action Against You: </b> 
                            <span>{{ $application->acknowledgement->suit_legal_judgement }}</span>
                        </div>
                        <div>
                            <b>Contract: </b>
                            <a href="#" target="_blank">Download/View Contract</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row signature-row">
            <div class="col-12 text-center">
                <div class="d-inline-block">
                    <b>Signature: </b>
                    <span class="signature">
                        {{ $application->acknowledgement->sign }}
                    </span>
                </div> 
            </div>
        </div>
        <div class="row application-actions-btns mt-2">
            <div class="col-12">
                @if ($application->approved == 0)
                    <button class="btn btn-outline-danger bg-transparent" data-toggle="modal" data-target="#loanDecisionModal2">
                        Reject
                    </button>
                    <button class="btn btn-primary ml-2" data-toggle="modal" data-target="#loanDecisionModal">
                        Approve
                    </button>
                @elseif ($application->approved == 1)
                    <div class="alert alert-success text-center">
                        This Loan has been Approved!
                    </div>
                @elseif ($application->approved == 2)
                    <div class="alert alert-danger text-center">
                        This Loan has been Rejected!
                    </div>
                @endif
            </div>
        </div>

    </div>

     <!-- Approval Modal-->
    <div class="modal fade" id="loanDecisionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Approve this Loan?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure you want to approve this loan? <b>This Action is Irreversible.</b></div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('admin.application.approve') }}" 
                        onclick="event.preventDefault();
                        document.getElementById('loan-approve-form').submit();">
                        Yes
                    </a>
                    <form id="loan-approve-form" action="{{ route('admin.application.approve') }}" method="POST" class="d-none">
                        @csrf
                        <input type="hidden" value="{{ $application->id }}" name="applicationID">
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Rejection Modal --}}
    <div class="modal fade" id="loanDecisionModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reject this Loan?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure you want to Reject this loan? <b>This Action is Irreversible.</b></div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="{{ route('admin.application.reject') }}" 
                        onclick="event.preventDefault();
                        document.getElementById('loan-reject-form').submit();">
                        Yes
                    </a>
                    <form id="loan-reject-form" action="{{ route('admin.application.reject') }}" method="POST" class="d-none">
                        @csrf
                        <input type="hidden" value="{{ $application->id }}" name="applicationID">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom-css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Freehand&display=swap');
        .personal_info_card .loan-amount {
            padding: 3px 6px;
            border-radius: 4px;
            background: #F6F6F6;
            font-weight: bold;
        }
        .personal_info_card .identification_id {
            max-width: 100%;
            width: 150px;
            display: block;
        }
        .vehicle_info_card .vehicle_image {
            max-width: 100%;
            display: inline-block;
            width: 100px;
        }
        .disposable_income_card .badge {
            font-size: 16px;
        }
        .signature-row .signature {
            font-family: 'Freehand', cursive !important;
            font-size: 18px;
        }
        .application-actions-btns {
            text-align: right;
            margin-bottom: 50px;
        }
    </style>
@endsection
