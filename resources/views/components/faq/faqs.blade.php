<div class="faq-body">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="accordion" id="accordionFaq">

                    @foreach ($faqs as $faq)
                        
                        @if ($loop->first)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="true" aria-controls="collapse{{ $faq->id }}">
                                    {{ $faq->title }}
                                </button>
                                </h2>
                                <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        {{ $faq->description }}
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false" aria-controls="collapse{{ $faq->id }}">
                                    {{ $faq->title }}
                                </button>
                                </h2>
                                <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        {{ $faq->description }}
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