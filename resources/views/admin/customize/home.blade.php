@extends('admin.layouts.app')

@section('content')
	
	<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Customize Home Page</h1>
        </div>

        <div class="row">
        	<div class="col-md-12">
                {{-- HERO --}}
        		<div class="card shadow mb-4 border-left-success">
                    <a href="#collapseHomeHero" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseHomeHero">
                        <h6 class="m-0 font-weight-bold text-primary">Hero Section (First Section)</h6>
                    </a>
                    <div class="collapse" id="collapseHomeHero">
                        <div class="card-body">
                            @livewire('admin.home.hero')
                        </div>
                    </div>
                </div>

                {{-- STEPS --}}
                <div class="card shadow mb-4 border-left-success">
                    <a href="#collapseHomeSteps" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseHomeSteps">
                        <h6 class="m-0 font-weight-bold text-primary">Steps Section (Second Section)</h6>
                    </a>
                    <div class="collapse" id="collapseHomeSteps">
                        <div class="card-body">
                            @livewire('admin.home.steps')
                        </div>
                    </div>
                </div>

                {{-- FASTCARS PRODUCTS --}}
                <div class="card shadow mb-4 border-left-success">
                    <a href="#collapseProducts" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseProducts">
                        <h6 class="m-0 font-weight-bold text-primary">FastCar Products Section (Third Section)</h6>
                    </a>
                    <div class="collapse" id="collapseProducts">
                        <div class="card-body">
                            @livewire('admin.home.fastcar-products')
                        </div>
                    </div>
                </div>

                {{-- WHY GET FUNDED --}}
                <div class="card shadow mb-4 border-left-success">
                    <a href="#collapseFunded" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseFunded">
                        <h6 class="m-0 font-weight-bold text-primary">Why Get Funded (Fourth Section)</h6>
                    </a>
                    <div class="collapse" id="collapseFunded">
                        <div class="card-body">
                            @livewire('admin.home.why-get-funded')
                        </div>
                    </div>
                </div>

        	</div>
            
        </div>
	</div>

@endsection