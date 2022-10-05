<div class="admin-watch-video">
     <div class="row">
         <div class="col-md-8">
            <form wire:submit.prevent="submit">
               <div class="form-group">
                  <label for="heading">Section Heading</label>
                  <input type="text" class="form-control" wire:model.defer="heading">
                  @error('heading') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="form-group">
                  <label for="firstParagraph">First Paragraph</label>
                  <textarea class="form-control" wire:model.defer="firstParagraph" cols="30" rows="3"></textarea>
                  @error('firstParagraph') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="form-group">
                  <label for="secondParagraph">Second Paragraph</label>
                  <textarea class="form-control" wire:model.defer="secondParagraph" cols="30" rows="3"></textarea>
                  @error('secondParagraph') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="form-group">
                  <label for="VideoLink">Video URL</label>
                  <input type="text" class="form-control" wire:model.defer="VideoLink">
                  @error('VideoLink') <span class="input_error">{{ $message }}</span> @enderror
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
               <input type="file" wire:model="videoThumbnail">
               <small class="d-block">Max: 2MB (Preferred: Square Image)</small>
               @error('videoThumbnail') <span class="input_error d-block">{{ $message }}</span> @enderror
               @if ($videoThumbnail)
                  <img src="{{ $videoThumbnail->temporaryUrl() }}" style="width: 150px; max-width: 100%;" class="rounded img-thumbnail mt-2">
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
