<div class="row">
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Loan Approval</h6>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="submit">
                    <div class="form-group">
                        <label for="approvalMessage">Approval Message</label>
                        <textarea cols="30" rows="3" class="form-control" wire:model.delay="approvalMessage"></textarea>
                        @error('approvalMessage') <span class="input_error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="approvalMessageLineTwo">Approval Message Line 2</label>
                        <textarea cols="30" rows="3" class="form-control" wire:model.delay="approvalMessageLineTwo"></textarea>
                        @error('approvalMessageLineTwo') <span class="input_error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkToContract">Link to Contract</label>
                        <input type="text" class="form-control" wire:model.delay="linkToContract">
                        @error('linkToContract') <span class="input_error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="lastMessage">Last Message</label>
                        <textarea cols="30" rows="3" class="form-control" wire:model.delay="lastMessage"></textarea>
                        @error('lastMessage') <span class="input_error">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn d-block">
                        Update Email
                    </button>
                    <div class="spinner-border" role="status" wire:loading>
                        <span class="sr-only">Loading...</span>
                    </div>
                    @if (session()->has('successMessage'))
                    <span class="alert alert-success font-weight-bold d-block mt-3">
                        {{ session('successMessage') }}
                    </span>
                    @endif
                    @if (session()->has('errorMessage'))
                    <span class="alert alert-danger font-weight-bold d-block mt-3">
                        {{ session('errorMessage') }}
                    </span>
                    @endif
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow p-3">
            <h4 class="text-center">Email Template Structure</h4>
            <hr>
            <p>Hello User,</p>
            <p>
                {{ $approvalMessage }}
            </p>
            <code class="text-center mb-3">
                Loan Amount
            </code>
            <p>
                {{ $approvalMessageLineTwo }}
            </p>
            <code class="text-center mb-4">
                <span class="border p-2 rounded">
                    Contract Link Button
                </span>
            </code>
            <hr>
            <p>
                {{ $lastMessage }}
            </p>
        </div>
    </div>
</div>