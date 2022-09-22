@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Faq {{ $faq->id }}: {{ $faq->title }}</h1>
        <a href="{{ route('admin.faqs') }}"><i class="fas fa-arrow-left"></i> Return</a>
    </div>
    <div class="admin-loan-applications">
        @livewire('admin.faq.edit-form', ['faq' => $faq])
    </div>
</div>
@endsection
