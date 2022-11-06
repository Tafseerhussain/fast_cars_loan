@extends('admin.layouts.app')

@section('content')
	
	<div class="container-fluid">

        <div class="admin-dashboard">
        	<div class="row">
                <div class="col-md-6">
                    <div class="card shadow mb-4">
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Base Form</h6>
                        </div>
                        <div class="card-body">
                            @livewire('admin.forms.base-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection