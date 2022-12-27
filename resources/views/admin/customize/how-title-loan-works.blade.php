@extends('admin.layouts.app')

@section('content')
	
	<div class="container-fluid customizationPage">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Customize How Title Loan Works Page</h1>
        </div>

        <div class="row">
        	<div class="col-md-12">

                {{-- HERO SECTION --}}
                <div class="card shadow mb-4 border-left-success position-relative">
                  <a href="#collapseHomeHero" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                      role="button" aria-expanded="true" aria-controls="collapseHomeHero">
                      <h6 class="m-0 font-weight-bold text-primary">Hero Section <code>(First Section)</code></h6>
                  </a>
                  <div class="collapse" id="collapseHomeHero">
                      <div class="card-body">
        		            @livewire('admin.how-title-loan-works-page.hero')  
                      </div>
                    </div>
                </div>

                {{-- STEPS --}}
                <div class="card shadow mb-4 border-left-success">
                    <a href="#collapseHomeSteps" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseHomeSteps">
                        <h6 class="m-0 font-weight-bold text-primary">Steps Section <code>(Second Section)</code></h6>
                    </a>
                    <div class="collapse" id="collapseHomeSteps">
                        <div class="card-body">
                            @livewire('admin.home.steps')
                        </div>
                    </div>
                </div>
                
                {{-- WHAT IS NEEDED SECTION --}}
                <div class="card shadow mb-4 border-left-success position-relative">
                  <a href="#collapseWhat" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                      role="button" aria-expanded="true" aria-controls="collapseWhat">
                      <h6 class="m-0 font-weight-bold text-primary">What Do I Need Section <code>(Third Section)</code></h6>
                  </a>
                  <div class="collapse" id="collapseWhat">
                      <div class="card-body">
                            @livewire('admin.how-title-loan-works-page.what-is-needed')  
                      </div>
                    </div>
                </div>

                {{-- LOAN REQUIREMENT SECTION --}}
                <div class="card shadow mb-4 border-left-success position-relative">
                  <a href="#collapseLoanRequirement" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                      role="button" aria-expanded="true" aria-controls="collapseLoanRequirement">
                      <h6 class="m-0 font-weight-bold text-primary">Loan Requirement States <code>(Fourth Section)</code></h6>
                  </a>
                  <div class="collapse" id="collapseLoanRequirement">
                      <div class="card-body">
                            @livewire('admin.how-title-loan-works-page.loan-requirement')  
                      </div>
                    </div>
                </div>
                
        	</div> 
        </div>
	</div>

@endsection

@section('custom-js')
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>   
@endsection