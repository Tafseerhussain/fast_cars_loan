<div class="fastcars-products">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="product-left">
                    <h1 class="section-title">{{ $product->product_heading }}</h1>
                    <p>{!! $product->product_subheading !!}</p>
                    @php
                        $product_points = explode(',', $product->product_points);
                    @endphp
                    <div class="list">
                        @foreach ($product_points as $point)
                        <p>
                            <img src="{{ asset('icons/green-tick.svg') }}" alt="green tick">
                            <span>{{ $point }}</span>
                        </p>
                        @endforeach
                    </div>
                    <p>
                        {{ $product->product_text }}
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-right">
                    <img src="{{ asset($product->product_image) }}" alt="product" class="w-100">
                </div>
            </div>
        </div>
    </div>
</div>