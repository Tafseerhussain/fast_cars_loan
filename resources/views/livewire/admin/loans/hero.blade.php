<div class="admin-loans-hero">
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
        <div class="col-md-9">
            <form wire:submit.prevent="submit">
                <div class="form-group">
                    <label for="sectionHeading">Section Heading</label>
                    <input type="text" class="form-control" wire:model.defer="sectionHeading" placeholder="Hero Heading">
                    @error('sectionHeading') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="sectionText">Section Text (Use <code>&lt;br&gt;</code> to put line breaks)</label>
                    <textarea class="form-control" wire:model.defer="sectionText" placeholder="Hero Text" cols="30" rows="6"></textarea>
                    @error('sectionText') <span class="input_error">{{ $message }}</span> @enderror
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
        <div class="col-md-3">
            <form wire:submit.prevent="submitImage">
                <h5>Background Image:</h5>
                <small>Current Image:</small>
                <img src="{{ asset($imagePreview) }}" alt="" class="w-100 rounded shadow">
                <hr>
                <input type="file" wire:model="sectionImage">
                <small class="d-block">Max: 2MB</small>
                @error('sectionImage') <span class="input_error d-block">{{ $message }}</span> @enderror
                @if ($sectionImage)
                    <img src="{{ $sectionImage->temporaryUrl() }}" style="width: 150px; max-width: 100%;" class="rounded img-thumbnail mt-2">
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
    <div class="row box border rounded px-2 py-3 mt-4" style="background: #fafafa">
        <div class="col-md-9">
            <form wire:submit.prevent="submitBox">
                <div class="form-group">
                    <label for="boxText">Box Text</label>
                    <textarea class="form-control" wire:model.defer="boxText" placeholder="Hero Text" cols="30" rows="6"></textarea>
                    @error('boxText') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="boxMetaHeading">Box Meta Heading</label>
                    <input type="text" class="form-control" wire:model.defer="boxMetaHeading" placeholder="Hero Heading">
                    @error('boxMetaHeading') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="boxMetaText">Box Meta Text</label>
                    <input type="text" class="form-control" wire:model.defer="boxMetaText" placeholder="Hero Heading">
                    @error('boxMetaText') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn d-block">
                    Save
                </button>
                <div class="spinner-border" role="status" wire:loading>
                    <span class="sr-only">Loading...</span>
                </div>
                @if (session()->has('successMessageBoxed'))
                <span class="alert alert-success font-weight-bold d-block mt-3">
                    {{ session('successMessageBoxed') }}
                </span>
                @endif
            </form>
        </div>
        <div class="col-md-3">
            <form wire:submit.prevent="submitBoxImage">
                <h5>Meta Heading Image:</h5>
                <small>Current Image:</small>
                <img src="{{ asset($boxImagePrevview) }}" alt="" class="w-75 rounded shadow">
                <hr>
                <input type="file" wire:model="boxImage">
                <small class="d-block">Max: 2MB</small>
                @error('boxImage') <span class="input_error d-block">{{ $message }}</span> @enderror
                @if ($boxImage)
                    <img src="{{ $boxImage->temporaryUrl() }}" style="width: 150px; max-width: 100%;" class="rounded img-thumbnail mt-2">
                @endif
                
                <button type="submit" class="btn d-block mt-3">
                    Update
                </button>
                <div class="spinner-border" role="status" wire:loading>
                    <span class="sr-only">Loading...</span>
                </div>
                @if (session()->has('successMessageBoxedImage'))
                    <span class="alert alert-success font-weight-bold d-block mt-3">
                        {{ session('successMessageBoxedImage') }}
                    </span>
                @endif
            </form>
        </div>
    </div>
</div>