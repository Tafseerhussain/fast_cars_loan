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
                            <th>User</th>
                            <th>Contact</th>
                            <th>Loan Amount</th>
                            <th>Status</th>
                            <th>Submitted On</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applications as $app)
                        <tr>
                            <td>{{ $app->form_specific_id }}</td>
                            <td><small>{{ $app->user->name }}</small> <br>{{ $app->user->email }}</td>
                            <td>{{ $app->contactInfo->phone }}</td>
                            <td>{{ $app->personalInfo->loan_amount }}</td>
                            <td>
                                @if ($app->approved == 0)
                                    <a href="#" class="btn btn-warning btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <span class="text">Not Approved</span>
                                    </a>
                                @elseif($app->approved == 1)
                                    <a href="#" class="btn btn-success btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Approved</span>
                                    </a>
                                @elseif($app->approved == 2)
                                    <a href="#" class="btn btn-danger btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-times"></i>
                                        </span>
                                        <span class="text">Rejected</span>
                                    </a>
                                @endif
                            </td>
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