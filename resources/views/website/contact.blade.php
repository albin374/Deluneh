@include('website.header')
@include('website.nav')

<!-- Manage Orders Section -->
<div class="text-center w-100" style="background-color: #f1f2f4; padding: 50px 20px 0;">
    <h2 class="font-weight-bold mb-3" style="font-size: 32px; color: #333;">Manage Your Orders Easily</h2>
    <p class="text-muted mb-4" style="font-size: 18px;">Track, Return/ Exchange or Cancel your orders hassle-free.</p>
    <a href="#" class="btn text-white font-weight-bold px-4 py-2 mb-5" style="background-color: #e51d2a; border-color: #e51d2a; font-size: 15px; border-radius: 4px;">MY ORDERS</a>
</div>

<!-- Help Section Wrapper (Red Strip & White Box) -->
<div class="position-relative w-100" style="background-color: #f1f2f4; padding-bottom: 50px;">
    <div style="background-color: #e51d2a; color: white; text-align: center; padding: 30px 20px; min-height: 120px;">
        <h3 class="font-weight-bold mb-0" style="font-size: 26px;">What can we help you with today?</h3>
    </div>
    
    <div class="mx-auto" style="max-width: 700px; background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); margin-top: -30px; position: relative; z-index: 1;">
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('contact.submit') }}" enctype="multipart/form-data">
            @csrf

        <div class="form-group mb-4">
            <select id="helpQuerySelect" name="enquiry_type" class="form-control" required style="border: 1px solid #e0e0e0; height: 50px; font-size: 14px; padding-left: 15px; background-color: white; color: #333;" onchange="toggleHelpContent()">
                <option selected disabled hidden value="">Please select your query.</option>
                <option disabled style="color: #999;">Please select query</option>
                <option value="where_is_order">Where is my Order?</option>
                <option value="delivery_person">Delivery person did not try to deliver my order</option>
                <option value="return_exchange">I want to return/exchange a Product</option>
                <option value="amount_deducted">Amount got deducted but the order wasn't placed</option>
                <option value="no_refund">I haven't received my refund</option>
                <option value="incorrect_product">Received Incorrect Product/Size</option>
                <option value="damaged_product">Received Damaged Product</option>
                <option value="incomplete_order">Received Incomplete Order</option>
                <option value="out_of_stock">Product I'm looking for is Out Of Stock</option>
            </select>
        </div>
        
        <div id="orderIdSection" class="mt-4 text-start" style="display: none;">
            <label class="d-block mb-2 text-muted" style="color: #666;">Select Order id*</label>
            <select name="order_id" class="form-control order-id-select" style="border: 1px solid #e0e0e0; height: 50px; font-size: 14px; padding-left: 15px; background-color: white; color: #333;" onchange="showOrderStatus(this)">
                <option selected disabled value="">Order ID</option>
                @if(isset($orders) && count($orders) > 0)
                    @foreach($orders as $order)
                        <option value="{{ $order->id }}" data-status="{{ $order->status }}">Order #{{ $order->id }}</option>
                    @endforeach
                @endif
            </select>
            <div id="orderStatusDisplay" class="mt-3" style="display: none; padding: 15px; border-radius: 6px; background-color: #f1f2f4; border: 1px solid #e0e0e0;">
                <h5 style="margin-bottom: 5px; font-size: 14px; color: #666; text-transform: uppercase;">Order Status</h5>
                <p id="orderStatusText" style="font-weight: bold; color: #333; margin-bottom: 0; font-size: 16px;"></p>
            </div>

            <div id="imageUploadSection" class="mt-4" style="display: none;">
                <label id="imageUploadLabel" class="d-block mb-2 text-muted" style="color: #666;">Upload Images (Jpeg,PNG Etc)</label>
                <div style="border: 1px solid #e0e0e0; padding: 10px; border-radius: 4px; background-color: white;">
                    <input type="file" name="image_path" id="imageInput" class="form-control-file" accept="image/*">
                </div>
            </div>

            <div id="detailsSection" class="mt-4" style="display: none;">
                <label id="detailsLabel" class="d-block mb-2 text-muted" style="color: #666;">Additional Details*</label>
                <textarea name="message" id="messageInput" class="form-control" rows="4" style="border: 1px solid #e0e0e0; font-size: 14px; padding: 15px; background-color: white; color: #333;" placeholder="Please type your message here..."></textarea>
            </div>
        </div>

        <div id="deliveryPersonSection" class="mt-4 text-start" style="display: none;">
            <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 15px;">We have a dedicated team in constant touch with our courier partners. Please select order ID below and we will get back to you with an update at the earliest.</p>
            <label class="d-block mb-2 text-muted" style="color: #666;">Please select your order ID below and we will get back to you*</label>
            <select name="order_id" class="form-control order-id-select" style="border: 1px solid #e0e0e0; height: 50px; font-size: 14px; padding-left: 15px; background-color: white; color: #333;">
                <option selected disabled value="">Order ID</option>
                @if(isset($orders) && count($orders) > 0)
                    @foreach($orders as $order)
                        <option value="{{ $order->id }}" data-status="{{ $order->status }}">Order #{{ $order->id }}</option>
                    @endforeach
                @endif
            </select>
        </div>

        <div id="amountDeductedSection" class="mt-4 text-start" style="display: none;">
            <p style="color: #555; font-size: 14px; line-height: 1.8; margin-bottom: 20px; font-weight: bold;">
                If your order hasn’t been placed but the amount is deducted, it will be automatically rolled back to your source account within 7 days.<br><br>
                If the amount doesn’t reflect in your account within 7 days, do check your bank statement.
            </p>
        </div>
        
        <div id="outOfStockSection" class="mt-4" style="display: none;">
            <p style="color: #666; font-size: 13px; line-height: 1.8; margin-bottom: 30px;">
                As a fashion brand, we try to keep up with the latest trends hence we keep updating our designs. However, some of our superstar designs do make a comeback. We encourage you to check out our latest designs or click on the notify me button to stay updated.
            </p>
            
            <div class="text-center">
                <a href="#" class="btn text-white font-weight-bold px-4 py-2" style="background-color: #198075; border-color: #198075; font-size: 14px; border-radius: 4px;">Continue Shopping</a>
            </div>
        </div>

        <div id="submitButtonSection" class="mt-5 text-center" style="display: none;">
            <button type="submit" class="btn text-white font-weight-bold px-5 py-2" style="background-color: #198075; border-color: #198075; font-size: 15px; border-radius: 4px;">SUBMIT</button>
        </div>

        </form>
    </div>
