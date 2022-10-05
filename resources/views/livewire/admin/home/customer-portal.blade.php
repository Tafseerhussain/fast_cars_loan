<div class="admin-customer-portal">
    <form wire:submit.prevent="submit">
        <div class="row">
            <div class="col-12">
               <div class="form-group">
                  <label for="heading">Section Heading</label>
                  <input type="text" class="form-control" wire:model.defer="heading">
                  @error('heading') <span class="input_error">{{ $message }}</span> @enderror
               </div>
               <div class="row">
                   <div class="col-lg-3">
                       <div class="card shadow py-2">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="cardOneText">Card One Text</label>
                                  <textarea class="form-control" wire:model.defer="cardOneText" placeholder="Card Two Text" rows="3"></textarea>
                                  @error('cardOneText') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($cardOnePreview) }}" alt="" class="mw-50">
                               </div>
                               <input type="file" wire:model="cardOneImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('cardOneImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                       </div>
                   </div>
                   <div class="col-lg-3">
                       <div class="card shadow py-2">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="cardTwoText">Card Two Text</label>
                                  <textarea class="form-control" wire:model.defer="cardTwoText" placeholder="Card Two Text" rows="3"></textarea>
                                  @error('cardTwoText') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($cardTwoPreview) }}" alt="" class="mw-50">
                               </div>
                               <input type="file" wire:model="cardTwoImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('cardTwoImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                       </div>
                   </div>
                   <div class="col-lg-3">
                       <div class="card shadow py-2">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="cardThreeText">Card Three Text</label>
                                  <textarea class="form-control" wire:model.defer="cardThreeText" placeholder="Card Three Text" rows="3"></textarea>
                                  @error('cardThreeText') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($cardThreePreview) }}" alt="" class="mw-50">
                               </div>
                               <input type="file" wire:model="cardThreeImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('cardThreeImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                       </div>
                   </div>
                   <div class="col-lg-3">
                       <div class="card shadow py-2">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="cardFourText">Card Four Text</label>
                                  <textarea class="form-control" wire:model.defer="cardFourText" placeholder="Card Four Text" rows="3"></textarea>
                                  @error('cardFourText') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($cardFourPreview) }}" alt="" class="mw-50">
                               </div>
                               <input type="file" wire:model="cardFourImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('cardFourImage') <span class="input_error">{{ $message }}</span> @enderror
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
