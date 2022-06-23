<div class="apply-form">
   <div class="container">
      
      <div class="row form-row">
         <div class="col-md-10 mx-auto">
            <div class="apply-for-loan-form position-relative overflow-hidden"
            @if ($eligible)
               style="background-image: url('/img/apply-form/clip-art.png');"
            @endif
            >

               <div class="loading-state" wire:loading>
                  <div class="spinner-box">
                     <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                     </div>
                  </div>
               </div>

               @if ($formApply)
                  <form wire:submit.prevent="submit">
                     <div class="heading">
                        How much money can I get?
                     </div>
                     <h5>About You</h5>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <input type="text" class="form-control" wire:model.defer="firstName" placeholder="First Name">
                              @error('firstName') <span class="input_error">{{ $message }}</span> @enderror
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <input type="text" class="form-control" wire:model.defer="lastName" placeholder="Last Name">
                              @error('lastName') <span class="input_error">{{ $message }}</span> @enderror
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input type="text" class="form-control" wire:model.defer="email" placeholder="Email Address">
                              @error('email') <span class="input_error">{{ $message }}</span> @enderror
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <input type="text" class="form-control" wire:model.defer="cellPhone" placeholder="Cell Phone (Optional)">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <input type="text" class="form-control" wire:model.defer="zipCode" placeholder="Zip Code">
                              @error('zipCode') <span class="input_error">{{ $message }}</span> @enderror
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <select class="form-select" wire:model.defer="state">
                                 <option disabled value="0">Select State</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                              @error('state') <span class="input_error">{{ $message }}</span> @enderror
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <select class="form-select" wire:model.defer="city">
                                 <option disabled value="0">Select City</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                              @error('city') <span class="input_error">{{ $message }}</span> @enderror
                           </div>
                        </div>
                     </div>
                     <h5>About Your Vehicle</h5>
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <select class="form-select" wire:model.defer="vehicleType">
                                 <option disabled value="0">Vehicle Type</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                              @error('vehicleType') <span class="input_error">{{ $message }}</span> @enderror
                           </div>
                        </div>
                        <div class="col-lg col-md-6">
                           <div class="form-group">
                              <select class="form-select" wire:model.defer="year">
                                 <option disabled value="0">Year</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                              @error('year') <span class="input_error">{{ $message }}</span> @enderror
                           </div>
                        </div>
                        <div class="col-lg col-md-6">
                           <div class="form-group">
                              <select class="form-select" wire:model.defer="make">
                                 <option disabled value="0">Make</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                              @error('make') <span class="input_error">{{ $message }}</span> @enderror
                           </div>
                        </div>
                        <div class="col-lg col-md-4">
                           <div class="form-group">
                              <select class="form-select" wire:model.defer="model">
                                 <option disabled value="0">Model</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                              @error('model') <span class="input_error">{{ $message }}</span> @enderror
                           </div>
                        </div>
                        <div class="col-lg col-md-4">
                           <div class="form-group">
                              <select class="form-select" wire:model.defer="trim">
                                 <option disabled value="0">Trim</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                              @error('trim') <span class="input_error">{{ $message }}</span> @enderror
                           </div>
                        </div>
                        <div class="col-lg col-md-4">
                           <div class="form-group">
                              <select class="form-select" wire:model.defer="mileage">
                                 <option disabled value="0">Mileage</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                              @error('mileage') <span class="input_error">{{ $message }}</span> @enderror
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12 text-end">
                           <button type="submit" class="btn mt-5">
                           <span>Find Out Now</span>
                           <img src="{{ asset('icons/arrow-right-white.svg') }}" alt="right arrow">
                           </button>
                        </div>
                     </div>
                  </form>
               @endif

               {{-- IF ELIGIBLE FOR APPLYING LOAN --}}
               @if ($eligible)
                  <div class="row eligible">
                     <div class="col-12 text-center header">
                        <img src="{{ asset('/img/apply-form/badge.png') }}" alt="badge" class="congrat-badge">
                        <h1 class="section-title">
                           Congratulations...
                        </h1>
                        <p>
                           You quality for up to
                        </p>
                        <div class="upto-value">
                           $ 24,800
                        </div>
                     </div>
                     <div class="col-12 body">
                        <div class="row">
                           <div class="col-md">
                              <p>
                                 *This is an estimate based on information you provided about your vehicle assuming standard equipment. Qualified amount may change based on actual equipment on car. All loans subject to vehicle appraisal and application approval. Certain terms and conditions apply. Must be 18 years of age or older
                              </p>
                           </div>
                           <div class="col-md-1">
                              <div class="line-border"></div>
                           </div>
                           <div class="col-md">
                              <p><span>Year : </span>{{ $year }}</p>
                              <p><span>Make : </span>{{ $make }}</p>
                              <p><span>Model : </span>{{ $model }}</p>
                              <p><span>Trim : </span>{{ $trim }}</p>
                              <p><span>Mileage : </span>{{ $mileage }}</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 footer text-end mt-5">
                        <a href="#" class="btn">Apply Now</a>
                     </div>
                  </div>
               @endif

            </div>
         </div>
      </div>
      
   </div>
</div>