</div>

<script>
    function toggleHelpContent() {
        var select = document.getElementById('helpQuerySelect');
        var val = select.value;
        
        var outOfStockSection = document.getElementById('outOfStockSection');
        var orderIdSection = document.getElementById('orderIdSection');
        var deliveryPersonSection = document.getElementById('deliveryPersonSection');
        var amountDeductedSection = document.getElementById('amountDeductedSection');
        var submitButtonSection = document.getElementById('submitButtonSection');
        
        var imageUploadSection = document.getElementById('imageUploadSection');
        var detailsSection = document.getElementById('detailsSection');
        var imageUploadLabel = document.getElementById('imageUploadLabel');
        var detailsLabel = document.getElementById('detailsLabel');
        var messageInput = document.getElementById('messageInput');
        
        // Hide all first
        outOfStockSection.style.display = 'none';
        orderIdSection.style.display = 'none';
        deliveryPersonSection.style.display = 'none';
        amountDeductedSection.style.display = 'none';
        submitButtonSection.style.display = 'none';
        imageUploadSection.style.display = 'none';
        detailsSection.style.display = 'none';
        messageInput.removeAttribute('required');
        
        // Reset status display
        if (document.getElementById('orderStatusDisplay')) {
            document.getElementById('orderStatusDisplay').style.display = 'none';
        }
        var orderSelects = document.querySelectorAll('.order-id-select');
        orderSelects.forEach(function(s) { 
            s.selectedIndex = 0; 
            s.disabled = true; // disable all by default to prevent wrong submission
        });
        
        if (val === 'out_of_stock') {
            outOfStockSection.style.display = 'block';
        } else if (val === 'amount_deducted') {
            amountDeductedSection.style.display = 'block';
        } else if (val === 'delivery_person') {
            deliveryPersonSection.style.display = 'block';
            document.querySelector('#deliveryPersonSection .order-id-select').disabled = false;
            submitButtonSection.style.display = 'block';
        } else if (['where_is_order', 'return_exchange', 'no_refund', 'incorrect_product', 'damaged_product', 'incomplete_order'].includes(val)) {
            orderIdSection.style.display = 'block';
            document.querySelector('#orderIdSection .order-id-select').disabled = false;
            submitButtonSection.style.display = 'block';
            
            if (val === 'incorrect_product') {
                imageUploadLabel.innerText = "Upload Images of incorrect product (Jpeg,PNG Etc)";
                detailsLabel.innerText = "Details of Incorrect Product/Size Received*";
                imageUploadSection.style.display = 'block';
                detailsSection.style.display = 'block';
                messageInput.setAttribute('required', 'required');
            } else if (val === 'damaged_product') {
                imageUploadLabel.innerText = "Upload Images of damaged product (Jpeg,PNG Etc)";
                detailsLabel.innerText = "Additional Details*";
                imageUploadSection.style.display = 'block';
                detailsSection.style.display = 'block';
                messageInput.setAttribute('required', 'required');
            } else if (val === 'incomplete_order') {
                imageUploadLabel.innerText = "Upload Images of incomplete product (Jpeg,PNG Etc)";
                detailsLabel.innerText = "Additional Details*";
                imageUploadSection.style.display = 'block';
                detailsSection.style.display = 'block';
                messageInput.setAttribute('required', 'required');
            }
        }
    }

    function showOrderStatus(selectElement) {
        var queryVal = document.getElementById('helpQuerySelect').value;
        if (queryVal === 'where_is_order') {
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            var status = selectedOption.getAttribute('data-status');
            var statusDisplay = document.getElementById('orderStatusDisplay');
            var statusText = document.getElementById('orderStatusText');
            
            if (status) {
                statusText.innerText = status;
                statusDisplay.style.display = 'block';
            } else {
                statusDisplay.style.display = 'none';
            }
        } else {
            var statusDisplay = document.getElementById('orderStatusDisplay');
            if (statusDisplay) {
                statusDisplay.style.display = 'none';
            }
        }
    }
