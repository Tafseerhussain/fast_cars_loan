<div class="loan-or-pawn">
    <img src="{{ asset('img/how-loan-works/loan-pawn-right.png') }}" class="loan-pawn-right" alt="dots">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="section-title">
                    {{ $message->what_head }}
                </h1>
                <p>
                    {{ $message->what_text }}
                </p>
            </div>
            <div class="col-md-5">
                <div class="loan-pawn-img">
                    <img src="{{ asset( $message->what_img ) }}" alt="loan pawn" class="w-100">
                </div>
            </div>
        </div>
    </div>
</div>