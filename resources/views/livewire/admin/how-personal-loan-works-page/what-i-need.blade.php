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
                    <input type="text" class="form-control" wire:model.defer="sectionHeading" placeholder="Section Heading">
                    @error('sectionHeading') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <hr>
                <div class="form-group">
                    <label for="firstSubheading">First Subheading</label>
                    <input type="text" class="form-control" wire:model.defer="firstSubheading" placeholder="Subheading">
                    @error('firstSubheading') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="firstHeadingFirstPoint">Point 1</label>
                            <textarea class="form-control" wire:model.defer="firstHeadingFirstPoint" placeholder="point" cols="30" rows="4"></textarea>
                            @error('firstHeadingFirstPoint') <span class="input_error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="firstHeadingSecondPoint">Point 2</label>
                            <textarea class="form-control" wire:model.defer="firstHeadingSecondPoint" placeholder="point" cols="30" rows="4"></textarea>
                            @error('firstHeadingSecondPoint') <span class="input_error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="firstHeadingThirdPoint">Point 3</label>
                            <textarea class="form-control" wire:model.defer="firstHeadingThirdPoint" placeholder="point" cols="30" rows="4"></textarea>
                            @error('firstHeadingThirdPoint') <span class="input_error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="firstHeadingFourthPoint">Point 4</label>
                            <textarea class="form-control" wire:model.defer="firstHeadingFourthPoint" placeholder="point" cols="30" rows="4"></textarea>
                            @error('firstHeadingFourthPoint') <span class="input_error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="form-group">
                    <label for="secondSubheading">Second Subheading</label>
                    <input type="text" class="form-control" wire:model.defer="secondSubheading" placeholder="Subheading">
                    @error('secondSubheading') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="secondHeadingFirstPoint">Point 1</label>
                            <textarea class="form-control" wire:model.defer="secondHeadingFirstPoint" placeholder="point" cols="30" rows="4"></textarea>
                            @error('secondHeadingFirstPoint') <span class="input_error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="secondHeadingSecondPoint">Point 2</label>
                            <textarea class="form-control" wire:model.defer="secondHeadingSecondPoint" placeholder="point" cols="30" rows="4"></textarea>
                            @error('secondHeadingSecondPoint') <span class="input_error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="secondHeadingThirdPoint">Point 3</label>
                            <textarea class="form-control" wire:model.defer="secondHeadingThirdPoint" placeholder="point" cols="30" rows="4"></textarea>
                            @error('secondHeadingThirdPoint') <span class="input_error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="secondHeadingFourthPoint">Point 4</label>
                            <textarea class="form-control" wire:model.defer="secondHeadingFourthPoint" placeholder="point" cols="30" rows="4"></textarea>
                            @error('secondHeadingFourthPoint') <span class="input_error">{{ $message }}</span> @enderror
                        </div>
                    </div>
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