@extends('layouts.app')

@section('content')

	<div class="apply-form-page">

		<div class="apply-form-header">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-6 col-md-8 mx-auto text-center">
		                <h1 class="section-title text-white">
		                    Find Out How Much Cash You Can Get Within Minutes!
		                </h1>
		                <p class="text-white">
		                    Offering Title-Secured, Personal, and Online options!
		                </p>
		            </div>
		        </div>
		    </div>
		</div>

		@livewire('apply-form.form')
		
	</div>

@endsection