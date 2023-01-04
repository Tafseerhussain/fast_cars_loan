@extends('admin.layouts.app')

@section('content')
	
	<div class="container-fluid customizationPage">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Customize Car Title Loan Page</h1>
        </div>

        <div class="row">
        	<div class="col-md-12">

                {{-- HERO --}}
                <div class="card shadow mb-4 border-left-success position-relative">
                  <a href="#collapseLoanHero" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                      role="button" aria-expanded="true" aria-controls="collapseLoanHero">
                      <h6 class="m-0 font-weight-bold text-primary">Main Hero <code>(First Section)</code></h6>
                  </a>
                  <div class="collapse" id="collapseLoanHero">
                      <div class="card-body">
        		            @livewire('admin.loans.hero')  
                      </div>
                    </div>
                </div>

                {{-- HOW TO --}}
                <div class="card shadow mb-4 border-left-success position-relative">
                  <a href="#collapseHowTo" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                      role="button" aria-expanded="true" aria-controls="collapseHowTo">
                      <h6 class="m-0 font-weight-bold text-primary">How To Get Loan <code>(Second Section)</code></h6>
                  </a>
                  <div class="collapse" id="collapseHowTo">
                      <div class="card-body">
                            @livewire('admin.loans.how-to')  
                      </div>
                    </div>
                </div>

                {{-- BENEFITS --}}
                <div class="card shadow mb-4 border-left-success position-relative">
                  <a href="#collapseBenefits" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                      role="button" aria-expanded="true" aria-controls="collapseBenefits">
                      <h6 class="m-0 font-weight-bold text-primary">Loan Benefits <code>(Third Section)</code></h6>
                  </a>
                  <div class="collapse" id="collapseBenefits">
                      <div class="card-body">
                            @livewire('admin.loans.benefit')  
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