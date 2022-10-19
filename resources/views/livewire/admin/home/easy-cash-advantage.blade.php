<div class="admin-easy-cash">
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
   </div>
     <div class="row">
         <div class="col-md-8">
            <form wire:submit.prevent="submit">
               <div class="form-group">
                  <label for="firstSectionHeading">First Section Heading</label>
                  <input type="text" class="form-control" wire:model.defer="firstSectionHeading">
                  @error('firstSectionHeading') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="form-group">
                  <label for="firstSectionText">First Section Text (Use <code>&lt;br&gt;</code> to put line breaks)</label>
                  <textarea class="form-control" wire:model.defer="firstSectionText" cols="30" rows="4"></textarea>
                  @error('firstSectionText') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="form-group">
                  <label for="secondSectionHeading">Second Section Heading</label>
                  <input type="text" class="form-control" wire:model.defer="secondSectionHeading">
                  @error('secondSectionHeading') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="form-group">
                  <label for="secondSectionText">Second Section Text (Use <code>&lt;br&gt;</code> to put line breaks)</label>
                  <textarea class="form-control" wire:model.defer="secondSectionText" cols="30" rows="4"></textarea>
                  @error('secondSectionText') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="form-group">
                  <label for="advantages">Advantages (Separate each advantage by comma <code>&apos;,&apos;</code>)</label>
                  <textarea class="form-control" wire:model.defer="advantages" cols="30" rows="4"></textarea>
                  @error('advantages') <span class="input_error">{{ $message }}</span> @enderror
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
         <div class="col-12 text-end">
            
         </div>
     </div>
</div>
