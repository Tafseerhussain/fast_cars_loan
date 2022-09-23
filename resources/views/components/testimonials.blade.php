<div class="verified-testimonials">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="section-title">
                    Verified Testimonials
                </h1>
            </div>
        </div>
        <div class="row testimonials-row">
            <div class="col-12">
                @if (!$testimonials->isEmpty())
                    @if (count($testimonials) < 3)
                        <div class="testimonials-slider text-center">
                            {{-- Testimonial --}}
                            <div class="testimonial-slide">
                                <div class="testimonial-head">
                                    <img src="{{ asset('img/home/testimonial-head.svg') }}" alt="testimonial logo">
                                </div>
                                <p class="testimonial-text">
                                    It was quick, easy, and convenient. I had a good experience. The process was simple.
                                </p>
                                <div class="testimonial-meta">
                                    <img src="{{ asset('img/home/testimonial-client.png') }}" alt="client">
                                    <div class="name">
                                        Tammy W.
                                        <span>Van Nuys, CA</span>
                                    </div>
                                </div>
                            </div>
                            {{-- Testimonial --}}
                            <div class="testimonial-slide">
                                <div class="testimonial-head">
                                    <img src="{{ asset('img/home/testimonial-head.svg') }}" alt="testimonial logo">
                                </div>
                                <p class="testimonial-text">
                                    It was quick, easy, and convenient. I had a good experience. The process was simple.
                                </p>
                                <div class="testimonial-meta">
                                    <img src="{{ asset('img/home/testimonial-client.png') }}" alt="client">
                                    <div class="name">
                                        Tammy W.
                                        <span>Van Nuys, CA</span>
                                    </div>
                                </div>
                            </div>
                            {{-- Testimonial --}}
                            <div class="testimonial-slide">
                                <div class="testimonial-head">
                                    <img src="{{ asset('img/home/testimonial-head.svg') }}" alt="testimonial logo">
                                </div>
                                <p class="testimonial-text">
                                    It was quick, easy, and convenient. I had a good experience. The process was simple.
                                </p>
                                <div class="testimonial-meta">
                                    <img src="{{ asset('img/home/testimonial-client.png') }}" alt="client">
                                    <div class="name">
                                        Tammy W.
                                        <span>Van Nuys, CA</span>
                                    </div>
                                </div>
                            </div>
                            {{-- Testimonial --}}
                            <div class="testimonial-slide">
                                <div class="testimonial-head">
                                    <img src="{{ asset('img/home/testimonial-head.svg') }}" alt="testimonial logo">
                                </div>
                                <p class="testimonial-text">
                                    It was quick, easy, and convenient. I had a good experience. The process was simple.
                                </p>
                                <div class="testimonial-meta">
                                    <img src="{{ asset('img/home/testimonial-client.png') }}" alt="client">
                                    <div class="name">
                                        Tammy W.
                                        <span>Van Nuys, CA</span>
                                    </div>
                                </div>
                            </div>
                            {{-- Testimonial --}}
                            <div class="testimonial-slide">
                                <div class="testimonial-head">
                                    <img src="{{ asset('img/home/testimonial-head.svg') }}" alt="testimonial logo">
                                </div>
                                <p class="testimonial-text">
                                    It was quick, easy, and convenient. I had a good experience. The process was simple.
                                </p>
                                <div class="testimonial-meta">
                                    <img src="{{ asset('img/home/testimonial-client.png') }}" alt="client">
                                    <div class="name">
                                        Tammy W.
                                        <span>Van Nuys, CA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="testimonials-slider text-center">
                            @foreach ($testimonials as $testimonial)
                                <div class="testimonial-slide">
                                    <div class="testimonial-head">
                                        <img src="{{ asset('img/home/testimonial-head.svg') }}" alt="testimonial logo">
                                    </div>
                                    <p class="testimonial-text">
                                        It was quick, easy, and convenient. I had a good experience. The process was simple.
                                    </p>
                                    <div class="testimonial-meta">
                                        <img src="{{ asset($testimonial->image) }}" alt="client">
                                        <div class="name">
                                            Tammy W.
                                            <span>Van Nuys, CA</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
               
                @else
                    <div class="testimonials-slider text-center">
                        @foreach ($testimonials as $testimonial)
                            <div class="testimonial-slide">
                                <div class="testimonial-head">
                                    <img src="{{ asset('img/home/testimonial-head.svg') }}" alt="testimonial logo">
                                </div>
                                <p class="testimonial-text">
                                    It was quick, easy, and convenient. I had a good experience. The process was simple.
                                </p>
                                <div class="testimonial-meta">
                                    <img src="{{ asset($testimonial->image) }}" alt="client">
                                    <div class="name">
                                        Tammy W.
                                        <span>Van Nuys, CA</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@push('component-css')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
@endpush

@push('component-js')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.testimonials-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            arrows: true,
            dots: false,
            centerMode: true,
            centerPadding: 0,
        });
    </script>
@endpush