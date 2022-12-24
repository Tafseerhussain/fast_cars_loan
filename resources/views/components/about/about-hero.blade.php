@if($about->hero_hidden == 0)
<div class="about-hero" style="background: url({{ $about->hero_background }}) no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>
                    {{ $about->hero_head }}
                </h1>
                <p>
                    {{ $about->hero_text }}
                </p>
                <a href="{{ route('application-form') }}" class="btn">
                    {{ $about->hero_btn }}
                </a>
            </div>
        </div>
    </div>
</div>
@endif