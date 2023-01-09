@extends('admin.layouts.app')

@section('content')

<div class="container-fluid customizationPage">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Customize Advantages Page</h1>
    </div>
    <div class="row">
        <div class="col-md-12">

            {{-- HERO --}}
            <div class="card shadow mb-4 border-left-success position-relative">
                <a href="#collapseHero" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseHero">
                    <h6 class="m-0 font-weight-bold text-primary">Hero Section <code>(First Section)</code></h6>
                </a>
                <div class="collapse" id="collapseHero">
                    <div class="card-body">
                        @livewire('admin.advantage.hero')
                    </div>
                </div>
            </div>

            {{-- ADVANTAGE --}}
            <div class="card shadow mb-4 border-left-success position-relative">
                <a href="#collapseAdvantages" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseAdvantages">
                    <h6 class="m-0 font-weight-bold text-primary">Advantage Section <code>(Second Section)</code></h6>
                </a>
                <div class="collapse" id="collapseAdvantages">
                    <div class="card-body">
                        @livewire('admin.advantage.advantages')
                    </div>
                </div>
            </div>

            {{-- GET LOAN --}}
            <div class="card shadow mb-4 border-left-success position-relative">
                <a href="#collapseGetLoan" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseGetLoan">
                    <h6 class="m-0 font-weight-bold text-primary">Get Loan Section <code>(Third Section)</code></h6>
                </a>
                <div class="collapse" id="collapseGetLoan">
                    <div class="card-body">
                        @livewire('admin.advantage.get-loan')
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection