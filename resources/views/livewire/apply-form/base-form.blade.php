<div class="base_form">

    @if (session()->has('success_message'))
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 2">
            <div class="toast align-items-center text-bg-primary bg-success border-0 d-block" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="d-flex">
                <div class="toast-body">
                  Thank you! Your message has been sent successfully.
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close" wire:click="hideMessage"></button>
              </div>
            </div>
        </div>
    @endif

    <form wire:submit.prevent="submit" class="hero-form">
        <h1 class="form-head">
            {{ $message }}
        </h1>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Mick" wire:model.defer="firstName">
                    @error('firstName') <span class="input_error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="John" wire:model.defer="lastName">
                    @error('lastName') <span class="input_error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="last_name">Email Address</label>
                    <input type="text" class="form-control" name="last_name" placeholder="John" wire:model.defer="email">
                    @error('email') <span class="input_error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group row">
                    <label for="first_name">Mobile Number</label>
                    <div class="col-5">
                        <input type="text" class="form-control" name="code" placeholder="code" wire:model.defer="mobileCode">
                        @error('mobileCode') <span class="input_error">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" name="number" placeholder="number" wire:model.defer="mobileNumber">
                        @error('mobileNumber') <span class="input_error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="income">Income</label>
                    <input type="text" class="form-control" name="income" placeholder="500" wire:model.defer="income">
                    @error('income') <span class="input_error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <label for="credit_score">Credit Score</label>
                    @php
                        $options = explode(',', $creditScoreValues);
                    @endphp
                    <select class="form-select form-control" name="credit_score" wire:model.defer="creditScore">
                        <option selected value="" disabled>Select an option</option>
                        @foreach ($options as $option)
                            <option value="{{ $option }}">{{ $option }}</option>
                        @endforeach
                    </select>
                    @error('creditScore') <span class="input_error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" wire:model.defer="agree">
                    <label class="form-check-label" for="flexCheckDefault">
                        By checking this box, you agree to receive marketing messages from FastCarMoney and its affiliates at the cell phone number you have provided through an automated telephone dialing system and pre-recorded voice or text messages. It states that this is optional and not mandatory to obtain the goods and services offered.
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn mt-2">Send</button>
            </div>
        </div>
    </form>
</div>
