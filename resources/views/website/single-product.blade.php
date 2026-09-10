@include('website.header')
@include('website.nav')
<style>
.bg-button {
    background: #e02b2b !important;
    border-color: #e02b2b !important;
    color: #fff !important;
}
.transparent-button:hover {
    background: #e02b2b !important;
    color: #fff !important;
}
.navigation {
    display: none;
}
.highlated-sale.top-highlated.d-lg-block.d-none{
   display:none!important; 
}
.main--wrapper {
        margin-top: 97px !important;
    }
    .breadcrumb{
        font-size:12px;
    }
    .heading-product h1{
        font-size:26px!important;
    }
    .prdct_title_block p{
        font-size:14px!important;
    }
    .prd-offer-price{
        font-size:22px!important;
    }
    .inclusive {
        font-size:12px!important;
    }
    .size_block-div label {
                font-size:14px!important;
        padding: 7px 8px!important;
        height: 30px!important;
        width: 45px!important;
        
    }
    .heading-txt h3{
        font-size:18px!important;
    }
    /*.accordion-item h2 button[aria-expanded="true"]:before {*/
    /*   content: "+"; */
    /*}*/
    .accordion-item h2 button[aria-expanded="false"]:after {
    content: "-";
}
    .product-details-collpase .accordion-button {
        font-weight:500!important;
    }
    .return-prdct {
    font-size: 12px!important;
    padding: 8px!important;
        
    }
    .delivery_option .picode-form input {
    font-size: 13px!important;
    padding: 8px 8px!important;
    }
    .size-chart-block p{
                        font-size:14px!important;
    }
    .size-chart-block p a{
        text-transform:none!important;
    }
    .quantity-control {
    font-size: 12px!important;
    align-items:center;
    padding: .6rem 0.3rem!important;
    min-width: 90px!important;
    height: 40px!important;
}
.prdct-button {
    font-size: 14px!important;
    padding: 10px 15px!important;
    width: 12.5rem!important;
}
.prdct-button span {
    font-size: 14px!important;
    column-gap: 5px;
}
.share ul li a i{
       font-size: 17px!important;
 
}
.delivery_option label {
{
          font-size: 15px!important;
}
 #product-none{
        display:none!important;
    }
    .product-details-collpase .accordion-button:not(.collapsed)::after {
        display:none;
    }
    .product-details-collpase .accordion-button::after {
                display:none;
    }
    .floating-menu.hidden-large{
    display:none!important;
}
@media screen and (max-width: 992px) {
    .main--wrapper {
        margin-top: 49px !important;
    }
}
</style>
<div class="breadcrumbs_nav hide-mobile">
    <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Product Details</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
          </ol>
        </nav>
    </div>
</div>




<div class="whole_container">
        <div class="product-container1 mtop_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 product-info-wrapper-sticky1">
                        <div class="product_detail_slider mobile-none">
                            <div class="product_grid_details" style="{{ (!$product->images || count($product->images) <= 1) ? 'grid-template-columns: 1fr;' : '' }}">
                                @if($product->images && count($product->images) > 0)
                                    @foreach($product->images as $image)
                                      <div class="image_grid">
                                        <div class="image-grid-box">
                                          <img src="{{ Storage::url($image) }}" class="img-fluid" alt="{{ $product->name }}">
                                        </div>
                                      </div>
                                    @endforeach
                                @else
                                      <div class="image_grid">
                                        <div class="image-grid-box">
                                          <img src="https://prod-img.thesouledstore.com/public/theSoul/uploads/catalog/product/1773050044_7726205.jpg" class="img-fluid" alt="">
                                        </div>
                                      </div>
                                @endif
                            </div>
                        </div>

                        <!-- -----Mobile Product Slider-------------- -->
                        <div class="mobile_slick owl-carousel desktop-none" id="mobile_slick">
                            @if($product->images && count($product->images) > 0)
                                @foreach($product->images as $image)
                                  <div class="mobile_slick_image">
                                      <img src="{{ Storage::url($image) }}" class="img-fluid" alt="{{ $product->name }}">
                                  </div>
                                @endforeach
                            @else
                                  <div class="mobile_slick_image">
                                      <img src="/images/pr1.png" class="img-fluid" alt="">
                                  </div>
                            @endif
                        </div>
                        <!-- -----Mobile Product Slider-------------- -->
                    </div>
                    <div class="col-md-5">
                        <div class="product-detail-right">
                            <div class="heading-product">
                              <div class="prdct_title_block">
                                <h1 class="fw-600">{{ $product->name }}</h1>
                                <p>{{ optional($product->category)->name ?? 'Product' }}</p>
                              </div>
                            </div>
                            <div class="prdct-detail-price">
                                <div class="div-detail-price-row">
                                    <span class="prd-offer-price">₹ {{ $product->discount_price ?? $product->price }}</span>
                                    @if($product->discount_price && $product->discount_price < $product->price)
                                        <span class="del_price_off" style="font-size:16px; margin-left:10px;"><del>₹{{ $product->price }}</del></span>
                                    @endif
                                </div>
                                <div class="inclusive">Price incl. of all taxes
