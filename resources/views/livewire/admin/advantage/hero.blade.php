<div class="admin-advantage-hero">
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
               <label for="heroHeading">Section Heading</label>
               <input type="text" class="form-control" wire:model.defer="heroHeading" placeholder="Hero Heading">
               @error('heroHeading') <span class="input_error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
               <label for="heroText">Section Text</label>
               <textarea class="form-control" wire:model.defer="heroText" placeholder="Hero Text" cols="30" rows="4"></textarea>
               @error('heroText') <span class="input_error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
               <label for="heroButton">Section Button</label>
               <input type="text" class="form-control" wire:model.defer="heroButton" placeholder="Hero Button">
               @error('heroButton') <span class="input_error">{{ $message }}</span> @enderror
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
            <img src="{{ asset($imagePreview) }}" alt="" class="w-100 rounded shadow">
            <hr>
            <input type="file" wire:model="heroImage">
            <small class="d-block">Max: 2MB</small>
            @error('heroImage') <span class="input_error d-block">{{ $message }}</span> @enderror
            @if ($heroImage)
            <img src="{{ $heroImage->temporaryUrl() }}" style="width: 150px; max-width: 100%;" class="rounded img-thumbnail mt-2">
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