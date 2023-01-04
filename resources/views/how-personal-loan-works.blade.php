@extends('layouts.app')

@section('content')

	<div class="personal-loan-page">
		@if ($loan->hero_hidden == 0)
		<x-how-personal-loan-works.hero :message="$loan"/>
		@endif
		<x-common.easy-steps/>
		@if ($loan->how_hidden == 0)
		<x-how-personal-loan-works.personal-loan-apply :message="$loan"/>
		@endif
		@if ($loan->apply_hidden == 0)
		<x-how-personal-loan-works.loan-online :message="$loan"/>
		@endif
		@if ($loan->need_hidden == 0)
		<x-how-personal-loan-works.personal-loan-approved :message="$loan"/>
		@endif
	</div>

@endsection