</div>
                                    <!--<div class="color-available">-->
                                    <!--  <h5>4 colors Available</h5>-->
                                    <!--  <div class="clr-box-container">-->
                                    <!--    <div class="d-flex">-->
                                    <!--      <div class="clr-box-block active_op"><img src="/images/c1.png" class="img-fluid" alt=""></div>-->
                                    <!--      <div class="clr-box-block"><img src="/images/c2.png" class="img-fluid" alt=""></div>-->
                                    <!--      <div class="clr-box-block"><img src="/images/c3.png" class="img-fluid" alt=""></div>-->
                                    <!--      <div class="clr-box-block"><img src="/images/c4.png" class="img-fluid" alt=""></div>-->
                                    <!--    </div>-->
                                    <!--  </div>-->
                                    <!--</div>-->

                                <div class="size-custom-label mt-2">
                                    <div class="size-first-block">
                                        <div class="size_flex d-flex align-items-center justify-content-between">
                                          <div class="size-select">
                                            <!--<p class="drss-name">Oversized Polos</p>-->
                                            
                                            <div class="d-flex align-items-center">
                                              <a href="">Please select a size</a>
                                            </div>
                                          </div>
                                          <div class="size-guide"><a href="">Size Guide</a></div>
                                        </div>
                                    </div>
                                    <ul class="size-label-form prdct-detail-size-blck">
                                        @if($product->sizes && is_array($product->sizes) && count($product->sizes) > 0)
                                            @foreach($product->sizes as $size)
                                                <li class="size_block-div">
                                                    <input type="radio" id="size_{{ $size }}" name="size" value="{{ $size }}" />
                                                    <label for="size_{{ $size }}" class="size-label">
                                                        {{ $size }}
                                                    </label>
                                                </li>
                                            @endforeach
                                        @else
                                            <li class="size_block-div">
                                                <span class="text-danger">Out of stock</span>
                                            </li>
                                        @endif
                                      </ul>
                                      <div id="size-error" class="text-danger mt-2" style="display:none; font-size:14px; font-weight:600;">Please select a size</div>
                                  </div>
                                <div class="size-chart-block sp_line">
                                    <p>Size not available? <a href="">Notify Me</a></p>
                                </div>
                                <!--<div class="size-custom-label size-custom-label2">-->
                                <!--    <div class="size-first-block">-->
                                <!--        <div class="size_flex d-flex align-items-center justify-content-between">-->
                                <!--          <div class="size-select text-uppercase">-->
                                <!--            <p class="drss-name">Men Bermuda Shorts</p>-->
                                <!--            <div class="d-flex align-items-center">-->
                                <!--              <a href="">Select Size</a>-->
                                <!--            </div>-->
                                <!--          </div>-->
                                <!--          <div class="size-guide text-uppercase"><a href="">Size Guide</a></div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--    <ul class="size-label-form prdct-detail-size-blck">-->
                                <!--        <li class="size_block-div">-->
                                <!--            <input type="radio" id="30_1" name="checkbox" />-->
                                <!--            <label for="30_1" class="size-label">-->
                                <!--                30-->
                                <!--            </label>-->
                                <!--        </li>-->
                                <!--        <li class="size_block-div">-->
                                <!--            <input type="radio" id="32_1" name="checkbox" />-->
                                <!--            <label for="32_1" class="size-label">-->
                                <!--                32-->
                                <!--            </label>-->
                                <!--        </li>-->
                                <!--        <li class="size_block-div">-->
                                <!--            <input type="radio" id="34_1" name="checkbox" />-->
                                <!--            <label for="34_1" class="size-label">-->
                                <!--                34-->
                                <!--            </label>-->
                                <!--        </li>-->
                                <!--        <li class="size_block-div">-->
                                <!--            <input type="radio" id="36" name="checkbox" />-->
                                <!--            <label for="36" class="size-label">-->
                                <!--                36-->
                                <!--            </label>-->
                                <!--        </li>-->
                                <!--        <li class="size_block-div">-->
                                <!--            <input type="radio" id="38_1" name="checkbox" />-->
                                <!--            <label for="38_1" class="size-label">-->
                                <!--                38-->
                                <!--            </label>-->
                                <!--        </li>-->
                                <!--        <li class="size_block-div">-->
                                <!--            <input type="radio" id="40_1" name="checkbox" />-->
                                <!--            <label for="40_1" class="size-label">-->
                                <!--                40-->
                                <!--            </label>-->
                                <!--        </li>-->
                                <!--        <li class="size_block-div">-->
                                <!--            <input type="radio" id="42_1" name="checkbox" />-->
                                <!--            <label for="42_1" class="size-label">-->
                                <!--                42-->
                                <!--            </label>-->
                                <!--        </li>-->
                                <!--        <li class="size_block-div">-->
                                <!--            <input type="radio" id="44_1" name="checkbox" />-->
                                <!--            <label for="44_1" class="size-label">-->
                                <!--                44-->
                                <!--            </label>-->
                                <!--        </li>-->
                                <!--        <li class="size_block-div">-->
                                <!--            <input type="radio" id="46_1" name="checkbox" />-->
                                <!--            <label for="46_1" class="size-label">-->
                                <!--                46-->
                                <!--            </label>-->
                                <!--        </li>-->
                                <!--    </ul>-->
                                <!--</div>-->

                                <!--<div class="size-chart-block">-->
                                <!--    <p>Size not available? <a href="">Notify Me</a></p>-->
                                <!--</div>-->

                                <div class="quantity">
                                    <div class="qty_flex">
                                        <div class="quantity_name fw-700">QTY :</div>
                                            <div class="quantity-control" data-quantity="">
                                                <button class="quantity-btn" data-quantity-minus=""><svg viewBox="0 0 409.6 409.6">
                                                    <g>
                                                      <g>
                                                        <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
                                                      </g>
                                                    </g>
                                                  </svg>
                                                </button>
                                                <input type="number" class="quantity-input" data-quantity-target="" value="1" step="1" min="1" max="" name="quantity">
                                                <button class="quantity-btn" data-quantity-plus=""><svg viewBox="0 0 426.66667 426.66667">
                                                    <path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" /></svg>
                                                </button>
                                            </div>
                                    </div>
                                    <!--<div class="delivery_day">-->
                                    <!--    <div class="d-flex align-items-center">-->
                                    <!--        <div class="del_icon">-->
                                    <!--            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                                    <!--                <g clip-path="url(#clip0_4443_520)">-->
                                    <!--                <path d="M5.25 3.75H9.75V6.66C9.75 6.88278 9.6615 7.09644 9.50397 7.25397C9.34644 7.4115 9.13278 7.5 8.91 7.5H6.09C5.86722 7.5 5.65356 7.4115 5.49603 7.25397C5.3385 7.09644 5.25 6.88278 5.25 6.66V3.75Z" fill="#A0A0A0"/>-->
                                    <!--                <path d="M23.5575 12.75L22.4025 11.595L21.135 7.7775C21.0357 7.47817 20.8445 7.21777 20.5887 7.03331C20.3328 6.84885 20.0254 6.74971 19.71 6.75H15V5.25C15 4.65326 14.7629 4.08097 14.341 3.65901C13.919 3.23705 13.3467 3 12.75 3H2.25C1.65326 3 1.08097 3.23705 0.65901 3.65901C0.237053 4.08097 0 4.65326 0 5.25L0 16.5C0 17.0967 0.237053 17.669 0.65901 18.091C1.08097 18.5129 1.65326 18.75 2.25 18.75H3.105C3.28754 19.457 3.72167 20.0731 4.32601 20.483C4.93034 20.8928 5.66339 21.0681 6.38775 20.9761C7.11211 20.8841 7.77805 20.5311 8.26074 19.9832C8.74343 19.4353 9.00974 18.7302 9.00974 18C9.00974 17.2698 8.74343 16.5647 8.26074 16.0168C7.77805 15.4689 7.11211 15.1159 6.38775 15.0239C5.66339 14.9319 4.93034 15.1072 4.32601 15.517C3.72167 15.9269 3.28754 16.543 3.105 17.25H2.25C2.05109 17.25 1.86032 17.171 1.71967 17.0303C1.57902 16.8897 1.5 16.6989 1.5 16.5V5.25C1.5 5.05109 1.57902 4.86032 1.71967 4.71967C1.86032 4.57902 2.05109 4.5 2.25 4.5H12.75C12.9489 4.5 13.1397 4.57902 13.2803 4.71967C13.421 4.86032 13.5 5.05109 13.5 5.25V17.25H11.25C11.0511 17.25 10.8603 17.329 10.7197 17.4697C10.579 17.6103 10.5 17.8011 10.5 18C10.5 18.1989 10.579 18.3897 10.7197 18.5303C10.8603 18.671 11.0511 18.75 11.25 18.75H15.855C16.0277 19.3855 16.4048 19.9466 16.9279 20.3465C17.4511 20.7465 18.0914 20.9632 18.75 20.9632C19.4086 20.9632 20.0489 20.7465 20.5721 20.3465C21.0952 19.9466 21.4723 19.3855 21.645 18.75H22.5C22.8978 18.75 23.2794 18.592 23.5607 18.3107C23.842 18.0294 24 17.6478 24 17.25V13.8075C23.9983 13.4103 23.8392 13.03 23.5575 12.75ZM6 16.5C6.29667 16.5 6.58668 16.588 6.83335 16.7528C7.08003 16.9176 7.27229 17.1519 7.38582 17.426C7.49935 17.7001 7.52906 18.0017 7.47118 18.2926C7.4133 18.5836 7.27044 18.8509 7.06066 19.0607C6.85088 19.2704 6.58361 19.4133 6.29264 19.4712C6.00166 19.5291 5.70006 19.4993 5.42597 19.3858C5.15189 19.2723 4.91762 19.08 4.7528 18.8334C4.58797 18.5867 4.5 18.2967 4.5 18C4.5 17.6022 4.65804 17.2206 4.93934 16.9393C5.22064 16.658 5.60218 16.5 6 16.5ZM20.7075 11.25H18V8.25H19.71L20.7075 11.25ZM18.75 19.5C18.4533 19.5 18.1633 19.412 17.9166 19.2472C17.67 19.0824 17.4777 18.8481 17.3642 18.574C17.2506 18.2999 17.2209 17.9983 17.2788 17.7074C17.3367 17.4164 17.4796 17.1491 17.6893 16.9393C17.8991 16.7296 18.1664 16.5867 18.4574 16.5288C18.7483 16.4709 19.0499 16.5006 19.324 16.6142C19.5981 16.7277 19.8324 16.92 19.9972 17.1666C20.162 17.4133 20.25 17.7033 20.25 18C20.25 18.3978 20.092 18.7794 19.8107 19.0607C19.5294 19.342 19.1478 19.5 18.75 19.5ZM22.5 17.25H21.645C21.4723 16.6145 21.0952 16.0534 20.5721 15.6534C20.0489 15.2535 19.4086 15.0367 18.75 15.0367C18.0914 15.0367 17.4511 15.2535 16.9279 15.6534C16.4048 16.0534 16.0277 16.6145 15.855 17.25H15V8.25H16.5V12C16.5 12.1989 16.579 12.3897 16.7197 12.5303C16.8603 12.671 17.0511 12.75 17.25 12.75H21.4425L22.5 13.8075V17.25Z" fill="black"/>-->
                                    <!--                </g>-->
                                    <!--                <defs>-->
                                    <!--                <clipPath id="clip0_4443_520">-->
                                    <!--                <rect width="24" height="24" fill="white"/>-->
                                    <!--                </clipPath>-->
                                    <!--                </defs>-->
                                    <!--            </svg>-->
                                    <!--        </div>-->
                                    <!--        <div class="del_text">-->
                                    <!--            <h6>Same Day Delivery</h6>-->
                                    <!--            <p>Order by 1pm in Kochi, Kerala, India</p>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>


                            <div class="product-detail-button add_sticky_mobile_cart">
                                <button class="prdct-button bg-button" id="add-to-cart-btn" data-product-id="{{ $product->id }}">
                                    <span class="d-flex justify-content-center">
                                        <?xml version="1.0" ?><svg height="15px" width="19px" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 160h-72V120C344 53.83 290.2 0 224 0S104 53.83 104 120V160H32C14.33 160 0 174.3 0 192v240C0 476.2 35.82 512 80 512h288c44.18 0 80-35.82 80-80V192C448 174.3 433.7 160 416 160zM152 120C152 80.3 184.3 48 224 48s72 32.3 72 72V160h-144V120zM128 248C114.8 248 104 237.3 104 224S114.8 200 128 200S152 210.8 152 224S141.3 248 128 248zM320 248c-13.25 0-24-10.75-24-24S306.8 200 320 200S344 210.8 344 224S333.3 248 320 248z"/></svg>
                                        Add to cart
                                    </span>
                                </button>
                                @php
                                    $inWishlist = isset(session('wishlist')[$product->id]);
                                    $btnText = $inWishlist ? 'ADDED TO WISHLIST' : 'Add to wishlist';
                                @endphp
                                <button class="prdct-button transparent-button" id="addToWishlistBtn" data-product-id="{{ $product->id }}">
                                    <?xml version="1.0" ?><svg height="15px" width="19px" data-name="Layer 4" id="Layer_4" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#231f20;}</style></defs><path class="cls-1" d="M80.79,28.43A21.2,21.2,0,0,1,102,49.61c0,8.12-3.52,20.9-20.26,35.67A120.67,120.67,0,0,1,64,98.11,120.67,120.67,0,0,1,46.29,85.28C29.55,70.51,26,57.73,26,49.61A21.18,21.18,0,0,1,58.61,31.76L64,35.22l5.39-3.46a21.12,21.12,0,0,1,11.4-3.33m0-10A31.08,31.08,0,0,0,64,23.34,31.18,31.18,0,0,0,16,49.61c0,36,48,60,48,60s48-24,48-60A31.18,31.18,0,0,0,80.79,18.43Z"/></svg>
                                    <span id="wishlistBtnText">{{ $btnText }}</span>
                                </button>
                            </div>  

                            <div class="share">
                                <div class="d-flex">
                                    <p>Share :</p>
                                    <ul class="share_link">
                                        <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                                                        <div class="delivery_option">
                                <label for="">Delivery Details</label>
                                <div class="picode-form" style="max-width:100%;">
                                    <input type="text" class="form-control" placeholder="Enter Pincode" name="">
                                    <a href="" class="text-upercase check">Check</a>
                                </div>
                                <p>Please enter PIN code to check delivery time & Pay on Delivery Availability</p>
                            </div>


                            <div class="return-prdct ">
                                <div class="d-flex">
                                    <span class="rtn_icon">
                                    <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg width="40px" height="40px" enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_1"/><g id="Layer_2"><g><path d="M256.1,424.2c44.9,0,87.1-17.5,118.9-49.3c29.5-29.5,46.9-68.7,49-110.4c0.2-4.1-3-7.7-7.1-7.9c-4.1-0.2-7.7,3-7.9,7.1    c-1.9,37.9-17.8,73.6-44.7,100.5c-28.9,28.9-67.4,44.9-108.3,44.9s-79.4-15.9-108.3-44.9c-59.7-59.7-59.7-156.9,0-216.6    c50.9-50.9,130.1-59.4,190.3-21.1l-16.9,20.7l48.5-4.9l-4.9-48.5l-17.1,21c-66.3-43.2-154.2-34.1-210.5,22.2    c-65.6,65.6-65.6,172.2,0,237.8C169,406.7,211.2,424.2,256.1,424.2z"/><path d="M335.4,221.4c0-0.1,0-0.2-0.1-0.2c0-0.2-0.1-0.3-0.1-0.5c0-0.1-0.1-0.3-0.1-0.4c0-0.1-0.1-0.2-0.1-0.3    c-0.2-0.5-0.4-0.9-0.7-1.3c0,0,0,0,0,0L302.5,172c-1.4-2.1-3.7-3.3-6.2-3.3h-80.6c-2.5,0-4.8,1.2-6.2,3.3l-31.8,46.6c0,0,0,0,0,0    c-0.3,0.4-0.5,0.9-0.7,1.3c0,0.1-0.1,0.2-0.1,0.3c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.2-0.1,0.3-0.1,0.5c0,0.1,0,0.2-0.1,0.2    c-0.1,0.5-0.2,1-0.2,1.5c0,0,0,0,0,0v112.9c0,4.1,3.4,7.5,7.5,7.5H328c4.1,0,7.5-3.4,7.5-7.5V222.9c0,0,0,0,0,0    C335.5,222.3,335.5,221.8,335.4,221.4z M219.7,183.7h72.6l21.5,31.6H198.1L219.7,183.7z M320.5,328.3H191.5v-97.9h129.1V328.3z"/></g></g></svg></span>
                                    <span class="rtn-text">
                                        This product is eligible for return or exchange under our 30-day return or exchange policy. No questions asked.
                                    </span>
                                </div>
                            </div>

                            <div class="product-details-collpase">
                                <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="Product_Details">
                                      <button class="accordion-button show" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        PRODUCT DETAILS
                                      </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse show1" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">

                                        @if($product->material_care)
                                        <div class="mtop_12">
                                            <h4>Material & Care</h4>
                                            <p>{{ $product->material_care }}</p>
                                        </div>
                                        @endif
                                        @if($product->country_of_origin)
                                        <div class="mtop_12">
                                            <h4>Country of Origin</h4>
                                            <p>{{ $product->country_of_origin }}</p>
                                        </div>
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        PRODUCT DESCRIPTION
                                      </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        <p>{!! nl2br(e($product->description)) !!}</p>
                                      </div>
                                    </div>
                                  </div>
                                  
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .product-title h5 {
    font-size: 14px;
    border-bottom: 1px rgba(0, 0, 0, 0.13) solid;
    padding: 0px 0 4px 0;
    margin-bottom: 0px;
    white-space: nowrap;
    width: 12em;
    color:rgb(88, 92, 112);
    font-weight:900;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 100%;
}
.border{
    border-top:1px solid #eee!important;
    margin-bottom:40px;
}
        </style>
     <section class="product-slider-section mt-2">
            <div class="container">
                        <div class="border"></div>
                <div class="row">
                    <div class="col-12">
                        <div class="heading-txt align-items-center mb-20">
                            <h3 class="fw-700 text-uppercase text-center">Others Also Bought</h3>
                        </div>

                        <!-- Swiper Container -->
                        <div class="swiper product-swiper position-relative">
                            <div class="swiper-wrapper mb-2">
                                @foreach($relatedProducts as $related)
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                        <div class="card image-hover" style="border:none!important;">
                                            <a href="{{ route(\App\Constants\RouteNames::SINGLE_PRODUCT_INDEX, ['slug' => $related->slug]) }}">
                                            @if($related->images && count($related->images) > 0)
                                                <img src="{{ Storage::url($related->images[0]) }}" class="card-img-top first-img" alt="{{ $related->name }}" style="aspect-ratio: 3/4; object-fit: cover; width: 100%; background-color: #f5f5f5;">
                                                @if(count($related->images) > 1)
                                                    <img src="{{ Storage::url($related->images[1]) }}" class="card-img-top second-img" alt="{{ $related->name }}" style="aspect-ratio: 3/4; object-fit: cover; width: 100%; background-color: #f5f5f5;">
                                                @else
                                                    <img src="{{ Storage::url($related->images[0]) }}" class="card-img-top second-img" alt="{{ $related->name }}" style="aspect-ratio: 3/4; object-fit: cover; width: 100%; background-color: #f5f5f5;">
                                                @endif
                                            @else
                                                <img src="https://prod-img.thesouledstore.com/public/theSoul/uploads/catalog/product/1712574694_1119733.jpg?w=300&dpr=1" class="card-img-top first-img" alt="{{ $related->name }}" style="aspect-ratio: 3/4; object-fit: cover; width: 100%; background-color: #f5f5f5;">
                                                <img src="https://prod-img.thesouledstore.com/public/theSoul/uploads/catalog/product/1753184953_8196988.jpg?w=300&dpr=1" class="card-img-top second-img" alt="{{ $related->name }}" style="aspect-ratio: 3/4; object-fit: cover; width: 100%; background-color: #f5f5f5;">
                                            @endif
                                            </a>
                                            <div class="product-detail p-1 product-title">
                                                
                                                        <h5 class="text-left" style="font-size: 14px;">{{ $related->name }}</h5>
                                                        <span style="font-size: 11px;">{{ optional($related->category)->name ?? 'Product' }}</span>
                                                    
                                                <p class="item-price">
                                                    <span class="offer_price_number">₹{{ $related->discount_price ?? $related->price }}</span>
                                                    @if($related->discount_price && $related->discount_price < $related->price)
                                                        <span class="price_number">₹{{ $related->price }}</span>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                @endforeach

                            </div>

                        <!-- Navigation Buttons -->
                        <div class="product-pagination flex justify-center"></div>
                        <!-- <div class="swiper-button-custom product-button-prev"><i class="fa fa-chevron-left"></i></div> -->
                        <!-- <div class="swiper-button-custom product-button-next"><i class="fa fa-chevron-right"></i></div> -->
                    </div>
                    <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                    </div>
                </div>
            </div>
            </div>
        </section>


