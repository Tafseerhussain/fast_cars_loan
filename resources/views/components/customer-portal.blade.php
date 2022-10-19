@if ($portal->portal_hidden == 0)
<div class="fast-cars-portal">
    <img src="{{ asset('img/home/left-triangle.png') }}" alt="triangle" class="left-triangle">
    <img src="{{ asset('img/home/dots.png') }}" alt="dots" class="dots">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="section-title">
                    {{ $portal->portal_heading }}
                </h1>
            </div>
        </div>
        <div class="row portal-benefits">
            <div class="col-lg-3 col-md-6">
                <div class="benefit-box easy-to-use">
                    <img src="{{ asset($portal->portal_card_one_image) }}" alt="easy to use">
                    <h4>{{ $portal->portal_card_one_text }}</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="benefit-box manage-accounts">
                    <img src="{{ asset($portal->portal_card_two_image) }}" alt="manage account">
                    <h4>{{ $portal->portal_card_two_text }}</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="benefit-box check-balances">
                    <img src="{{ asset($portal->portal_card_three_image) }}" alt="check balances">
                    <h4>{{ $portal->portal_card_three_text }}</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="benefit-box make-payment">
                    <img src="{{ asset($portal->portal_card_four_image) }}" alt="make payment">
                    <h4>{{ $portal->portal_card_four_text }}</h4>
                </div>
            </div>
        </div>
        {{-- <div class="row access-portal">
            <div class="col-12 text-center">
                <p>Access the <a href="#"> Customer Portal</a></p>
            </div>
        </div> --}}
    </div>
</div>
@endif