@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Blog {{ $blog->id }}: {{ $blog->title }}</h1>
        <a href="{{ route('admin.blogs') }}"><i class="fas fa-arrow-left"></i> Return</a>
    </div>
    <div class="admin-loan-applications">
        @livewire('admin.blog.form-edit', ['blog' => $blog])
    </div>
</div>
@endsection