</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const addToCartBtn = document.getElementById('add-to-cart-btn');
    const sizeError = document.getElementById('size-error');
    
    if(addToCartBtn) {
        addToCartBtn.addEventListener('click', function(e) {
            // Check if it's already "GO TO CART"
            if (this.innerText.includes('GO TO CART')) {
                window.location.href = '{{ route(\App\Constants\RouteNames::CART) }}';
                return;
            }
            
            const selectedSize = document.querySelector('input[name="size"]:checked');
            const quantityInput = document.querySelector('.quantity-input');
            const quantity = quantityInput ? quantityInput.value : 1;
            const productId = this.getAttribute('data-product-id');
            
            if (!selectedSize) {
                sizeError.style.display = 'block';
                return;
            } else {
                sizeError.style.display = 'none';
            }
            
            // Disable button during request
            const originalHtml = this.innerHTML;
            this.innerHTML = '<span class="d-flex justify-content-center">Adding...</span>';
            
            fetch('{{ route("cart.add") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    product_id: productId,
                    size: selectedSize.value,
                    quantity: quantity
                })
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    this.innerHTML = '<span class="d-flex justify-content-center">GO TO CART</span>';
                } else {
                    this.innerHTML = originalHtml;
                    alert('Error adding to cart');
                }
            })
            .catch(error => {
                this.innerHTML = originalHtml;
                console.error('Error:', error);
            });
        });
    }
    // Wishlist AJAX Logic
    const addToWishlistBtn = document.getElementById('addToWishlistBtn');
    if(addToWishlistBtn) {
        addToWishlistBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            const productId = this.getAttribute('data-product-id');
            const btnTextElement = document.getElementById('wishlistBtnText');
            
            fetch('{{ route("wishlist.add") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    product_id: productId
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    if (data.action === 'added') {
                        btnTextElement.innerText = 'ADDED TO WISHLIST';
                    } else {
                        btnTextElement.innerText = 'Add to wishlist';
                    }
                    
                    // Update header wishlist badge if exists
                    const wishlistBadges = document.querySelectorAll('.wishlist-section-container .badge-count, .profile-cart-icon a[href="/wishlist"] .badge-count');
                    if (data.wishlist_count > 0) {
                        wishlistBadges.forEach(badge => {
                            badge.textContent = data.wishlist_count;
                            badge.style.display = 'inline-block';
                        });
                    } else {
                        wishlistBadges.forEach(badge => {
                            badge.style.display = 'none';
                        });
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    }

});
</script>
@include('website.footer')
