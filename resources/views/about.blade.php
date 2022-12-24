@extends('layouts.app')

@section('content')
	
	<div class="about-page">
		<x-about.about-hero/>
		<x-about.who-we-are/>
		<x-about.what-we-offer/>
		<x-user-testimonial/>
	</div>

@endsection