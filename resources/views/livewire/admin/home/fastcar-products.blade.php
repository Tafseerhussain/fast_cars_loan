<div class="admin-fastcar-products">
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
      <div class="col-md-8">
         <form wire:submit.prevent="submit">
            <div class="form-group">
               <label for="heading">Heading</label>
               <input type="text" class="form-control" wire:model.defer="heading" placeholder="Heading">
               @error('heading') <span class="input_error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
               <label for="subheading">Subheading (Use <code>&lt;br&gt;</code> to put line breaks)</label>
               <textarea class="form-control" wire:model.defer="subheading" placeholder="Subheading" cols="30" rows="3"></textarea>
               @error('subheading') <span class="input_error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
               <label for="points">Points (Separate each point by comma <code>&apos;,&apos;</code>)</label>
               <textarea class="form-control" wire:model.defer="points" placeholder="Points" cols="30" rows="3"></textarea>
               @error('points') <span class="input_error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
               <label for="bottomText">Bottom Text</label>
               <textarea class="form-control" wire:model.defer="bottomText" placeholder="Text" cols="30" rows="3"></textarea>
               @error('bottomText') <span class="input_error">{{ $message }}</span> @enderror
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
            <h5>Section Image:</h5>

            <small>Current Image:</small>
            <img src="{{ asset($imagePreview) }}" alt="" class="w-100 rounded shadow">
            <hr>
            <input type="file" wire:model="image">
            <small class="d-block">Max: 2MB</small>
            @error('image') <span class="input_error d-block">{{ $message }}</span> @enderror
            @if ($image)
               <img src="{{ $image->temporaryUrl() }}" style="width: 150px; max-width: 100%;" class="rounded img-thumbnail mt-2">
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
