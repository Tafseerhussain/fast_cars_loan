@extends('admin.layouts.app')

@section('content')

	<div class="container-fluid">

        <div class="admin-loan-applications">
            @livewire('admin.emails.loan-approval' , ['approval' => $approval])

        </div>

    </div>

@endsection
