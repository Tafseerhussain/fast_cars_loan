<div class="card shadow mb-4 border-left-success">
    @if ($isHidden == 1)
      <a href="#!" class="ml-2 mt-3 btn hideViewBtn btn-danger" data-toggle="tooltip" data-placement="top" title="Unhide Section" wire:click="hideUnhideSection(0)">
         <i class="fa fa-eye-slash" aria-hidden="true"></i>
      </a>
    @else
      <a href="#!" class="ml-2 mt-3 btn hideViewBtn" data-toggle="tooltip" data-placement="top" title="Hide Section" wire:click="hideUnhideSection(1)">
         <i class="fa fa-eye" aria-hidden="true"></i>
      </a>
    @endif
    <a href="#collapseFunded" class="d-block card-header py-3 collapsed" data-toggle="collapse"
        role="button" aria-expanded="true" aria-controls="collapseFunded">
        <h6 class="m-0 font-weight-bold text-primary">Why Get Funded Section <code>(Fourth Section)</code></h6>
    </a>
    <div class="collapse" id="collapseFunded">
        <div class="card-body">
            <div class="admin-why-get-funded">
                <div class="row">
                    <div class="col-md-8">
                        <form wire:submit.prevent="submit">
                            <div class="form-group">
                                <label for="heading">Heading</label>
                                <input type="text" class="form-control" wire:model.defer="heading">
                                @error('heading') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="subHeading">Sub Heading</label>
                                <textarea class="form-control" wire:model.defer="subHeading" cols="30" rows="3"></textarea>
                                @error('subHeading') <span class="input_error">{{ $message }}</span> @enderror
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
                            <input type="file" wire:model="backgroundImage">
                            <small class="d-block">Max: 2MB</small>
                            @error('backgroundImage') <span class="input_error d-block">{{ $message }}</span> @enderror
                            @if ($backgroundImage)
                            <img src="{{ $backgroundImage->temporaryUrl() }}" style="width: 150px; max-width: 100%;" class="rounded img-thumbnail mt-2">
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
                    <div class="col-12 text-end">
                        
                    </div>
                </div>
                <hr>
                <form wire:submit.prevent="submitCards" class="cards_form">
                    <div class="row">
                        <div class="col-12">
                            <h3>Cards:</h3>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="card shadow py-2">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="cardOneHeading">Card One Heading</label>
                                        <input type="text" class="form-control" wire:model.defer="cardOneHeading">
                                        @error('cardOneHeading') <span class="input_error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="cardOneText">Card One Text</label>
                                        <textarea class="form-control" wire:model.defer="cardOneText" rows="4"></textarea>
                                        @error('cardOneText') <span class="input_error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group text-center">
                                        <img src="{{ asset($cardOnePreview) }}" alt="" class="mw-50">
                                    </div>
                                    <input type="file" wire:model="cardOneImage">
                                    <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                    @error('cardOneImage') <span class="input_error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="card shadow py-2">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="cardTwoHeading">Card Two Heading</label>
                                        <input type="text" class="form-control" wire:model.defer="cardTwoHeading">
                                        @error('cardTwoHeading') <span class="input_error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="cardTwoText">Card Two Text</label>
                                        <textarea class="form-control" wire:model.defer="cardTwoText" rows="4"></textarea>
                                        @error('cardTwoText') <span class="input_error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group text-center">
                                        <img src="{{ asset($cardTwoPreview) }}" alt="" class="mw-50">
                                    </div>
                                    <input type="file" wire:model="cardTwoImage">
                                    <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                    @error('cardTwoImage') <span class="input_error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="card shadow py-2">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="cardThreeHeading">Card Three Heading</label>
                                        <input type="text" class="form-control" wire:model.defer="cardThreeHeading">
                                        @error('cardThreeHeading') <span class="input_error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="cardThreeText">Card Three Text</label>
                                        <textarea class="form-control" wire:model.defer="cardThreeText" rows="4"></textarea>
                                        @error('cardThreeText') <span class="input_error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group text-center">
                                        <img src="{{ asset($cardThreePreview) }}" alt="" class="mw-50">
                                    </div>
                                    <input type="file" wire:model="cardThreeImage">
                                    <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                    @error('cardThreeImage') <span class="input_error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="card shadow py-2">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="cardFourHeading">Card Four Heading</label>
                                        <input type="text" class="form-control" wire:model.defer="cardFourHeading">
                                        @error('cardFourHeading') <span class="input_error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="cardFourText">Card Four Text</label>
                                        <textarea class="form-control" wire:model.defer="cardFourText" rows="4"></textarea>
                                        @error('cardFourText') <span class="input_error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group text-center">
                                        <img src="{{ asset($cardFourPreview) }}" alt="" class="mw-50">
                                    </div>
                                    <input type="file" wire:model="cardFourImage">
                                    <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                    @error('cardFourImage') <span class="input_error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn d-block mt-3">
                            Update
                            </button>
                            <div class="spinner-border" role="status" wire:loading>
                                <span class="sr-only">Loading...</span>
                            </div>
                            @if (session()->has('successMessageCards'))
                            <span class="alert alert-success font-weight-bold d-block mt-3">
                                {{ session('successMessageCards') }}
                            </span>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>