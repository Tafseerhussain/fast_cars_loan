<div class="admin-add-faq">
    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label for="title">FAQ Title</label>
            <input type="text" class="form-control" wire:model.defer="title" placeholder="...">
            @error('title') <span class="input_error">{{ $message }}</span> @enderror
       </div>
       <div class="form-group">
            <label for="description">FAQ Description</label>
            <textarea wire:model.defer="description" placeholder="..." cols="30" rows="3" class="form-control"></textarea>
            @error('description') <span class="input_error">{{ $message }}</span> @enderror
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
