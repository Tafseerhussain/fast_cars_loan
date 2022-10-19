@if ($easy->easy_cash_hidden == 0)
<div class="easy-cash-advantage">
    <div class="container">
        <div class="row easy-cash g-md-5">
            <div class="col-md-6">
                <img src="{{ asset($easy->easy_cash_image) }}" alt="fast cash" class="w-100">
            </div>
            <div class="col-md-6">
                <div class="easy-cash-right">
                    <h1 class="section-title">
                        {{ $easy->easy_cash_heading }}
                    </h1>
                    <p>
                        {!! $easy->easy_cash_text !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="row advantages">
            <div class="col-md-6">
                <div class="advantage-left mt-5">
                    <h1 class="section-title">
                        {{ $easy->easy_cash_heading_two }}
                    </h1>
                    <p>
                        {{ $easy->easy_cash_text_two }}
                    </p>
                </div>
            </div>
            <div class="col-md-5 offset-md-1">
                <div class="advantage-box">
                    <h1 class="section-title text-white">
                        ADVANTAGES
                    </h1>
                    @php
                        $advantages = explode(',', $easy->easy_cash_advantages);
                    @endphp
                    <div class="advantage-list">
                        @foreach ($advantages as $advantage)
                        <p>
                            <img src="{{ asset('icons/green-tick.svg') }}" alt="green tick">
                            <span>{{ $advantage }}</span>
                        </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif