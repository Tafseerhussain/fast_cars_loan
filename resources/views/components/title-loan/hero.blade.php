<div class="title-loan-hero">
    <div class="container">
        <div class="row g-md-5">
            <div class="col-md-6">
                <h1 class="section-title text-white">
                    {{ $message->hero_head }}
                </h1>
                <p class="text-white">
                    {!! $message->hero_text !!}
                </p>
            </div>
            <div class="col-md-6">
                <div class="title-loan-img">
                    <img src="{{ asset($message->hero_img) }}" alt="title loan" class="w-100">
                </div>
            </div>
        </div>
    </div>
</div>