</script>

<div class="text-center mt-5 mb-5">
    <div style="border-top: 1px solid #eaeaea; width: 60%; margin: 0 auto; margin-bottom: 40px;"></div>
    
    <h3 class="font-weight-bold mb-4" style="color: #4a5568; font-size: 22px;">Stay in touch</h3>
    
    <div class="d-flex justify-content-center align-items-center mb-4" style="gap: 35px;">
        <div class="text-center">
            <a href="#" class="d-flex align-items-center justify-content-center rounded-circle mx-auto" style="width: 40px; height: 40px; background-color: #5c7cb1; color: white; text-decoration: none; font-size: 18px;">
                <i class="fab fa-facebook-f"></i>
            </a>
            <small class="d-block mt-2 text-muted" style="font-size: 11px;">Facebook</small>
        </div>
        
        <div class="text-center">
            <a href="#" class="d-flex align-items-center justify-content-center rounded-circle mx-auto" style="width: 40px; height: 40px; background-color: #c13584; color: white; text-decoration: none; font-size: 18px;">
                <i class="fab fa-instagram"></i>
            </a>
            <small class="d-block mt-2 text-muted" style="font-size: 11px;">Instagram</small>
        </div>
        
        <div class="text-center">
            <a href="#" class="d-flex align-items-center justify-content-center rounded-circle mx-auto" style="width: 40px; height: 40px; background-color: #ff0000; color: white; text-decoration: none; font-size: 18px;">
                <i class="fab fa-youtube"></i>
            </a>
            <small class="d-block mt-2 text-muted" style="font-size: 11px;">Youtube</small>
        </div>
        
        <div class="text-center">
            <a href="#" class="d-flex align-items-center justify-content-center rounded-circle mx-auto" style="width: 40px; height: 40px; background-color: #000000; color: white; text-decoration: none; font-size: 18px;">
                <i class="fa-brands fa-x-twitter"></i>
            </a>
            <small class="d-block mt-2 text-muted" style="font-size: 11px;">X</small>
        </div>
    </div>
</div>

<div class="text-center py-3" style="background-color: #e31e24; color: white; width: 100vw; position: relative; left: calc(-50vw + 50%);">
    <h4 class="mb-0" style="letter-spacing: 2px; font-size: 22px; font-weight: 500;">HOMEGROWN INDIAN BRAND</h4>
</div>

<div class="text-center py-5 mb-3">
    <h2 class="mb-0" style="font-size: 34px; color: #111;">Over <strong>6 Million</strong> Happy Customers</h2>
</div>

@include('website.footer')
