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
        		            @livewire('admin.how-personal-loan-works-page.hero')  
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

                {{-- HOW TO APPLY --}}
                <div class="card shadow mb-4 border-left-success">
                    <a href="#collapseApply" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseApply">
                        <h6 class="m-0 font-weight-bold text-primary">How To Apply Section <code>(Third Section)</code></h6>
                    </a>
                    <div class="collapse" id="collapseApply">
                        <div class="card-body">
                            @livewire('admin.how-personal-loan-works-page.how-to-apply')
                        </div>
                    </div>
                </div>

                {{-- CAN I APPLY --}}
                <div class="card shadow mb-4 border-left-success">
                    <a href="#collapseCanApply" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseCanApply">
                        <h6 class="m-0 font-weight-bold text-primary">Can I Apply Section <code>(Fourth Section)</code></h6>
                    </a>
                    <div class="collapse" id="collapseCanApply">
                        <div class="card-body">
                            @livewire('admin.how-personal-loan-works-page.apply')
                        </div>
                    </div>
                </div>

                {{-- WHAT IS NEEDED --}}
                <div class="card shadow mb-4 border-left-success">
                    <a href="#collapseNeed" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseNeed">
                        <h6 class="m-0 font-weight-bold text-primary">What I Need Section <code>(Fifth Section)</code></h6>
                    </a>
                    <div class="collapse" id="collapseNeed">
                        <div class="card-body">
                            @livewire('admin.how-personal-loan-works-page.what-i-need')
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