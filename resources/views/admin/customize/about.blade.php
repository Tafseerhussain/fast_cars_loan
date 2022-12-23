@extends('admin.layouts.app')

@section('content')
	
	<div class="container-fluid customizationPage">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Customize About Page</h1>
        </div>

        <div class="row">
        	<div class="col-md-12">

                {{-- HERO --}}
                <div class="card shadow mb-4 border-left-success position-relative">
                  <a href="#collapseHomeHero" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                      role="button" aria-expanded="true" aria-controls="collapseHomeHero">
                      <h6 class="m-0 font-weight-bold text-primary">About Hero <code>(First Section)</code></h6>
                  </a>
                  <div class="collapse" id="collapseHomeHero">
                      <div class="card-body">
        		            @livewire('admin.about-page.about-hero')  
                      </div>
                    </div>
                </div>  

                {{-- WHO WE ARE --}}
                <div class="card shadow mb-4 border-left-success position-relative">
                  <a href="#collapseWhoWeAre" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                      role="button" aria-expanded="true" aria-controls="collapseWhoWeAre">
                      <h6 class="m-0 font-weight-bold text-primary">Who We Are <code>(Second Section)</code></h6>
                  </a>
                  <div class="collapse" id="collapseWhoWeAre">
                      <div class="card-body">
                            @livewire('admin.about-page.who-we-are')  
                      </div>
                    </div>
                </div> 

                {{-- WHAT WE OFFER --}}
                <div class="card shadow mb-4 border-left-success position-relative">
                    <a href="#collapseWhatWeOffer" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseWhatWeOffer">
                        <h6 class="m-0 font-weight-bold text-primary">What We Offer <code>(Third Section)</code></h6>
                    </a>
                    <div class="collapse" id="collapseWhatWeOffer">
                        <div class="card-body">
                            @livewire('admin.about-page.what-we-offer')  
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