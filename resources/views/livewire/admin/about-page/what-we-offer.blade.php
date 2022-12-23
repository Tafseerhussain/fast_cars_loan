<div class="admin-about-what-we-offer">
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
                    <label for="sectionTitle">Section Heading</label>
                    <input type="text" class="form-control" wire:model.defer="sectionTitle" placeholder="Section Heading">
                    @error('sectionTitle') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <hr class="my-4">
                <div class="form-group">
                    <label for="firstHeading">Point 1 Heading</label>
                    <input type="text" class="form-control" wire:model.defer="firstHeading" placeholder="first heading">
                    @error('firstHeading') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="firstText">Point 1 Text (Use <code>&lt;br&gt;</code> to put line breaks)</label>
                    <textarea class="form-control" wire:model.defer="firstText" placeholder="first text" cols="30" rows="4"></textarea>
                    @error('firstText') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <hr class="my-4">
                <div class="form-group">
                    <label for="secondHeading">Point 2 Heading</label>
                    <input type="text" class="form-control" wire:model.defer="secondHeading" placeholder="first heading">
                    @error('secondHeading') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="secondText">Point 2 Text (Use <code>&lt;br&gt;</code> to put line breaks)</label>
                    <textarea class="form-control" wire:model.defer="secondText" placeholder="first text" cols="30" rows="4"></textarea>
                    @error('secondText') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <hr class="my-4">
                <div class="form-group">
                    <label for="thirdHeading">Point 3 Heading</label>
                    <input type="text" class="form-control" wire:model.defer="thirdHeading" placeholder="first heading">
                    @error('thirdHeading') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="thirdText">Point 3 Text (Use <code>&lt;br&gt;</code> to put line breaks)</label>
                    <textarea class="form-control" wire:model.defer="thirdText" placeholder="first text" cols="30" rows="4"></textarea>
                    @error('thirdText') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <hr class="my-4">
                <div class="form-group">
                    <label for="fourthHeading">Point 4 Heading</label>
                    <input type="text" class="form-control" wire:model.defer="fourthHeading" placeholder="first heading">
                    @error('fourthHeading') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="fourthText">Point 4 Text (Use <code>&lt;br&gt;</code> to put line breaks)</label>
                    <textarea class="form-control" wire:model.defer="fourthText" placeholder="first text" cols="30" rows="4"></textarea>
                    @error('fourthText') <span class="input_error">{{ $message }}</span> @enderror
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