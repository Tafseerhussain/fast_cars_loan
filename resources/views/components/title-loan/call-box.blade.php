<div class="call-box">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="customer-call-box row">
                    <div class="col-md-7">
                        <p>
                            {!! $message->hero_box_text !!}
                        </p>
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <div class="give-us-call d-flex">
                            <div>
                                <img src="{{ asset($message->hero_box_img) }}" alt="call icon">
                            </div>
                            <div>
                                <h4>{{ $message->hero_box_head }}</h4>
                                <p>
                                    {!! $message->hero_box_desc !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>