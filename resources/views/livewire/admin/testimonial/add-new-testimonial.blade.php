<div class="admin-add-testimonial">
    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" wire:model.defer="name" placeholder="...">
            @error('name') <span class="input_error">{{ $message }}</span> @enderror
       </div>
       <div class="form-group">
            <label for="designation">Designation/Company</label>
            <input type="text" class="form-control" wire:model.defer="designation" placeholder="...">
            @error('designation') <span class="input_error">{{ $message }}</span> @enderror
       </div>
       <div class="form-group">
            <label for="testimonialDescription">Testimonial Description</label>
            <textarea wire:model.defer="testimonialDescription" placeholder="..." cols="30" rows="5" class="form-control"></textarea>
            @error('testimonialDescription') <span class="input_error">{{ $message }}</span> @enderror
       </div>
       <div class="form-group">
            <label for="image">Image <b>(Its Best to upload square images)</b></label><br>
            <input type="file" wire:model="image">
            <small class="d-block">Max: 2MB</small>
            @error('image') <span class="input_error d-block">{{ $message }}</span> @enderror
            @if ($image)
                <img src="{{ $image->temporaryUrl() }}" style="width: 150px; max-width: 100%;" class="rounded img-thumbnail mt-2">
            @endif
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
