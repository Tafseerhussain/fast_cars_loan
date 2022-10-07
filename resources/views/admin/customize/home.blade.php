@extends('admin.layouts.app')

@section('content')
	
	<div class="container-fluid customizationPage">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Customize Home Page</h1>
        </div>

        <div class="row">
        	<div class="col-md-12">
                {{-- HERO --}}
        		@livewire('admin.home.hero')    

                {{-- STEPS --}}
                @livewire('admin.home.steps')

                {{-- FASTCARS PRODUCTS --}}
                @livewire('admin.home.fastcar-products')

                {{-- WHY GET FUNDED --}}
                @livewire('admin.home.why-get-funded')

                {{-- WATCH VIDEO SECTION --}}
                <div class="card shadow mb-4 border-left-success">
                    <a href="#collapseWatchVideo" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseWatchVideo">
                        <h6 class="m-0 font-weight-bold text-primary">Watch Video Section <code>(Fifth Section)</code></h6>
                    </a>
                    <div class="collapse" id="collapseWatchVideo">
                        <div class="card-body">
                            @livewire('admin.home.watch-video')
                        </div>
                    </div>
                </div>

                {{-- EASY CASH ADVANTAGE SECTION --}}
                <div class="card shadow mb-4 border-left-success">
                    <a href="#collapseEasyCash" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseEasyCash">
                        <h6 class="m-0 font-weight-bold text-primary">Easy Cash Advantage Section <code>(Sixth Section)</code></h6>
                    </a>
                    <div class="collapse" id="collapseEasyCash">
                        <div class="card-body">
                            @livewire('admin.home.easy-cash-advantage')
                        </div>
                    </div>
                </div>

                {{-- CUSTOMER PORTAL SECTION --}}
                <div class="card shadow mb-4 border-left-success">
                    <a href="#collapseCustomerPortal" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseCustomerPortal">
                        <h6 class="m-0 font-weight-bold text-primary">Customer Portal Section <code>(Seventh Section)</code></h6>
                    </a>
                    <div class="collapse" id="collapseCustomerPortal">
                        <div class="card-body">
                            @livewire('admin.home.customer-portal')
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
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $('#deleteButton').attr('href', '/admin/blogs/delete/'+$(e.relatedTarget).data('id'));
        });
    </script>   
@endsection