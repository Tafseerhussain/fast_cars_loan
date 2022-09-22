@extends('admin.layouts.app')

@section('content')

	<div class="container-fluid">

        <div class="admin-faqs">

            <a class="btn btn-primary btn-icon-split mb-4" href="{{ route('admin.faqs.add') }}">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add New FAQ</span>
            </a>
    
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Faqs</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>faq ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $faq)
                                <tr>
                                    <td>{{ $faq->id }}</td>
                                    <td>
                                        {{ $faq->title }}
                                    </td>
                                    <td data-toggle="tooltip" data-placement="top" title="{{ $faq->description }}">
                                        <span>{{ Str::limit($faq->description, 50) }}</span>
                                    </td>
                                    <td>{{ $faq->created_at->format('d M, Y') }}</td>
                                    <td>
                                        <a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Edit Faq">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <span data-toggle="tooltip" data-placement="top" title="Delete Faq">
                                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirm-delete" data-id="{{ $faq->id }}">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Blog?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Are you sure that you want to delete this FAQ?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a class="btn btn-danger" id="deleteButton" href="#">Delete</a>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('custom-css')
	<!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('custom-js')
	<!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $('#deleteButton').attr('href', '/admin/faq/delete/'+$(e.relatedTarget).data('id'));
        });
    </script>   
@endsection