@extends('layouts.app')

@section('content')

	<div class="personal-loan-page">
		<x-how-personal-loan-works.hero :message="$loan"/>
		<x-common.easy-steps/>
		<x-how-personal-loan-works.personal-loan-apply :message="$loan"/>
		<x-how-personal-loan-works.loan-online :message="$loan"/>
		<x-how-personal-loan-works.personal-loan-approved :message="$loan"/>
	</div>

@endsection