<div class="admin-steps">
    <form wire:submit.prevent="submit">
        <div class="row">
            <div class="col-12 text-right">
                @if ($isHidden == 1)
                  <a href="#!" class="ml-2 mt-3 btn hideViewBtn btn-danger" data-toggle="tooltip" data-placement="top" title="Unhide Section" wire:click="hideUnhideSection(0)">
                     <i class="fa fa-eye-slash" aria-hidden="true"></i>
                  </a>
                @else
                  <a href="#!" class="ml-2 mt-3 btn hideViewBtn" data-toggle="tooltip" data-placement="top" title="Hide Section" wire:click="hideUnhideSection(1)">
                     <i class="fa fa-eye" aria-hidden="true"></i>
                  </a>
                @endif
            </div>
            <div class="col-12">
               <div class="form-group">
                  <label for="stepsHeading">Steps Heading</label>
                  <input type="text" class="form-control" wire:model.defer="stepsHeading" placeholder="Steps Heading" value="{{ $steps->steps_heading }}">
                  @error('stepsHeading') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="row">
                   <div class="col-md-4">
                       <div class="card shadow py-2">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="stepOneHeading">Step One Heading</label>
                                  <input type="text" class="form-control" wire:model.defer="stepOneHeading" placeholder="Step One Heading">
                                  @error('stepOneHeading') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group">
                                  <label for="stepOneText">Step One Text (<small>Max Charactes: 190</small>)</label>
                                  <textarea class="form-control" wire:model.defer="stepOneText" placeholder="Step One Text" rows="3"></textarea>
                                  @error('stepOneText') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($stepOneImagePreview) }}" alt="" class="mw-50">
                               </div>
                               <input type="file" wire:model="stepOneImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('stepOneImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                       </div>
                   </div>
                   <div class="col-md-4">
                        <div class="card shadow py-2">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="stepTwoHeading">Step Two Heading</label>
                                  <input type="text" class="form-control" wire:model.defer="stepTwoHeading" placeholder="Step Two Heading">
                                  @error('stepTwoHeading') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group">
                                  <label for="stepTwoText">Step Two Text (<small>Max Charactes: 190</small>)</label>
                                  <textarea class="form-control" wire:model.defer="stepTwoText" placeholder="Step Two Text" rows="3"></textarea>
                                  @error('stepTwoText') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($stepTwoImagePreview) }}" alt="" class="mw-50">
                               </div>
                               <input type="file" wire:model="stepTwoImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('stepTwoImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                       </div>
                   </div>
                   <div class="col-md-4">
                        <div class="card shadow py-2">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="stepThreeHeading">Step Three Heading</label>
                                  <input type="text" class="form-control" wire:model.defer="stepThreeHeading" placeholder="Step Three Heading">
                                  @error('stepThreeHeading') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group">
                                  <label for="stepThreeText">Step Three Text (<small>Max Charactes: 190</small>)</label>
                                  <textarea class="form-control" wire:model.defer="stepThreeText" placeholder="Step Three Text" rows="3"></textarea>
                                  @error('stepThreeText') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($stepThreeImagePreview) }}" alt="" class="mw-50">
                               </div>
                               <input type="file" wire:model="stepThreeImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('stepThreeImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                       </div>
                   </div>
               </div>
            </div>
            <div class="col-12 text-end">
               <button type="submit" class="btn mt-3">
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
            </div>
        </div>
    </form>
</div>
