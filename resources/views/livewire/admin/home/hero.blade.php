<div class="admin-home-hero">
     <div class="row">
         <div class="col-md-8">
            <form wire:submit.prevent="submit">
               <div class="form-group">
                  <label for="heroHeading">Hero Heading</label>
                  <input type="text" class="form-control" wire:model.defer="heroHeading" placeholder="Hero Heading" value="{{ $hero->hero_head }}">
                  @error('heroHeading') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="form-group">
                  <label for="heroText"   >Hero Text</label>
                  <textarea class="form-control" wire:model.defer="heroText" placeholder="Hero Text" value="{{ $hero->hero_text }}" cols="30" rows="3"></textarea>
                  @error('heroText') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="form-group">
                  <label for="heroButton">Hero Button</label>
                  <input type="text" class="form-control" wire:model.defer="heroButton" placeholder="Hero Button" value="{{ $hero->hero_btn }}">
                  @error('heroButton') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="form-group">
                  <label for="formHeading">Form Heading</label>
                  <input type="text" class="form-control" wire:model.defer="formHeading" placeholder="Form Heading" value="{{ $hero->form_head }}">
                  @error('formHeading') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <button type="submit" class="btn d-block">
                  Save
               </button>
               <div class="spinner-border" role="status" wire:loading>
                 <span class="sr-only">Loading...</span>
               </div>
               @if (session()->has('successMessage'))
                   <span class="text-success font-weight-bold">
                       {{ session('successMessage') }}
                   </span>
               @endif
            </form>
         </div>
         <div class="col-md-4">
            <form wire:submit.prevent="submitImage">
               <h5>Background Image:</h5>

               <small>Current Image:</small>
               <img src="{{ asset($heroPreview) }}" alt="" class="w-100 rounded shadow">
               <hr>
               <input type="file" wire:model="heroBackground">
               <small class="d-block">Max: 2MB</small>
               @error('heroBackground') <span class="input_error d-block">{{ $message }}</span> @enderror
               @if ($heroBackground)
                  <img src="{{ $heroBackground->temporaryUrl() }}" style="width: 150px; max-width: 100%;" class="rounded img-thumbnail mt-2">
               @endif
               

               <button type="submit" class="btn d-block mt-3">
                  Update
               </button>
               <div class="spinner-border" role="status" wire:loading>
                 <span class="sr-only">Loading...</span>
               </div>
               @if (session()->has('successMessageImage'))
                   <span class="text-success font-weight-bold">
                       {{ session('successMessageImage') }}
                   </span>
               @endif
            </form>
         </div>
         <div class="col-12 text-end">
            
         </div>
     </div>
</div>
