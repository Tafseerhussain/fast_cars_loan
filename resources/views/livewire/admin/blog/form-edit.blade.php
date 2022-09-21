<div class="admin-blog-edit">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Blog Details</h6>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="submit">
                <div class="form-group">
                    <label for="title">Blog Title</label>
                    <input type="text" class="form-control" wire:model.defer="title" placeholder="...">
                    @error('title') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="form-group">
                    <label for="shortDescription">Short Description</label>
                    <textarea wire:model.defer="shortDescription" placeholder="..." cols="30" rows="3" class="form-control"></textarea>
                    @error('shortDescription') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="form-group">
                    <label for="longDescription">Long Description</label>
                    <textarea wire:model.defer="longDescription" placeholder="..." cols="30" rows="5" class="form-control"></textarea>
                    @error('longDescription') <span class="input_error">{{ $message }}</span> @enderror
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
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Blog Image</h6>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="submitImage">

               <small class="d-block">Current Image:</small>
               <img src="{{ asset($previewImage) }}" alt="" class="rounded shadow blog-img w-25">
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
