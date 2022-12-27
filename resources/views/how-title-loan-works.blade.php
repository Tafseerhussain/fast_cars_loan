@extends('layouts.app')

@section('content')

	<div class="title-loan-work-page">
		@if ($loan->hero_hidden == 0)
			<x-how-title-loan-works.hero :message="$loan"/>
		@endif
		<x-common.easy-steps/>
		@if ($loan->what_hidden == 0)
			<x-how-title-loan-works.loan-or-pawn :message="$loan"/>
		@endif
		<x-how-title-loan-works.loan-apply/>
		@if ($loan->state_hidden == 0)
			<x-how-title-loan-works.loan-requirements :message="$states"/>
		@endif
	</div>
	
@endsection