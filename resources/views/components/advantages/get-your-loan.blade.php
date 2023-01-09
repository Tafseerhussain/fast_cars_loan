<div class="get-your-loan">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left">
                    <img src="{{ asset('img/advantage/get-loan-shadow.png') }}" alt="" class="top-right">
                    <img src="{{ asset('img/advantage/get-loan-shadow.png') }}" alt="" class="bottom-left">
                    <img src="{{ asset($message->get_img) }}" alt="" class="position-relative w-100">
                </div>
            </div>
            <div class="col-md-6">
                <div class="right">
                    <h1 class="section-title">
                        {{ $message->get_head }}
                    </h1>
                    <p>
                        {!! $message->get_text !!}
                    </p>
                    <div class="buttons">
                        <a href="#" class="btn">{{ $message->get_btn1 }}</a>
                        <a href="#" class="btn btn-outline">{{ $message->get_btn2 }}</a>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>