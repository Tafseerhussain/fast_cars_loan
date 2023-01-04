<div class="admin-loans-how-to">
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
                  <label for="sectionHeading">Section Heading</label>
                  <input type="text" class="form-control" wire:model.defer="sectionHeading" placeholder="Section Heading">
                  @error('sectionHeading') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="form-group">
                  <label for="sectionText">Section Text (Use <code>&lt;br&gt;</code> to put line breaks)</label>
                  <textarea class="form-control" wire:model.defer="sectionText" placeholder="Section Text" cols="30" rows="3"></textarea>
                    @error('sectionText') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="form-group">
                  <label for="sectionBtn">Section Button Text</label>
                  <input type="text" class="form-control" wire:model.defer="sectionBtn" placeholder="Button Text">
                  @error('sectionBtn') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="row">
                   <div class="col-md-4">
                       <div class="card shadow py-2">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="pointOneText">Point One Heading</label>
                                  <input type="text" class="form-control" wire:model.defer="pointOneText" placeholder="Point One Heading">
                                  @error('pointOneText') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($oneImagePreview) }}" alt="" style="max-width: 50%;">
                               </div>
                               <input type="file" wire:model="pointOneImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('pointOneImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                       </div>
                   </div>
                   <div class="col-md-4">
                        <div class="card shadow py-2">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="pointTwoText">Point Two Text</label>
                                  <input type="text" class="form-control" wire:model.defer="pointTwoText" placeholder="Point Two Text">
                                  @error('pointTwoText') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($twoImagePreview) }}" alt="" style="max-width: 50%;">
                               </div>
                               <input type="file" wire:model="pointTwoImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('pointTwoImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                       </div>
                   </div>
                   <div class="col-md-4">
                        <div class="card shadow py-2">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="pointThreeText">Point Three Text</label>
                                  <input type="text" class="form-control" wire:model.defer="pointThreeText" placeholder="Point Three Text">
                                  @error('pointThreeText') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($threeImagePreview) }}" alt="" style="max-width: 50%;">
                               </div>
                               <input type="file" wire:model="pointThreeImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('pointThreeImage') <span class="input_error">{{ $message }}</span> @enderror
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
