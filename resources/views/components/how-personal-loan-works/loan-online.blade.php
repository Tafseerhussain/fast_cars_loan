<div class="loan-online">
    <div class="container">
        <div class="col-md-10 offset-md-1 text-center">
            <h1 class="section-title text-white">
                {{ $message->apply_head }}
            </h1>
            <p class="text-white">
                {!! $message->apply_text !!}
            </p>
            <a href="{{ route('apply-form') }}" class="btn">{{ $message->apply_btn }}</a>
        </div>
    </div>
</div>