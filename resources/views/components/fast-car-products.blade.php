<div class="fastcars-products">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="product-left">
                    <h1 class="section-title">{{ $product->product_heading }}</h1>
                    <p>{!! $product->product_subheading !!}</p>
                    <div class="list">
                        <p>
                            <img src="{{ asset('icons/green-tick.svg') }}" alt="green tick">
                            <span>Vehicle Title Loans</span>
                        </p>
                        <p>
                            <img src="{{ asset('icons/green-tick.svg') }}" alt="green tick">
                            <span>Pawns on vehicle title</span>
                        </p>
                        <p>
                            <img src="{{ asset('icons/green-tick.svg') }}" alt="green tick">
                            <span>Motorcycle title loans and pawns</span>
                        </p>
                        <p>
                            <img src="{{ asset('icons/green-tick.svg') }}" alt="green tick">
                            <span>Personal loans</span>
                        </p>
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