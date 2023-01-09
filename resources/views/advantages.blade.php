@extends('layouts.app')

@section('content')

	<div class="advantages-page">
		@if ($advantage->hero_hidden == 0)
		<x-advantages.hero :message="$advantage"/>
		@endif
		@if ($advantage->advantage_hidden == 0)
		<x-advantages.advantage-boxes :message="$advantage"/>
		@endif
		@if ($advantage->get_hidden == 0)
		<x-advantages.get-your-loan :message="$advantage"/>
		@endif
	</div>

@endsection