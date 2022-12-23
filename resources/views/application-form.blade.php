@extends('layouts.app')

@section('content')

	<div class="application-form-page">
		<div class="application-form-header">
			<div class="container">
				<div class="row">
					<div class="col-md-9 mx-auto">
						<div class="apply-for-loan-form position-relative overflow-hidden bg-transparent" 
							{{-- style="background-image: url('/img/apply-form/clip-art.png');" --}}
							>
							<div class="row eligible">
								<div class="col-12 text-center header">
									{{-- <img src="{{ asset('/img/apply-form/badge.png') }}" alt="badge" class="congrat-badge"> --}}
									<h1 class="section-title text-white text-center">
										Please fillout the Application Form below...
									</h1>
									{{-- <p>
										Your Vehicle qualities for up to:
									</p>
									<div class="upto-value">
										$ 24,800
									</div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a href="#application-form" class="move-down">
				<img src="{{ asset('img/home/move-down.svg') }}" alt="move down">
			</a>
		</div>
		@livewire('apply-form.application-form-fillout')
	</div>

@endsection