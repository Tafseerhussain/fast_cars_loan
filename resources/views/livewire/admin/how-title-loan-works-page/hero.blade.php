<div class="admin-how-title-loan-works-hero">
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
        <div class="col-md-8">
            <form wire:submit.prevent="submit">
                <div class="form-group">
                    <label for="sectionHeading">Section Heading</label>
                    <input type="text" class="form-control" wire:model.defer="sectionHeading" placeholder="Hero Heading">
                    @error('sectionHeading') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="sectionText">Section Text</label>
                    <textarea class="form-control" wire:model.defer="sectionText" placeholder="Hero Text" cols="30" rows="3"></textarea>
                    @error('sectionText') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="videoLink">Video Link / URL</label>
                    <input type="text" class="form-control" wire:model.defer="videoLink" placeholder="Hero Button">
                    @error('videoLink') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="sectionButton">Section Button</label>
                    <input type="text" class="form-control" wire:model.defer="sectionButton" placeholder="Hero Button">
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
        <div class="col-md-4">
            <form wire:submit.prevent="submitImage">
                <h5>Background Image:</h5>
                <small>Current Image:</small>
                <img src="{{ asset($backgroundPreview) }}" alt="" class="w-100 rounded shadow">
                <hr>
                <input type="file" wire:model="sectionBackground">
                <small class="d-block">Max: 2MB</small>
                @error('sectionBackground') <span class="input_error d-block">{{ $message }}</span> @enderror
                @if ($sectionBackground)
                    <img src="{{ $sectionBackground->temporaryUrl() }}" style="width: 150px; max-width: 100%;" class="rounded img-thumbnail mt-2">
                @endif
                
                <button type="submit" class="btn d-block mt-3">
                    Update
                </button>
                <div class="spinner-border" role="status" wire:loading>
                    <span class="sr-only">Loading...</span>
                </div>
                @if (session()->has('successMessageImage'))
                    <span class="alert alert-success font-weight-bold d-block mt-3">
                        {{ session('successMessageImage') }}
                    </span>
                @endif
            </form>
        </div>
    </div>
</div>