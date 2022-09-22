<div class="admin-password">
    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label for="oldPassword">Old Password</label>
            <input type="password" class="form-control" wire:model.defer="oldPassword" placeholder="...">
            @error('oldPassword') <span class="input_error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="newPassword">New Password</label>
            <input type="password" class="form-control" wire:model.defer="newPassword" placeholder="...">
            @error('newPassword') <span class="input_error">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn d-block">
            Update Password
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