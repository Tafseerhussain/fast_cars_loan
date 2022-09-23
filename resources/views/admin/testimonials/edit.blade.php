@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Testimonial {{ $testimonial->id }}: {{ $testimonial->name }}</h1>
        <a href="{{ route('admin.testimonials') }}"><i class="fas fa-arrow-left"></i> Return</a>
    </div>
    <div class="admin-loan-applications">
        @livewire('admin.testimonial.edit-form', ['testimonial' => $testimonial])
    </div>
</div>
@endsection
