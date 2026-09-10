@include('website.header')
@include('website.nav')

<style>
.navigation {
    display: none;
}
.highlated-sale.top-highlated.d-lg-block.d-none{
   display:none!important; 
}
.main--wrapper {
        margin-top: 120px !important;
    }
    #home-none {
        display: none !important;
    }

    body {
        background-color: #f8f8f8;
    }

    .checkout-header {
        background: #fff;
        padding: 15px 0;
        border-bottom: 1px solid #e6e7e8;
        margin-bottom: 30px;
    }

    .checkout-steps {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        font-size: 14px;
        font-weight: 600;
        color: #8c8d8f;
    }

    .step {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .step.active {
        color: #117a7a;
    }

    .step-num {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        border: 1px solid #ccc;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
    }

    .step.active .step-num {
        background: #117a7a;
        color: #fff;
        border-color: #117a7a;
    }

    .checkout-heading h3 {
        font-size: 18px;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .left_side_block {
        background: #fff;
        border: 1px solid #e6e7e8;
        border-radius: 8px;
        padding: 25px;
        margin-bottom: 20px;
    }

    /* Address Card Styles */
    .address-card {
        border: 1px solid #e6e7e8;
        border-radius: 8px;
        padding: 20px;
        position: relative;
        transition: all 0.3s;
        cursor: pointer;
    }

    .address-card.active {
        border-color: #117a7a;
        background: #f0f7f7;
    }

    .address-card .name {
        font-weight: 700;
        font-size: 16px;
        margin-bottom: 10px;
        display: block;
    }

    .address-card .address-text {
        font-size: 14px;
        color: #58595b;
        line-height: 1.5;
        margin-bottom: 15px;
    }

    .address-card .phone {
        font-size: 14px;
        color: #1a1a1a;
    }

    .address-card .badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: #eee;
        color: #58595b;
        padding: 4px 10px;
        border-radius: 4px;
        font-size: 10px;
        text-transform: uppercase;
    }

    .address-card.active .badge {
        background: #117a7a;
        color: #fff;
    }

    .add-address-btn {
        border: 2px dashed #ccc;
        border-radius: 8px;
        padding: 30px;
        text-align: center;
        color: #8c8d8f;
        cursor: pointer;
        transition: all 0.3s;
    }

    .add-address-btn:hover {
        border-color: #117a7a;
        color: #117a7a;
    }

    /* Payment Styles */
    .payment-option {
        border: 1px solid #e6e7e8;
        border-radius: 8px;
        margin-bottom: 15px;
        overflow: hidden;
    }

    .payment-header {
        padding: 15px 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        cursor: pointer;
        background: #fff;
    }

    .payment-option.active .payment-header {
        background: #f9f9f9;
        border-bottom: 1px solid #e6e7e8;
    }

    .payment-header .radio-circle {
        width: 20px;
        height: 20px;
        border: 2px solid #ccc;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .payment-option.active .radio-circle {
        border-color: #117a7a;
    }

    .payment-option.active .radio-circle::after {
        content: '';
        width: 10px;
        height: 10px;
        background: #117a7a;
        border-radius: 50%;
    }

    .payment-header .pay-icon {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f5f5f5;
        border-radius: 6px;
    }

    .payment-header .pay-info h5 {
        font-size: 15px;
        font-weight: 700;
        margin: 0;
    }

    .payment-header .pay-info p {
        font-size: 12px;
        color: #8c8d8f;
        margin: 0;
    }

    .payment-body {
        padding: 20px;
        display: none;
        background: #fff;
    }

    .payment-option.active .payment-body {
        display: block;
    }

    /* Summary Styles (Consistent with Cart) */
    .right-cart-side {
        position: sticky;
        top: 20px;
    }

    .price-details-section {
        background: #fff;
        border: 1px solid #e6e7e8;
        border-radius: 8px;
        padding: 20px;
    }

    .price-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 12px;
        font-size: 14px;
        color: #58595b;
    }

    .price-row.grand-total {
        border-top: 1px solid #e6e7e8;
        padding-top: 15px;
        margin-top: 15px;
        font-weight: 700;
        color: #1a1a1a;
        font-size: 16px;
    }

    .confirm-btn {
        background: #000;
        color: #fff;
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 4px;
        font-weight: 700;
        font-size: 16px;
        margin-top: 20px;
        cursor: pointer;
        text-transform: uppercase;
    }

    .cart-summary-item {
        display: flex;
        gap: 10px;
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #f2f2f2;
    }

    .cart-summary-item img {
        width: 60px;
        height: 80px;
        object-fit: cover;
        border-radius: 4px;
    }

    .cart-summary-item .info h6 {
        font-size: 13px;
        margin: 0;
        font-weight: 600;
    }

    .cart-summary-item .info p {
        font-size: 11px;
        color: #8c8d8f;
        margin: 0;
    }

    .cart-summary-item .price {
        margin-left: auto;
        font-weight: 700;
        font-size: 13px;
    }
