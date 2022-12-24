@extends('layouts.app')

@section('content')
	
	<div class="about-page">
		<x-about.about-hero/>
		<x-about.who-are-we :message="$whoWeAre"/>
		<x-about.what-we-offer :message="$whoWeAre"/>
		<x-user-testimonial/>
	</div>

@endsection