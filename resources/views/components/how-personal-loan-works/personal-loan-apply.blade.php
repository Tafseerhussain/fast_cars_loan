<div class="personal-loan-apply">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="section-title">
                    {{ $message->how_head }}
                </h1>
                <p>
                    {!! $message->how_text !!}
                </p>
            </div>
            <div class="col-md-5">
                <div class="personal-loan-img">
                    <img src="{{ asset($message->how_img) }}" alt="personal loan" class="w-100">
                </div>
            </div>
        </div>
    </div>
</div>