</style>



<form method="POST" action="{{ route('order.place') }}">
    @csrf
<div class="whole_container container">
    <div class="row">
        <div class="col-md-8">
            <div class="left_side_block">
                <div class="checkout-heading">
                    <h3>Shipping Address</h3>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label small">Full Name</label>
                        <input type="text" class="form-control" name="shipping_name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label small">Mobile Number</label>
                        <input type="text" class="form-control" name="shipping_phone" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label small">Address</label>
                        <textarea class="form-control" name="shipping_address" rows="3" required></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label small">Pincode</label>
                        <input type="text" class="form-control" name="shipping_pincode" required>
                    </div>
                </div>
            </div>

            <div class="left_side_block">
                <div class="checkout-heading">
                    <h3>Payment Method</h3>
                </div>
                
                <!-- Payment Option 1 -->
                <div class="payment-option">
                    <div class="payment-header">
                        <input type="radio" name="payment_method" value="Card" style="margin-right:10px;">
                        <div class="pay-icon">
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <div class="pay-info">
                            <h5>Credit / Debit Card</h5>
                            <p>Visa, Mastercard, AMEX</p>
                        </div>
                    </div>
                </div>

                <!-- Payment Option 2 -->
                <div class="payment-option">
                    <div class="payment-header">
                        <input type="radio" name="payment_method" value="UPI" style="margin-right:10px;">
                        <div class="pay-icon">
                            <i class="fa-brands fa-google-pay"></i>
                        </div>
                        <div class="pay-info">
                            <h5>UPI / Wallets</h5>
                            <p>Google Pay, PhonePe, Paytm</p>
                        </div>
                    </div>
                </div>

                <!-- Payment Option 3 -->
                <div class="payment-option active">
                    <div class="payment-header">
                        <input type="radio" name="payment_method" value="COD" checked style="margin-right:10px;">
                        <div class="pay-icon">
                            <i class="fa fa-money-bill-wave"></i>
                        </div>
                        <div class="pay-info">
                            <h5>Cash on Delivery</h5>
                            <p>Pay when you receive your order</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="right-cart-side">
                <div class="checkout-heading">
                    <h3>Order Summary</h3>
                </div>
                <div class="price-details-section">
                    <div class="summary-items-list mb-4">
                        @if(isset($cartItems) && count($cartItems) > 0)
                            @foreach($cartItems as $item)
                            <div class="cart-summary-item">
                                <img src="{{ asset('storage/' . $item['image']) }}" alt="Product" onerror="this.src='https://prod-img.thesouledstore.com/public/theSoul/uploads/catalog/product/1730887726_1292079.jpg?w=480&dpr=1'">
                                <div class="info">
                                    <h6>{{ $item['name'] }}</h6>
                                    <p>Size: {{ $item['size'] }} | Qty: {{ $item['quantity'] }}</p>
                                </div>
                                <div class="price">₹{{ $item['price'] * $item['quantity'] }}</div>
                            </div>
                            @endforeach
                        @else
                            <p>Your cart is empty.</p>
                        @endif
                    </div>

                    <div class="price-row">
                        <span>Bag Total</span>
                        <span>₹{{ $grandTotal ?? 0 }}</span>
                    </div>
                    <div class="price-row">
                        <span>Shipping Fee</span>
                        <span style="color: #117a7a;">FREE</span>
                    </div>
                    
                    <div class="price-row grand-total">
                        <span>Total Amount</span>
                        <span>₹{{ $grandTotal ?? 0 }}</span>
                    </div>

                    <button type="submit" class="confirm-btn" style="background-color: #e02b2b;">Confirm Order</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

@include('website.footer')