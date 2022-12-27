<div class="how-loan-works"
    style="background: linear-gradient(45deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.5)), url({{ asset($message->hero_background) }}) no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <x-common.how-loan-works-video :message="$message"/>
            </div>
            <div class="col-md-5 offset-md-1">
                <div class="loan-right">
                    @php
                        $message = "Have your cash in hand with a few clicks!";
                    @endphp
                    @livewire('apply-form.base-form', ['message' => $message])
                    {{-- <x-common.hero-form :message="$message"/> --}}
                </div>
            </div>
        </div>
    </div>
</div>