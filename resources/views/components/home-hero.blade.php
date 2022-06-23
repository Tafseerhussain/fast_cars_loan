<div>
    <div class="home-hero">
        <a href="#easy-steps" class="move-down">
            <img src="{{ asset('img/home/move-down.svg') }}" alt="">
        </a>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="hero-left">
                        <h1>
                            Lorem Ipsum is simply dummy text of the text
                        </h1>
                        <div class="main-search">
                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <img src="{{ asset('icons/search.svg') }}" alt="search">
                                </span>
                                <input type="text" class="form-control" placeholder="Search Here...">
                                <button class="btn" type="button">
                                    <img src="{{ asset('icons/arrow-right-white.svg') }}" alt="">
                                </button>
                            </div>
                        </div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        </p>
                        <a href="{{ route('apply-form') }}" class="btn btn-outline">
                            Apply for Loan
                        </a>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2">
                    <div class="hero-right">
                        <x-common.hero-form/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
