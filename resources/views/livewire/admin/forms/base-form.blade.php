<div class="admin-base-form">
    <form wire:submit.prevent="submit">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="leastIncome">Least Income</label>
                    <input type="text" class="form-control" wire:model="leastIncome">
                    @error('leastIncome') <span class="input_error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12">
            <hr>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="creditScoreValues">Credit Score Values (Separate each value by comma <code>&apos;,&apos;</code>)</label>
                    <textarea name="creditScoreValues" class="form-control" rows="3" wire:model.defer="creditScoreValues"></textarea>
                    @error('creditScoreValues') <span class="input_error">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <button type="submit" class="btn d-block">
            Update Values
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

