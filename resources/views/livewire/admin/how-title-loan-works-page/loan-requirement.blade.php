<div class="admin-loan-requirement-hero">
    <div class="row">
        <div class="col-12 text-right">
            @if ($isHidden == 1)
            <a href="#!" class="btn hideViewBtn btn-danger mb-2" data-toggle="tooltip" data-placement="top" title="Unhide Section" wire:click="hideUnhideSection(0)">
                <i class="fa fa-eye-slash" aria-hidden="true"></i>
            </a>
            @else
            <a href="#!" class="btn hideViewBtn mb-2" data-toggle="tooltip" data-placement="top" title="Hide Section" wire:click="hideUnhideSection(1)">
                <i class="fa fa-eye" aria-hidden="true"></i>
            </a>
            @endif
        </div>
        <div class="col-12">
            <form wire:submit.prevent="submit">
                <div class="form-group">
                    <label for="stateName">State Name</label>
                    <input type="text" class="form-control" wire:model.defer="stateName" placeholder="State Name">
                    @error('stateName') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="stateDescription">State Description</label>
                    <textarea class="form-control" wire:model.defer="stateDescription" placeholder="State Description" cols="30" rows="5"></textarea>
                    @error('stateDescription') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn d-block">
                    Save
                </button>
                <div class="spinner-border" role="status" wire:loading>
                    <span class="sr-only">Loading...</span>
                </div>
                @if (session()->has('successMessage'))
                <span class="alert alert-success font-weight-bold d-block mt-3">
                    {{ session('successMessage') }}
                </span>
                @endif
            </form>
        </div>
        <div class="col-12 mt-4">
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($states as $state)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>
                                    {{ $state->state_name }}
                                </td>
                                <td>
                                    <span>{{ $state->state_text }}</span>
                                </td>
                                <td>
                                    <span data-toggle="tooltip" data-placement="top" title="Delete State" wire:click="deleteState({{ $state->id }})">
                                        <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirm-delete" data-id="">
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