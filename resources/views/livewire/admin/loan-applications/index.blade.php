<div class="admin-loan-applications">
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Submitted Applications</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Application ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Loan Amount</th>
                            <th>Submitted On</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applications as $app)
                        <tr>
                            <td>{{ $app->form_specific_id }}</td>
                            <td>{{ $app->user->name }}</td>
                            <td>{{ $app->user->email }}</td>
                            <td>{{ $app->contactInfo->phone }}</td>
                            <td>{{ $app->personalInfo->loan_amount }}</td>
                            <td>{{ $app->created_at->format('d M, Y') }}</td>
                            <td>
                                <a href="/admin/loan-applications/{{ $app->id }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="View Application">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete Application">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>