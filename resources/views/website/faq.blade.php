@include('website.header')
@include('website.nav')

<style>
    .faq-accordion .accordion-button:not(.collapsed) {
        background-color: transparent;
        color: #000;
        box-shadow: none;
    }
    .faq-accordion .accordion-button {
        padding: 15px 0;
        font-size: 15px;
        color: #444;
    }
    .faq-accordion .accordion-item {
        border: none;
        border-bottom: 1px solid #eee;
    }
    .faq-accordion .accordion-body {
        padding: 0 0 15px 0;
        font-size: 14px;
        color: #666;
    }
    
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
        color: #000 !important;
        background-color: transparent;
        font-weight: 700;
        border-left: 3px solid #ffc107;
    }
    
    .nav-pills .nav-link {
        border-radius: 0;
    }
</style>

<div class="container my-5" style="max-width: 1000px;">
    <h2 class="font-weight-bold mb-5" style="font-size: 28px; text-align: center;">Frequently Asked Questions</h2>
    <!-- Bottom Section with Sidebar and Content -->
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-4 col-lg-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link font-weight-bold disabled" style="border-left: 3px solid #ffc107; color: #333; background: none; padding-left: 10px; margin-bottom: 10px; font-size: 15px;" href="#">Orders, Delivery & Payments</a>
                
                <a class="nav-link active text-muted" id="v-pills-orders-tab" data-bs-toggle="pill" href="#v-pills-orders" role="tab" aria-controls="v-pills-orders" aria-selected="true" style="padding-left: 15px; margin-bottom: 10px; font-size: 14px;">Orders, Delivery & Payment</a>
                
                <a class="nav-link text-muted" id="v-pills-cancellations-tab" data-bs-toggle="pill" href="#v-pills-cancellations" role="tab" aria-controls="v-pills-cancellations" aria-selected="false" style="padding-left: 15px; margin-bottom: 10px; font-size: 14px;">Cancellations</a>
                
                <a class="nav-link text-muted" id="v-pills-refunds-tab" data-bs-toggle="pill" href="#v-pills-refunds" role="tab" aria-controls="v-pills-refunds" aria-selected="false" style="padding-left: 15px; margin-bottom: 10px; font-size: 14px;">Refunds & Returns</a>
                
                <a class="nav-link font-weight-bold mt-4 disabled" style="border-left: 3px solid #ffc107; color: #333; background: none; padding-left: 10px; margin-bottom: 10px; font-size: 15px;" href="#">More Queries related to</a>
                
                <a class="nav-link text-muted" id="v-pills-wallet-tab" data-bs-toggle="pill" href="#v-pills-wallet" role="tab" aria-controls="v-pills-wallet" aria-selected="false" style="padding-left: 15px; margin-bottom: 10px; font-size: 14px;">My Bewakoof® Wallet</a>
                
                <a class="nav-link text-muted" id="v-pills-account-tab" data-bs-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account" aria-selected="false" style="padding-left: 15px; margin-bottom: 10px; font-size: 14px;">My Account</a>
                
                <a class="nav-link text-muted" id="v-pills-offers-tab" data-bs-toggle="pill" href="#v-pills-offers" role="tab" aria-controls="v-pills-offers" aria-selected="false" style="padding-left: 15px; margin-bottom: 10px; font-size: 14px;">Offers and Combos</a>
                
                <a class="nav-link text-muted" id="v-pills-tribe-tab" data-bs-toggle="pill" href="#v-pills-tribe" role="tab" aria-controls="v-pills-tribe" aria-selected="false" style="padding-left: 15px; margin-bottom: 10px; font-size: 14px;">TriBe Membership</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-8 col-lg-9 pl-md-5 mt-4 mt-md-0">
            <div class="tab-content" id="v-pills-tabContent">
                
                <!-- Orders, Delivery & Payment Tab -->
                <div class="tab-pane fade show active" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab">
                    <h5 class="font-weight-bold mb-4" style="font-size: 18px;">Frequently asked questions</h5>
                    <div class="accordion faq-accordion" id="accordionOrders">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    How do I check the status of my order?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionOrders">
                                <div class="accordion-body">
                                    You can check the status of your order by clicking Track Order on the DeLuneh page post account login.<br><br>
                                    Once your order is placed, we will send you confirmation of your order details by e-mail and SMS.<br><br>
                                    Again, once we dispatch your shipment, you will be notified via SMS.<br><br>
                                    Your tracking link may take up to 24 hours from shipping date to get activated.<br><br>
                                    In case of any unusual event which delays your order, you will receive an update from us.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What are the delivery charges?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionOrders">
                                <div class="accordion-body">
                                    Delivery charges vary depending on your location and the total order value. Standard delivery is usually free for orders above ₹999. You can view the exact delivery fee at checkout.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cancellations Tab -->
                <div class="tab-pane fade" id="v-pills-cancellations" role="tabpanel" aria-labelledby="v-pills-cancellations-tab">
                    <h5 class="font-weight-bold mb-4" style="font-size: 18px;">Frequently asked questions</h5>
                    <div class="accordion faq-accordion" id="accordionCancellations">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingCancel1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCancel1" aria-expanded="false" aria-controls="collapseCancel1">
                                    Can I cancel my Order?
                                </button>
                            </h2>
                            <div id="collapseCancel1" class="accordion-collapse collapse" aria-labelledby="headingCancel1" data-bs-parent="#accordionCancellations">
                                <div class="accordion-body">
                                    Yes, you can cancel your order before it has been shipped. To cancel, please visit the "My Profile" section in your account.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingCancel2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCancel2" aria-expanded="false" aria-controls="collapseCancel2">
                                    How do I cancel my order which is already in progress?
                                </button>
                            </h2>
                            <div id="collapseCancel2" class="accordion-collapse collapse" aria-labelledby="headingCancel2" data-bs-parent="#accordionCancellations">
                                <div class="accordion-body">
                                    If your order is already in progress but not yet shipped, you can cancel it directly from the Track Order or Profile tab. If the cancel button is not visible, it means the order has already been dispatched.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingCancel3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCancel3" aria-expanded="false" aria-controls="collapseCancel3">
                                    Can I cancel my Cancellation Request?
                                </button>
                            </h2>
                            <div id="collapseCancel3" class="accordion-collapse collapse" aria-labelledby="headingCancel3" data-bs-parent="#accordionCancellations">
                                <div class="accordion-body">
                                    No, once a cancellation request is submitted and processed, it cannot be reversed. You will need to place a new order for the desired items.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingCancel4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCancel4" aria-expanded="false" aria-controls="collapseCancel4">
                                    Cancellation Policy
                                </button>
                            </h2>
                            <div id="collapseCancel4" class="accordion-collapse collapse" aria-labelledby="headingCancel4" data-bs-parent="#accordionCancellations">
                                <div class="accordion-body">
                                    Our cancellation policy allows you to cancel orders before they are shipped. Refunds for prepaid orders will be initiated immediately and reflect in your account within 5-7 business days.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Refunds & Returns Tab -->
                <div class="tab-pane fade" id="v-pills-refunds" role="tabpanel" aria-labelledby="v-pills-refunds-tab">
                    <h5 class="font-weight-bold mb-4" style="font-size: 18px;">Frequently asked questions</h5>
                    <div class="accordion faq-accordion" id="accordionRefunds">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingRef1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRef1" aria-expanded="false" aria-controls="collapseRef1">
                                    What is your return policy?
                                </button>
                            </h2>
                            <div id="collapseRef1" class="accordion-collapse collapse" aria-labelledby="headingRef1" data-bs-parent="#accordionRefunds">
                                <div class="accordion-body">
                                    We offer a 15-day return policy for most items. The product must be unused, unwashed, and have all original tags attached.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingRef2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRef2" aria-expanded="false" aria-controls="collapseRef2">
                                    How long does a refund take?
                                </button>
                            </h2>
                            <div id="collapseRef2" class="accordion-collapse collapse" aria-labelledby="headingRef2" data-bs-parent="#accordionRefunds">
                                <div class="accordion-body">
                                    Refunds are typically processed within 48 hours of us receiving the returned product. It may take 5-7 business days for the amount to reflect in your bank account or wallet.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wallet Tab -->
                <div class="tab-pane fade" id="v-pills-wallet" role="tabpanel" aria-labelledby="v-pills-wallet-tab">
                    <h5 class="font-weight-bold mb-4" style="font-size: 18px;">Frequently asked questions</h5>
                    <div class="accordion faq-accordion" id="accordionWallet">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingWal1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWal1" aria-expanded="false" aria-controls="collapseWal1">
                                    How do I use my Wallet balance?
                                </button>
                            </h2>
                            <div id="collapseWal1" class="accordion-collapse collapse" aria-labelledby="headingWal1" data-bs-parent="#accordionWallet">
                                <div class="accordion-body">
                                    You can select Wallet as a payment method during checkout. The available balance will be automatically deducted from your total order value.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Account Tab -->
                <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">
                    <h5 class="font-weight-bold mb-4" style="font-size: 18px;">Frequently asked questions</h5>
                    <div class="accordion faq-accordion" id="accordionAccount">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingAcc1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAcc1" aria-expanded="false" aria-controls="collapseAcc1">
                                    How do I update my profile details?
                                </button>
                            </h2>
                            <div id="collapseAcc1" class="accordion-collapse collapse" aria-labelledby="headingAcc1" data-bs-parent="#accordionAccount">
                                <div class="accordion-body">
                                    You can update your profile details by logging into your account, navigating to the "My Profile" section, and clicking on the edit button.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Offers Tab -->
                <div class="tab-pane fade" id="v-pills-offers" role="tabpanel" aria-labelledby="v-pills-offers-tab">
                    <h5 class="font-weight-bold mb-4" style="font-size: 18px;">Frequently asked questions</h5>
                    <div class="accordion faq-accordion" id="accordionOffers">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOff1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOff1" aria-expanded="false" aria-controls="collapseOff1">
                                    How do I apply a coupon code?
                                </button>
                            </h2>
                            <div id="collapseOff1" class="accordion-collapse collapse" aria-labelledby="headingOff1" data-bs-parent="#accordionOffers">
                                <div class="accordion-body">
                                    You can apply your coupon code on the cart page before proceeding to checkout. Enter the code in the "Apply Coupon" field and click Apply.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TriBe Tab -->
                <div class="tab-pane fade" id="v-pills-tribe" role="tabpanel" aria-labelledby="v-pills-tribe-tab">
                    <h5 class="font-weight-bold mb-4" style="font-size: 18px;">Frequently asked questions</h5>
                    <div class="accordion faq-accordion" id="accordionTribe">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTribe1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTribe1" aria-expanded="false" aria-controls="collapseTribe1">
                                    What are the benefits of TriBe Membership?
                                </button>
                            </h2>
                            <div id="collapseTribe1" class="accordion-collapse collapse" aria-labelledby="headingTribe1" data-bs-parent="#accordionTribe">
                                <div class="accordion-body">
                                    TriBe members enjoy exclusive benefits like early access to sales, special discounts, priority customer support, and free shipping on all orders.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</div>

@include('website.footer')
