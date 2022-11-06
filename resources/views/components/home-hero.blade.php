@if($hero->hero_hidden == 0)
<div>
    @if ($hero->hero_background == '' || $hero->hero_background == null)
        <div class="home-hero">
    @else 
        <div class="home-hero" style="background: url({{ asset($hero->hero_background) }}) no-repeat">
    @endif
        <a href="#easy-steps" class="move-down">
            <img src="{{ asset('img/home/move-down.svg') }}" alt="">
        </a>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="hero-left">
                        <h1 class="text-start">
                            {{ $hero->hero_head }}
                        </h1>
                        {{-- <div class="main-search">
                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <img src="{{ asset('icons/search.svg') }}" alt="search">
                                </span>
                                <input type="text" class="form-control" placeholder="Search Here...">
                                <button class="btn" type="button">
                                    <img src="{{ asset('icons/arrow-right-white.svg') }}" alt="">
                                </button>
                            </div>
                        </div> --}}
                        <p class="text-start">
                            {{ $hero->hero_text }}
                        </p>
                        <a href="{{ route('application-form') }}" class="btn btn-outline text-capitalize">
                            {{ $hero->hero_btn }}
                        </a>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2">
                    <div class="hero-right">
                        @livewire('apply-form.base-form', ['message' => $hero->form_head])
                        {{-- <x-common.hero-form :message="$hero->form_head"/> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
