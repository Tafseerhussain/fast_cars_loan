<div class="admin-about-who-we-are">
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
        <div class="col-12">
            <form wire:submit.prevent="submit">
                <div class="form-group">
                    <label for="sectionTitle">Section Heading</label>
                    <input type="text" class="form-control" wire:model.defer="sectionTitle" placeholder="Hero Heading">
                    @error('sectionTitle') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="sectionText">Section Text (Use <code>&lt;br&gt;</code> to put line breaks)</label>
                    <textarea class="form-control" wire:model.defer="sectionText" placeholder="Hero Text" cols="30" rows="4"></textarea>
                    @error('sectionText') <span class="input_error">{{ $message }}</span> @enderror
                </div>
                <hr class="my-4">
                <div class="row mb-3">
                   <div class="col-xl-3 col-lg-6">
                       <div class="card shadow py-2">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="firstImage">Image 1</label>
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($firstImagePreview) }}" alt="" class="mw-50 w-100">
                               </div>
                               <input type="file" wire:model="firstImage">
                                <small class="d-block mt-1">(Preferred: svg or png)</small>
                                @error('firstImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-6">
                       <div class="card shadow py-2">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="secondImage">Image 2</label>
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($secondImagePreview) }}" alt="" class="mw-50 w-100">
                               </div>
                               <input type="file" wire:model="secondImage">
                                <small class="d-block mt-1">(Preferred: svg or png)</small>
                                @error('secondImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-6">
                       <div class="card shadow py-2">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="thirdImage">Image 3</label>
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($thirdImagePreview) }}" alt="" class="mw-50 w-100">
                               </div>
                               <input type="file" wire:model="thirdImage">
                                <small class="d-block mt-1">(Preferred: svg or png)</small>
                                @error('thirdImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-6">
                       <div class="card shadow py-2">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="fourthImage">Image 4</label>
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($fourthImagePreview) }}" alt="" class="mw-50 w-100">
                               </div>
                               <input type="file" wire:model="fourthImage">
                                <small class="d-block mt-1">(Preferred: svg or png)</small>
                                @error('fourthImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                       </div>
                   </div>
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
    
</div>