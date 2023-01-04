@extends('layouts.app')

@section('content')
	
	<div class="title-loan-page">
		@if ($loan->hero_hidden == 0)
		<x-title-loan.hero :message="$loan"/>
		<x-title-loan.call-box :message="$loan"/>
		@endif
		@if ($loan->how_hidden == 0)
		<x-title-loan.how-to :message="$loan"/>
		@endif
		@if ($loan->benefit_hidden == 0)
		<x-title-loan.title-loan-benefits :message="$loan"/>
		@endif
	</div>

@endsection