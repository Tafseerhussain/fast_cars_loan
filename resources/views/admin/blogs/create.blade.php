@extends('admin.layouts.app')

@section('content')

    <div class="container-fluid">

        <div class="admin-loan-applications">
    
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Blog</h6>
                </div>
                <div class="card-body">
                    @livewire('admin.blog.add-new-blog')
                </div>
            </div>

        </div>

    </div>

@endsection
