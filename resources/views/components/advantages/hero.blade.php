<div class="advantages-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left">
                    <h1 class="section-title">
                        {{ $message->hero_head }}
                    </h1>
                    <p>
                        {!! $message->hero_text !!}
                    </p>
                    <a href="{{ route('application-form') }}" class="btn">{{ $message->hero_btn }}</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right">
                    <div class="overlay"></div>
                    <img src="{{ asset('img/advantage/dots.png') }}" alt="dots" class="dots-left">
                    <img src="{{ asset('img/advantage/dots-right.png') }}" alt="dots" class="dots-right">
                    <div class="overlay"></div>
                    <img src="{{ asset($message->hero_img) }}" alt="advantage" class="w-100 position-relative">
                </div>
            </div>
        </div>
    </div>
</div>