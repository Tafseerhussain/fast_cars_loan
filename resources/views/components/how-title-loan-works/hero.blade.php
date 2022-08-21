<div class="how-loan-works">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <x-common.how-loan-works-video/>
            </div>
            <div class="col-md-5 offset-md-1">
                <div class="loan-right">
                    @php
                        $message = "Have your cash in hand with a few clicks!";
                    @endphp
                    <x-common.hero-form :message="$message"/>
                </div>
            </div>
        </div>
    </div>
</div>