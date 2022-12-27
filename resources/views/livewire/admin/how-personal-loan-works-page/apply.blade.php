<div class="admin-what-is-needed-hero">
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
                    <label for="sectionHeading">Section Heading</label>
                    <input type="text" class="form-control" wire:model.defer="sectionHeading" placeholder="Hero Heading">
                    @error('sectionHeading') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="sectionText">Section Text</label>
                    <textarea class="form-control" wire:model.defer="sectionText" placeholder="Hero Text" cols="30" rows="7"></textarea>
                    @error('sectionText') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="sectionButton">Section Button Text</label>
                    <textarea class="form-control" wire:model.defer="sectionButton" placeholder="Hero Text" cols="30" rows="7"></textarea>
                    @error('sectionButton') <span class="input_error">{{ $message }}</span> @enderror
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
    </div>
</div>