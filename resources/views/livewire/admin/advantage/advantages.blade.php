<div class="admin-advantages">
    <form wire:submit.prevent="submit">
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
            <div class="col-12">
               <div class="row">

                   <div class="col-md-4">
                       <div class="card shadow py-2 mb-4">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="advantageOneHeading">Advantage One Heading</label>
                                  <input type="text" class="form-control" wire:model.defer="advantageOneHeading" placeholder="Advantage One Heading">
                                  @error('advantageOneHeading') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group">
                                  <label for="advantageOneText">Advantage One Text (<small>Max Charactes: 190</small>)</label>
                                  <textarea class="form-control" wire:model.defer="advantageOneText" placeholder="Advantage One Text" rows="3"></textarea>
                                  @error('advantageOneText') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($advantageOnePreview) }}" alt="" style="max-width: 50%">
                               </div>
                               <input type="file" wire:model="advantageOneImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('advantageOneImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                       </div>
                   </div>

                   <div class="col-md-4">
                       <div class="card shadow py-2 mb-4">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="advantageTwoHeading">Advantage Two Heading</label>
                                  <input type="text" class="form-control" wire:model.defer="advantageTwoHeading" placeholder="Advantage Two Heading">
                                  @error('advantageTwoHeading') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group">
                                  <label for="advantageTwoText">Advantage Two Text (<small>Max Charactes: 190</small>)</label>
                                  <textarea class="form-control" wire:model.defer="advantageTwoText" placeholder="Advantage Two Text" rows="3"></textarea>
                                  @error('advantageTwoText') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($advantageTwoPreview) }}" alt="" style="max-width: 50%">
                               </div>
                               <input type="file" wire:model="advantageTwoImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('advantageTwoImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                       </div>
                   </div>

                   <div class="col-md-4">
                       <div class="card shadow py-2 mb-4">
                            <div class="card-body">
                               <div class="form-group">
                                  <label for="advantageThreeHeading">Advantage Three Heading</label>
                                  <input type="text" class="form-control" wire:model.defer="advantageThreeHeading" placeholder="Advantage Three Heading">
                                  @error('advantageThreeHeading') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group">
                                  <label for="advantageThreeText">Advantage Three Text (<small>Max Charactes: 190</small>)</label>
                                  <textarea class="form-control" wire:model.defer="advantageThreeText" placeholder="Advantage Three Text" rows="3"></textarea>
                                  @error('advantageThreeText') <span class="input_error">{{ $message }}</span> @enderror
                               </div>
                               <div class="form-group text-center">
                                   <img src="{{ asset($advantageThreePreview) }}" alt="" style="max-width: 50%">
                               </div>
                               <input type="file" wire:model="advantageThreeImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('advantageThreeImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                       </div>
                   </div>

                   <div class="col-md-4">
                        <div class="card shadow py-2 mb-4">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="advantageFourHeading">Advantage Four Heading</label>
                                    <input type="text" class="form-control" wire:model.defer="advantageFourHeading" placeholder="Advantage Four Heading">
                                    @error('advantageFourHeading') <span class="input_error">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="advantageFourText">Advantage Four Text (<small>Max Charactes: 190</small>)</label>
                                    <textarea class="form-control" wire:model.defer="advantageFourText" placeholder="Advantage Four Text" rows="3"></textarea>
                                    @error('advantageFourText') <span class="input_error">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group text-center">
                                    <img src="{{ asset($advantageFourPreview) }}" alt="" style="max-width: 50%">
                                </div>
                                <input type="file" wire:model="advantageFourImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('advantageFourImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow py-2">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="advantageFiveHeading">Advantage Five Heading</label>
                                    <input type="text" class="form-control" wire:model.defer="advantageFiveHeading" placeholder="Advantage Five Heading">
                                    @error('advantageFiveHeading') <span class="input_error">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="advantageFiveText">Advantage Five Text (<small>Max Charactes: 190</small>)</label>
                                    <textarea class="form-control" wire:model.defer="advantageFiveText" placeholder="Advantage Five Text" rows="3"></textarea>
                                    @error('advantageFiveText') <span class="input_error">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group text-center">
                                    <img src="{{ asset($advantageFivePreview) }}" alt="" style="max-width: 50%">
                                </div>
                                <input type="file" wire:model="advantageFiveImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('advantageFiveImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow py-2">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="advantageSixHeading">Advantage Six Heading</label>
                                    <input type="text" class="form-control" wire:model.defer="advantageSixHeading" placeholder="Advantage Six Heading">
                                    @error('advantageSixHeading') <span class="input_error">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="advantageSixText">Advantage Six Text (<small>Max Charactes: 190</small>)</label>
                                    <textarea class="form-control" wire:model.defer="advantageSixText" placeholder="Advantage Six Text" rows="3"></textarea>
                                    @error('advantageSixText') <span class="input_error">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group text-center">
                                    <img src="{{ asset($advantageSixPreview) }}" alt="" style="max-width: 50%">
                                </div>
                                <input type="file" wire:model="advantageSixImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('advantageSixImage') <span class="input_error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow py-2">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="advantageSevenHeading">Advantage Seven Heading</label>
                                    <input type="text" class="form-control" wire:model.defer="advantageSevenHeading" placeholder="Advantage Seven Heading">
                                    @error('advantageSevenHeading') <span class="input_error">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="advantageSevenText">Advantage Seven Text (<small>Max Charactes: 190</small>)</label>
                                    <textarea class="form-control" wire:model.defer="advantageSevenText" placeholder="Advantage Seven Text" rows="3"></textarea>
                                    @error('advantageSevenText') <span class="input_error">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group text-center">
                                    <img src="{{ asset($advantageSevenPreview) }}" alt="" style="max-width: 50%">
                                </div>
                                <input type="file" wire:model="advantageSevenImage">
                                <small class="d-block mt-1">(Preferred: svg or png in square form)</small>
                                @error('advantageSevenImage') <span class="input_error">{{ $message }}</span> @enderror
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
