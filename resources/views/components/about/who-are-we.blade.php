@if ($who->who_hidden == 0)
<div class="who-we-are">
    <img src="{{ asset('img/about/who-left.png') }}" class="who-left" alt="circle lines">
    <img src="{{ asset('img/about/who-right.png') }}" class="who-right" alt="pipe lines">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="section-title">
                    {{ $who->who_head }}
                </h1>
                <p>
                    {!! $who->who_text !!}
                </p>
                <div class="row">
                    <div class="col-md-7">
                        <div class="img-box-1">
                            <img src="{{ asset($who->who_img1) }}" alt="who we are">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="img-box-2">
                            <img src="{{ asset($who->who_img2) }}" alt="who we are">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-box-3">
                    <img src="{{ asset($who->who_img3) }}" alt="who we are">
                </div>
                <div class="img-box-4">
                    <img src="{{ asset($who->who_img4) }}" alt="who we are">
                </div>
            </div>
        </div>
    </div>
</div>
@endif