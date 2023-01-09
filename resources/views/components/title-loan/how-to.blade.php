<div class="how-to-take-title-loan">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section-title text-center">
                    {{ $message->how_head }}
                </h1>
            </div>
        </div>
        <div class="row points">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md">
                        <div class="d-flex point-box">
                            <div>
                                <img src="{{ asset($message->how_img1) }}" alt="easy process">
                            </div>
                            <div>
                                <h4>
                                    {{ $message->how_point1 }}
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="d-flex point-box">
                            <div>
                                <img src="{{ asset($message->how_img2) }}" alt="no credit check">
                            </div>
                            <div>
                                <h4>
                                    {{ $message->how_point2 }}
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="d-flex point-box">
                            <div>
                                <img src="{{ asset($message->how_img3) }}" alt="no insurance">
                            </div>
                            <div>
                                <h4>
                                    {{ $message->how_point3 }}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <p>
                        {!! $message->how_text !!}
                    </p>
                    <a href="{{ route('application-form') }}" class="btn">
                        {{ $message->how_btn }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>