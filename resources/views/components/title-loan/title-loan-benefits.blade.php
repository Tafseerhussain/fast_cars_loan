<div class="title-loan-benefits">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section-title">
                    {{ $message->benefit_head }}
                </h1>
                <p>
                    {!! $message->benefit_text !!}
                </p>
            </div>
        </div>
        @php
            $benefit_points = explode(',', $message->benefit_points);
        @endphp
        <div class="row benefits">
            @foreach ($benefit_points as $point)
            <div class="col-md-6">
                <div class="d-flex benefit">
                    <img src="{{ asset('img/title-loan/green-tick.svg') }}" alt="tick">
                    <div>
                        <p>
                            {{ $point }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>