<div class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form-box">
                    <div class="row">
                        <div class="col-lg">
                            <div class="left">
                                <h1 class="section-title">
                                    Contact Us
                                </h1>
                                <p>
                                    We’re committed to providing the best customer experience possible. If you have any questions, comments or concerns, we want to hear from you.
                                </p>
                                <div class="contact-meta">
                                    
                                    <div class="d-flex mb-4">
                                        <div class="meta-img">
                                            <img src="{{ asset('img/contact/visit.svg') }}" alt="location">
                                        </div>
                                        <div class="meta-text">
                                            <h5 class="mb-1">Visit Us</h5>
                                            <p class="mb-0">
                                                18 Lafayette St. Huntington Station, NY 11746
                                            </p>
                                        </div>
                                    </div>

                                    <div class="d-flex mb-4">
                                        <div class="meta-img">
                                            <img src="{{ asset('img/contact/write.svg') }}" alt="location">
                                        </div>
                                        <div class="meta-text">
                                            <h5 class="mb-1">Write Us</h5>
                                            <p class="mb-0">
                                                helloworld@gmail.com
                                            </p>
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="meta-img">
                                            <img src="{{ asset('img/contact/call.svg') }}" alt="location">
                                        </div>
                                        <div class="meta-text">
                                            <h5 class="mb-1">Call Us</h5>
                                            <p class="mb-0">
                                                1-800-483-6634
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg">
                            <div class="right">
                                <h1 class="section-title">
                                    Get in touch with us
                                </h1>
                                <div class="contact-form-area">
                                    @if (session()->has('successMessage'))
                                        <div class="alert alert-success">
                                            {{ session('successMessage') }}
                                        </div>
                                    @endif
                                    <form wire:submit.prevent="submit">
                                        <div class="form-group mb-4">
                                            <label for="full_name">Full Name</label>
                                            <input type="text" class="form-control" wire:model.defer="fullName" placeholder="John Mick">
                                            @error('fullName') <span class="input_error">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="email">Email Address</label>
                                            <input type="text" class="form-control" wire:model.defer="emailAddress" placeholder="helloworld@gmail.com">
                                            @error('emailAddress') <span class="input_error">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="phone">Phone Number</label>
                                            <input type="text" class="form-control" placeholder="0000-5478-112">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="message">Message</label>
                                            <textarea cols="30" rows="7" class="form-control" wire:model.defer="message" placeholder="Write here..."></textarea>
                                            @error('message') <span class="input_error">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="text-end">
                                            <button type="submit" class="btn">
                                                Send
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
