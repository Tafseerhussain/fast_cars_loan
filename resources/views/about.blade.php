@extends('layouts.app')

@section('content')
	
	<div class="about-page">
		<x-about.hero/>
		<x-about.who-we-are/>
		<x-about.what-we-offer/>
		<x-testimonials/>
	</div>

@endsection