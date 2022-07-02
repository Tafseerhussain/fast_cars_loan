<div class="easy-steps" id="easy-steps">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="section-title text-center">
                    {{ $message->steps_heading }}
                </h1>
            </div>
        </div>
        <div class="row easy-step-row">
            <div class="col-md">
                <div class="easy-step">
                    <div class="easy-step-header d-flex">
                        <h1>
                            {{ $message->step_one_heading }}
                        </h1>
                        <div class="easy-step-img">
                            <img src="{{ asset($message->step_one_image) }}" alt="call">
                        </div>
                    </div>
                    <div class="easy-step-text">
                        {{ $message->step_one_text }}
                    </div>
                </div>
            </div>
            <div class="col-md offset-md-1">
                <div class="easy-step easy-step-center">
                    <img src="{{ asset('img/round-arrow.png') }}" alt="round arrow" class="round-arrow">
                    <img src="{{ asset('img/round-arrow-bottom.png') }}" alt="round arrow" class="round-arrow-bottom">
                    <div class="easy-step-header d-flex">
                        <h1>
                            {{ $message->step_two_heading }}
                        </h1>
                        <div class="easy-step-img">
                            <img src="{{ asset($message->step_two_image) }}" alt="info">
                        </div>
                    </div>
                    <div class="easy-step-text">
                        {{ $message->step_two_text }}
                    </div>
                </div>
            </div>
            <div class="col-md offset-md-1">
                <div class="easy-step">
                    <div class="easy-step-header d-flex">
                        <h1>
                            {{ $message->step_three_heading }}
                        </h1>
                        <div class="easy-step-img">
                            <img src="{{ asset($message->step_three_image) }}" alt="money">
                        </div>
                    </div>
                    <div class="easy-step-text">
                        {{ $message->step_three_text }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
