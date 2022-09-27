@extends('admin.layouts.app')

@section('content')

    <div class="container-fluid">

        <div class="admin-loan-applications">
            @livewire('admin.emails.loan-rejected' , ['rejection' => $rejected])

        </div>

    </div>

@endsection
