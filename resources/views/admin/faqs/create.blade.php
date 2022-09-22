@extends('admin.layouts.app')

@section('content')

    <div class="container-fluid">

        <div class="admin-create-faqs">
    
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Faq</h6>
                </div>
                <div class="card-body">
                    @livewire('admin.faq.add-new-faq')
                </div>
            </div>

        </div>

    </div>

@endsection
