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
    #home-none{
        display:none!important;
    }
    
    .cart--itrm--row {
        max-height: 700px;
        overflow-y: auto;
        padding-right: 10px;
    }

    .cart--itrm--row::-webkit-scrollbar {
        width: 6px;
    }

    .cart--itrm--row::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .cart--itrm--row::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 10px;
    }

    .cart--itrm--row::-webkit-scrollbar-thumb:hover {
        background: #aaa;
    }

    .member-savings-banner {
        background-color: #fff5f7;
        border: 1px solid #ffebeb;
        border-radius: 4px;
        padding: 12px 16px;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
        color: #58595b;
        font-size: 14px;
    }

    .member-savings-banner svg {
        color: #ff0043;
    }

    .cart-selection-bar {
        background: #fff;
        border: 1px solid #e6e7e8;
        padding: 12px 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
        border-radius: 4px;
    }

    .cart-selection-bar .selection-text {
        font-weight: 700;
        color: #1a1a1a;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .cart-selection-bar .selection-text span {
        color: #117a7a;
    }

    .cart-selection-bar .selection-icons {
        display: flex;
        gap: 15px;
        color: #117a7a;
        font-size: 18px;
    }

    .tss-cart-item {
        background: #fff;
        border: 1px solid #e6e7e8;
        border-radius: 4px;
        margin-bottom: 15px;
        overflow: hidden;
    }

    .tss-item-main {
        display: flex;
        padding: 15px;
        gap: 15px;
        align-items: flex-start;
    }

    .tss-item-checkbox {
        display: flex;
        align-items: flex-start;
        padding-top: 5px;
    }

    .tss-item-img {
        width: 140px;
        height: 180px;
        flex-shrink: 0;
    }

    .tss-item-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 4px;
    }

    .tss-item-details {
        flex-grow: 1;
    }

    .tss-title-price {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .tss-item-title {
        font-size: 16px;
        font-weight: 700;
        margin: 0;
        color: #1a1a1a;
    }

    .tss-item-sub {
        font-size: 13px;
        color: #8c8d8f;
        margin-bottom: 15px;
    }

    .tss-price-section {
        text-align: right;
    }

    .tss-current-price {
        font-weight: 700;
        font-size: 15px;
        color: #1a1a1a;
    }

    .tss-old-price {
        text-decoration: line-through;
        color: #8c8d8f;
        font-size: 13px;
        margin-left: 5px;
    }

    .tss-mrp-tax {
        font-size: 11px;
        color: #8c8d8f;
        margin: 0;
    }

    .tss-member-savings {
        font-size: 12px;
        color: #ff0043;
        margin-top: 5px;
    }

    .tss-selectors {
        display: flex;
        gap: 15px;
        margin-bottom: 15px;
    }

    .tss-select-wrapper {
        border: 1px solid #e6e7e8;
        border-radius: 4px;
        padding: 5px 10px;
        display: flex;
        align-items: center;
        min-width: 120px;
    }

    .tss-select-wrapper select {
        border: none;
        outline: none;
        width: 100%;
        font-size: 13px;
        background: transparent;
        cursor: pointer;
    }

    .tss-item-footer {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        padding: 10px 15px;
        border-top: 1px solid #f2f2f2;
    }

    .tss-footer-btn {
        background: none;
        border: 1px solid #e6e7e8;
        padding: 8px 15px;
        border-radius: 4px;
        font-size: 12px;
        font-weight: 600;
        color: #58595b;
        cursor: pointer;
        transition: all 0.2s;
        text-transform: uppercase;
    }

    .tss-footer-btn:hover {
        background: #f9f9f9;
        border-color: #ccc;
    }

    .tss-status-msg {
        color: #ff0043;
        font-size: 13px;
        margin-bottom: 10px;
    }

    /* Robust Custom Checkbox Styles */
    .tss-checkbox-container {
        position: relative;
        width: 18px;
        height: 18px;
    }

    .tss-check-input {
        opacity: 0;
        position: absolute;
        width: 100%;
        height: 100%;
        cursor: pointer;
        z-index: 2;
        margin: 0;
    }

    .tss-check-label {
        position: absolute;
        top: 0;
        left: 0;
        width: 18px;
        height: 18px;
        border: 1px solid #ccc;
        border-radius: 2px;
        background: #fff;
        cursor: pointer;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s;
    }

    .tss-check-input:checked + .tss-check-label {
        background-color: #117a7a;
        border-color: #117a7a;
    }

    .tss-check-label i {
        color: white;
        font-size: 10px;
        display: none;
    }

    .tss-check-input:checked + .tss-check-label i {
        display: block;
    }

    /* Right Side Styles */
    .right_cart-side {
        position: sticky;
        top: 20px;
    }

    .coupon-section-wrapper {
        background: #fff;
        border: 1px solid #e6e7e8;
        border-radius: 4px;
        padding: 15px;
        margin-bottom: 15px;
    }

    .save-banner-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .save-banner-top .save-info {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        color: #1a1a1a;
    }

    .save-banner-top .save-info svg {
        color: #58595b;
    }

    .save-banner-top .apply-btn {
        color: #117a7a;
        font-weight: 700;
        font-size: 13px;
        cursor: pointer;
        text-transform: uppercase;
    }

    .view-coupons-link {
        color: #ff0043;
        font-size: 12px;
        text-decoration: none;
        display: block;
        margin-bottom: 15px;
    }

    .coupon-input-box {
        display: flex;
        border: 1px solid #e6e7e8;
        border-radius: 4px;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .coupon-input-box input {
        border: none;
        padding: 10px;
        flex-grow: 1;
        font-size: 13px;
        outline: none;
    }

    .coupon-input-box .apply-btn {
        background: none;
        border: none;
        color: #117a7a;
        font-weight: 700;
        padding: 0 15px;
        cursor: pointer;
        font-size: 13px;
    }

    .section-title {
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        color: #1a1a1a;
        margin-bottom: 15px;
        text-align: center;
    }

    .coupon-card {
        border: 1px solid #e6e7e8;
        border-radius: 4px;
        padding: 12px;
        margin-bottom: 12px;
        position: relative;
    }

    .coupon-card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 5px;
    }

    .coupon-code {
        font-weight: 700;
        font-size: 14px;
        color: #1a1a1a;
    }

    .coupon-card .apply-btn {
        color: #117a7a;
        font-weight: 700;
        font-size: 13px;
        cursor: pointer;
    }

    .coupon-save-msg {
        font-size: 12px;
        color: #58595b;
        margin-bottom: 10px;
    }

    .coupon-save-msg span {
        color: #ff0043;
    }

    .coupon-desc {
        font-size: 11px;
        color: #8c8d8f;
        margin: 0;
    }

    .coupon-card.disabled {
        background: #fcfcfc;
    }

    .coupon-card.disabled .coupon-save-msg span {
        color: #ff0043;
    }

    .gift-card-link {
        display: flex;
        justify-content: space-between;
        font-size: 13px;
        color: #1a1a1a;
        margin: 20px 0;
    }

    .gift-card-link a {
        color: #ff0043;
        text-decoration: none;
        font-weight: 600;
    }

    .price-details-section {
        background: #fff;
        border: 1px solid #e6e7e8;
        border-radius: 4px;
        padding: 15px;
    }

    .price-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        font-size: 14px;
        color: #58595b;
    }

    .price-row.grand-total {
        border-top: 1px solid #e6e7e8;
        padding-top: 10px;
        margin-top: 10px;
        font-weight: 700;
        color: #1a1a1a;
        font-size: 15px;
    }

    .pay-button {
        background: #000;
        color: #fff;
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 4px;
        font-weight: 700;
        font-size: 16px;
        margin-top: 15px;
        cursor: pointer;
        text-transform: uppercase;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<div class="whole_container mtop_40">
        <div class="product-container1 cart_container mtop_main">
            <div class="container">
                
                <div class="cart-progress-bar" style="text-align: center; margin-bottom: 30px; font-weight: 600; font-size: 14px; color: #737373;">
                    <span style="color: #117a7a;">MY BAG</span> <span style="letter-spacing: 2px;">---------</span> ADDRESS <span style="letter-spacing: 2px;">---------</span> PAYMENT
                </div>
                
                <div class="row">
                    <div class="col-md-9">
                        <div class="left_cart-side">

                            <div class="member-savings-banner">
                                <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z" fill="currentColor"/></svg>
                                <span><strong>Member Savings</strong> on this order are ₹ 300</span>
                            </div>

                            <div class="cart-selection-bar">
                                <div class="selection-text">
                                    <div class="tss-checkbox-container">
                                        <input type="checkbox" checked="" id="select-all-cart" class="tss-check-input">
                                        <label for="select-all-cart" class="tss-check-label">
                                            <i class="fa fa-check"></i>
                                        </label>
                                    </div>
                                    @php
                                        $totalItems = count($cartItems);
                                        $grandTotal = 0;
                                        foreach($cartItems as $item) {
                                            $grandTotal += $item['price'] * $item['quantity'];
                                        }
                                    @endphp
                                    <span id="selected-items-count">{{ $totalItems }}</span>/<span id="total-items-count">{{ $totalItems }}</span> ITEMS SELECTED <span id="selected-items-total-top">(₹ {{ $grandTotal }})</span>
                                </div>
                                <div class="selection-icons">
                                    <i class="fa-regular fa-heart"></i>
                                    <i class="fa-regular fa-trash-can"></i>
                                </div>
                            </div>

                            <div class="cart--itrm--row">
                                @foreach($cartItems as $key => $item)
                                <div class="tss-cart-item" id="cart-item-row-{{ $key }}">
                                    <div class="tss-item-main">
                                        <div class="tss-item-checkbox">
                                            <div class="tss-checkbox-container">
                                                <input type="checkbox" checked="" id="cart-item-{{ $key }}" class="tss-check-input item-checkbox" data-price="{{ $item['price'] * $item['quantity'] }}" onchange="updateCartTotals()">
                                                <label for="cart-item-{{ $key }}" class="tss-check-label">
                                                    <i class="fa fa-check"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="tss-item-img">
                                            <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" onerror="this.src='https://assets.myntassets.com/f_webp,dpr_1.0,q_60,w_210,c_limit,fl_progressive/assets/images/productimage/2021/5/19/0ef44f9b-61ef-4212-a56c-a1a08eebaec41621425364224-1.jpg'">
                                        </div>
                                        <div class="tss-item-details">
                                            <div class="tss-title-price">
                                                <div>
                                                    <h5 class="tss-item-title">{{ $item['name'] }}</h5>
                                                    <p class="tss-item-sub">{{ $item['category'] }}</p>
                                                </div>
                                                <div class="tss-price-section">
                                                    <p class="tss-current-price">₹ {{ $item['price'] }} <span class="tss-old-price">₹ {{ $item['old_price'] }}</span></p>
                                                    <p class="tss-mrp-tax">MRP incl. of all taxes</p>
                                                </div>
                                            </div>
                                            
                                            <div class="tss-selectors">
                                                <div class="tss-select-wrapper">
                                                    <select class="form-select" disabled>
                                                        <option>Size: {{ $item['size'] }}</option>
                                                    </select>
                                                </div>
                                                <div class="tss-select-wrapper">
                                                    <select class="form-select" disabled>
                                                        <option>Qty: {{ $item['quantity'] }}</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="tss-item-footer">
                                                <button class="tss-footer-btn" onclick="removeFromCart('{{ $key }}')">Remove</button>
                                                <button class="tss-footer-btn">Move to Wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right_cart-side">

                            <div class="price-details-section">
                                <div class="section-title" style="text-align: left; margin-bottom: 20px;">Price Details</div>
                                <div class="price-row">
                                    <span>Bag Total</span>
                                    <span id="bag-total-price">₹{{ $grandTotal }}</span>
                                </div>
                                <div class="price-row">
                                    <span>Shipping Charges</span>
                                    <span><span style="color: #117a7a; font-weight: bold;">Free</span> <span style="text-decoration: line-through;">₹50.00</span></span>
                                </div>
                                <div class="price-row grand-total">
                                    <span>Total Amount (Incl. of GST)</span>
                                    <span id="grand-total-price">₹{{ $grandTotal }}</span>
                                </div>
                                <button class="pay-button" style="background: #117a7a; border-radius: 4px;" onclick="location.href='{{  route(\App\Constants\RouteNames::CHECKOUT)  }}'">
                                    PLACE ORDER
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- YOU MAY ALSO LIKE SECTION -->
                <div class="row mt-4 mb-5">
                    <div class="col-md-9">
                        <div class="cart-related-items" style="background: #fff; border: 1px solid #e6e7e8; border-radius: 4px; padding: 15px;">
                            <h5 style="font-size: 14px; font-weight: 700; color: #1a1a1a; margin-bottom: 15px; text-transform: uppercase;">You May Also Like</h5>
                            <div class="row">
                                @if(isset($relatedProducts))
                                    @foreach($relatedProducts as $relProduct)
                                    <div class="col-md-4 mb-3">
                                        <div style="border: 1px solid #e6e7e8; border-radius: 4px; overflow: hidden; text-align: center;">
                                            <a href="{{ route(\App\Constants\RouteNames::SINGLE_PRODUCT_INDEX, ['slug' => $relProduct->slug]) }}">
                                                <img src="{{ asset('storage/' . ($relProduct->images && count($relProduct->images) > 0 ? $relProduct->images[0] : '')) }}" alt="{{ $relProduct->name }}" style="width: 100%; height: 200px; object-fit: cover;">
                                                <div style="padding: 10px; font-size: 12px; text-align: left;">
                                                    <h6 style="font-size: 12px; font-weight: 700; margin: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $relProduct->name }}</h6>
                                                    <p style="margin: 0; color: #8c8d8f;">{{ $relProduct->category ? $relProduct->category->name : '' }}</p>
                                                    <p style="margin: 5px 0 0 0; color: #e02b2b; font-weight: 700;">₹ {{ $relProduct->price }}</p>
                                                </div>
                                            </a>
                                            <button style="width: 100%; padding: 10px; border: none; border-top: 1px solid #e02b2b; background: transparent; color: #e02b2b; font-weight: 700; font-size: 12px;" onclick="location.href='{{ route(\App\Constants\RouteNames::SINGLE_PRODUCT_INDEX, ['slug' => $relProduct->slug]) }}'">ADD NOW</button>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END YOU MAY ALSO LIKE -->
                
            </div>
        </div>
</div>

<script>
    function updateCartTotals() {
        let totalItems = 0;
        let selectedItems = 0;
        let grandTotal = 0;
        
        document.querySelectorAll('.item-checkbox').forEach(function(checkbox) {
            totalItems++;
            if(checkbox.checked) {
                selectedItems++;
                grandTotal += parseFloat(checkbox.getAttribute('data-price'));
            }
        });
        
        // Update top bar
        document.getElementById('selected-items-count').innerText = selectedItems;
        document.getElementById('total-items-count').innerText = totalItems;
        document.getElementById('selected-items-total-top').innerText = '(₹ ' + grandTotal + ')';
        
        // Update right sidebar
        document.getElementById('bag-total-price').innerText = '₹' + grandTotal;
        document.getElementById('grand-total-price').innerText = '₹' + grandTotal;
        
        // Update Select All checkbox state
        document.getElementById('select-all-cart').checked = (selectedItems === totalItems && totalItems > 0);
    }
    
    document.getElementById('select-all-cart').addEventListener('change', function() {
        let isChecked = this.checked;
        document.querySelectorAll('.item-checkbox').forEach(function(checkbox) {
            checkbox.checked = isChecked;
        });
        updateCartTotals();
    });

    function removeFromCart(key) {
        if(confirm('Are you sure you want to remove this item?')) {
            fetch('{{ route("cart.remove") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ id: key })
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    let row = document.getElementById('cart-item-row-' + key);
                    if(row) {
                        row.remove();
                        updateCartTotals();
                    }
                } else {
                    alert('Failed to remove item.');
                }
            })
            .catch(error => console.error('Error:', error));
        }
    }
</script>

@include('website.footer')