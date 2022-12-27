<div class="loan-requirements">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section-title">
                    Loan Requirements by State
                </h1>
            </div>
        </div>
        <div class="loan-requirements-accordion">
            @php
                $half = count($message) / 2;
            @endphp
            <div class="accordion row" id="accordionExample">
                <div class="col-md-6">
                    @foreach ($message as $state)
                        @if ($loop->index >= $half)
                            @php
                                break;
                            @endphp
                        @endif
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $state->id }}" aria-expanded="false" aria-controls="collapse{{ $state->id }}">
                                <img src="{{ asset('icons/arrow-right-dark.svg') }}" alt="arrow right">
                                {{ $state->state_name }}
                            </button>
                            </h2>
                            <div id="collapse{{ $state->id }}" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                                <div class="accordion-body">
                                    {{ $state->state_text }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-6">
                    @foreach ($message as $state)
                        @if ($loop->index >= $half)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $state->id }}" aria-expanded="false" aria-controls="collapse{{ $state->id }}">
                                    <img src="{{ asset('icons/arrow-right-dark.svg') }}" alt="arrow right">
                                    {{ $state->state_name }}
                                </button>
                                </h2>
                                <div id="collapse{{ $state->id }}" class="accordion-collapse collapse" aria-labelledby="headingFour">
                                    <div class="accordion-body">
                                        {{ $state->state_text }}
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>