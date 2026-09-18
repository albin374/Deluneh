@include('website.header')
@include('website.nav')
<style>
    #home-none{
        display:none!important;
    }
</style>

<div class="whole_container mtop_40">
        <div class="product-container1 cart_container mtop_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="left_cart-side">

                           <!--  <div class="delivery-address-bar1 member-discount-bar">
                                <div class="">
                                    <div class="delivery_content-text d-flex justify-content-between align-items-center">
                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"/></svg>
                                        <p class="">Your <strong>Member Discount</strong> on this order are Rs. 550</p>
                                    </div>
                                </div>
                            </div>

                            <div class="Membership-extend delivery-address-bar2">
                                <div class="">
                                    <div class="delivery_content-text d-flex justify-content-center align-items-center">
                                        <div class="content-extend">
                                            <h5 class="fw-700">Extend Your Membership at a discounted Price</h5>
                                            <h6 class="fw-600"><span style="color: #ff0043;">12 Months @ 99</span> ₹1999</h6>
                                        </div>
                                        <div class="ext-btn-block">
                                            <a href="" class="extend-btn">Extend Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="delivery-address-bar">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="delivery_content-text">
                                        <h5 class="fw-700">Deliver To: Fazal KV Mohammed, 670001</h5>
                                        <p>Kuruva, Thayyil, Kannur, Kerala</p>
                                    </div>
                                    <div class="change-add" data-bs-toggle="modal" data-bs-target="#modal-addss"><button>change</button></div>
                                </div>
                            </div>

                            <div class="cart--itrm--row">
                                <div class="cart_count-title">
                                    <h6 class="fw-700">5 Items on Cart</h6>
                                </div>

                               

                                <div class="item--cart-block">
                                    <div class="item--box-cart">
                                        <div class="cart--box--image">

                                            <div class="cart--prdct-checkbox">
                                                <input type="checkbox" checked="" id="cart-prdct-check1">
                                                <label for="cart-prdct-check1">
                                                    <span class="check_mark_icon"></span>
                                                </label>
                                            </div>

                                            <a href="">
                                                <div class="cart_prd-image" style="width: 130px; height: 174px;">
                                                    <img src="https://assets.myntassets.com/f_webp,dpr_1.0,q_60,w_210,c_limit,fl_progressive/assets/images/productimage/2021/5/19/0ef44f9b-61ef-4212-a56c-a1a08eebaec41621425364224-1.jpg" alt="" class="img-fluid">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="cart--content--box-text">
                                            <div class="cart--text">
                                                <div>
                                                    <div class="item--brand--text">
                                                        <div class="product-detail pl-0">
                                                            <h5 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h5>
                                                            <div class="product-features">
                                                                <p class="item-name">T-Shirt</p>
                                                                <p class="item-price">
                                                                    <span class="price_number"><strong>₹1999</strong></span>
                                                                    <span class="delete_price_number"><del>₹1999</del></span>
                                                                </p>
                                                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="cart-quantiy-cont">
                                                            <div class="d-flex">
                                                                <div class="quant_crt_item">
                                                                   <!--  <div class="qty_flex">
                                                                        <div class="quantity_name fw-700">Qty :</div>
                                                                        <div class="quantity-control" data-quantity="">
                                                                            <button class="quantity-btn" data-quantity-minus=""><svg viewBox="0 0 409.6 409.6">
                                                                                <g>
                                                                                  <g>
                                                                                    <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </button>
                                                                            <input type="number" class="quantity-input cart-grp-qty" data-quantity-target="" value="1" step="1" min="1" max="" name="quantity">
                                                                            <button class="quantity-btn" data-quantity-plus=""><svg viewBox="0 0 426.66667 426.66667">
                                                                                <path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" /></svg>
                                                                            </button>
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="product_listing_count select_size_cart">
                                                                        <div class="">
                                                                            <div class="quantity_name fw-700">Qty :</div>
                                                                            <div class="selectBox">
                                                                                <select class="form-select cart-grp-qty" aria-label="Default select example">
                                                                                  <option selected="">0</option>
                                                                                  <option value="1">1</option>
                                                                                  <option value="2">2</option>
                                                                                  <option value="3">3</option>
                                                                                  <option value="3">4</option>
                                                                                  <option value="2">5</option>
                                                                                  <option value="3">6</option>
                                                                                  <option value="3">7</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product_listing_count select_size_cart">
                                                                        <div class="">
                                                                            <div class="quantity_name fw-700">Size :</div>
                                                                            <div class="selectBox">
                                                                                <select class="form-select cart-grp-qty" aria-label="Default select example">
                                                                                  <option selected="">40</option>
                                                                                  <option value="1">42</option>
                                                                                  <option value="2">44</option>
                                                                                  <option value="3">46</option>
                                                                                  <option value="3">48</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="return-block">
                                                            <div class="d-flex_return d-flex">
                                                                <span class="return-icon">
                                                                    <!--?xml version="1.0" ?--><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,4a8,8,0,0,1,4.985,1.758H15.242a1,1,0,0,0,0,2h4a1,1,0,0,0,1-1v-4a1,1,0,1,0-2,0V4.206A9.983,9.983,0,0,0,2,12a1,1,0,0,0,2,0A8.009,8.009,0,0,1,12,4Z"></path><path d="M21,11a1,1,0,0,0-1,1A7.986,7.986,0,0,1,7.015,18.242H8.757a1,1,0,1,0,0-2h-4a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V19.794A9.984,9.984,0,0,0,22,12,1,1,0,0,0,21,11Z"></path></svg>
                                                                </span>
                                                                <span class="ret-text">
                                                                    <strong>7 days</strong> return available
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item--footer-cart">
                                        <div class="item-footer-list d-flex">
                                            <div class="item--footer_list-block br-right">
                                                <i class="fa-solid fa-trash-can"></i> Remove
                                            </div>
                                            <div class="item--footer_list-block">
                                                <i class="fa-solid fa-heart"></i> Move to wishlist
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item--cart-block">
                                    <div class="item--box-cart">
                                        <div class="cart--box--image">

                                            <div class="cart--prdct-checkbox">
                                                <input type="checkbox" id="cart-prdct-check14">
                                                <label for="cart-prdct-check14">
                                                    <span class="check_mark_icon"></span>
                                                </label>
                                            </div>

                                            <a href="">
                                                <div class="cart_prd-image" style="width: 130px; height: 174px;">
                                                    <img src="https://assets.myntassets.com/f_webp,dpr_1.0,q_60,w_210,c_limit,fl_progressive/assets/images/productimage/2021/5/19/0ef44f9b-61ef-4212-a56c-a1a08eebaec41621425364224-1.jpg" alt="" class="img-fluid">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="cart--content--box-text">
                                            <div class="cart--text">
                                                <div>
                                                    <div class="item--brand--text">
                                                        <div class="product-detail pl-0">
                                                            <h5 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h5>
                                                            <div class="product-features">
                                                                <p class="item-name">T-Shirt</p>
                                                                <p class="item-price">
                                                                    <span class="price_number"><strong>₹1999</strong></span>
                                                                    <span class="delete_price_number"><del>₹1999</del></span>
                                                                </p>
                                                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="cart-quantiy-cont">
                                                            <div class="d-flex">
                                                                <div class="quant_crt_item">
                                                                   <!--  <div class="qty_flex">
                                                                        <div class="quantity_name fw-700">Qty :</div>
                                                                        <div class="quantity-control" data-quantity="">
                                                                            <button class="quantity-btn" data-quantity-minus=""><svg viewBox="0 0 409.6 409.6">
                                                                                <g>
                                                                                  <g>
                                                                                    <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </button>
                                                                            <input type="number" class="quantity-input cart-grp-qty" data-quantity-target="" value="1" step="1" min="1" max="" name="quantity">
                                                                            <button class="quantity-btn" data-quantity-plus=""><svg viewBox="0 0 426.66667 426.66667">
                                                                                <path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" /></svg>
                                                                            </button>
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="product_listing_count select_size_cart">
                                                                        <div class="">
                                                                            <div class="quantity_name fw-700">Qty :</div>
                                                                            <div class="selectBox">
                                                                                <select class="form-select cart-grp-qty" aria-label="Default select example">
                                                                                  <option selected="">0</option>
                                                                                  <option value="1">1</option>
                                                                                  <option value="2">2</option>
                                                                                  <option value="3">3</option>
                                                                                  <option value="3">4</option>
                                                                                  <option value="2">5</option>
                                                                                  <option value="3">6</option>
                                                                                  <option value="3">7</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product_listing_count select_size_cart">
                                                                        <div class="">
                                                                            <div class="quantity_name fw-700">Size :</div>
                                                                            <div class="selectBox">
                                                                                <select class="form-select cart-grp-qty" aria-label="Default select example">
                                                                                  <option selected="">40</option>
                                                                                  <option value="1">42</option>
                                                                                  <option value="2">44</option>
                                                                                  <option value="3">46</option>
                                                                                  <option value="3">48</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="return-block">
                                                            <div class="d-flex_return d-flex">
                                                                <span class="return-icon">
                                                                    <!--?xml version="1.0" ?--><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,4a8,8,0,0,1,4.985,1.758H15.242a1,1,0,0,0,0,2h4a1,1,0,0,0,1-1v-4a1,1,0,1,0-2,0V4.206A9.983,9.983,0,0,0,2,12a1,1,0,0,0,2,0A8.009,8.009,0,0,1,12,4Z"></path><path d="M21,11a1,1,0,0,0-1,1A7.986,7.986,0,0,1,7.015,18.242H8.757a1,1,0,1,0,0-2h-4a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V19.794A9.984,9.984,0,0,0,22,12,1,1,0,0,0,21,11Z"></path></svg>
                                                                </span>
                                                                <span class="ret-text">
                                                                    <strong>7 days</strong> return available
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item--footer-cart">
                                        <div class="item-footer-list d-flex">
                                            <div class="item--footer_list-block br-right">
                                                <i class="fa-solid fa-trash-can"></i> Remove
                                            </div>
                                            <div class="item--footer_list-block">
                                                <i class="fa-solid fa-heart"></i> Move to wishlist
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item--cart-block">
                                    <div class="item--box-cart">
                                        <div class="cart--box--image">

                                            <div class="cart--prdct-checkbox">
                                                <input type="checkbox" id="cart-prdct-check13">
                                                <label for="cart-prdct-check13">
                                                    <span class="check_mark_icon"></span>
                                                </label>
                                            </div>

                                            <a href="">
                                                <div class="cart_prd-image" style="width: 130px; height: 174px;">
                                                    <img src="https://assets.myntassets.com/f_webp,dpr_1.0,q_60,w_210,c_limit,fl_progressive/assets/images/productimage/2021/5/19/0ef44f9b-61ef-4212-a56c-a1a08eebaec41621425364224-1.jpg" alt="" class="img-fluid">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="cart--content--box-text">
                                            <div class="cart--text">
                                                <div>
                                                    <div class="item--brand--text">
                                                        <div class="product-detail pl-0">
                                                            <h5 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h5>
                                                            <div class="product-features">
                                                                <p class="item-name">T-Shirt</p>
                                                                <p class="item-price">
                                                                    <span class="price_number"><strong>₹1999</strong></span>
                                                                    <span class="delete_price_number"><del>₹1999</del></span>
                                                                </p>
                                                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="cart-quantiy-cont">
                                                            <div class="d-flex">
                                                                <div class="quant_crt_item">
                                                                   <!--  <div class="qty_flex">
                                                                        <div class="quantity_name fw-700">Qty :</div>
                                                                        <div class="quantity-control" data-quantity="">
                                                                            <button class="quantity-btn" data-quantity-minus=""><svg viewBox="0 0 409.6 409.6">
                                                                                <g>
                                                                                  <g>
                                                                                    <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </button>
                                                                            <input type="number" class="quantity-input cart-grp-qty" data-quantity-target="" value="1" step="1" min="1" max="" name="quantity">
                                                                            <button class="quantity-btn" data-quantity-plus=""><svg viewBox="0 0 426.66667 426.66667">
                                                                                <path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" /></svg>
                                                                            </button>
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="product_listing_count select_size_cart">
                                                                        <div class="">
                                                                            <div class="quantity_name fw-700">Qty :</div>
                                                                            <div class="selectBox">
                                                                                <select class="form-select cart-grp-qty" aria-label="Default select example">
                                                                                  <option selected="">0</option>
                                                                                  <option value="1">1</option>
                                                                                  <option value="2">2</option>
                                                                                  <option value="3">3</option>
                                                                                  <option value="3">4</option>
                                                                                  <option value="2">5</option>
                                                                                  <option value="3">6</option>
                                                                                  <option value="3">7</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product_listing_count select_size_cart">
                                                                        <div class="">
                                                                            <div class="quantity_name fw-700">Size :</div>
                                                                            <div class="selectBox">
                                                                                <select class="form-select cart-grp-qty" aria-label="Default select example">
                                                                                  <option selected="">40</option>
                                                                                  <option value="1">42</option>
                                                                                  <option value="2">44</option>
                                                                                  <option value="3">46</option>
                                                                                  <option value="3">48</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="return-block">
                                                            <div class="d-flex_return d-flex">
                                                                <span class="return-icon">
                                                                    <!--?xml version="1.0" ?--><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,4a8,8,0,0,1,4.985,1.758H15.242a1,1,0,0,0,0,2h4a1,1,0,0,0,1-1v-4a1,1,0,1,0-2,0V4.206A9.983,9.983,0,0,0,2,12a1,1,0,0,0,2,0A8.009,8.009,0,0,1,12,4Z"></path><path d="M21,11a1,1,0,0,0-1,1A7.986,7.986,0,0,1,7.015,18.242H8.757a1,1,0,1,0,0-2h-4a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V19.794A9.984,9.984,0,0,0,22,12,1,1,0,0,0,21,11Z"></path></svg>
                                                                </span>
                                                                <span class="ret-text">
                                                                    <strong>7 days</strong> return available
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item--footer-cart">
                                        <div class="item-footer-list d-flex">
                                            <div class="item--footer_list-block br-right">
                                                <i class="fa-solid fa-trash-can"></i> Remove
                                            </div>
                                            <div class="item--footer_list-block">
                                                <i class="fa-solid fa-heart"></i> Move to wishlist
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item--cart-block">
                                    <div class="item--box-cart">
                                        <div class="cart--box--image">

                                            <div class="cart--prdct-checkbox">
                                                <input type="checkbox" id="cart-prdct-check11">
                                                <label for="cart-prdct-check11">
                                                    <span class="check_mark_icon"></span>
                                                </label>
                                            </div>

                                            <a href="">
                                                <div class="cart_prd-image" style="width: 130px; height: 174px;">
                                                    <img src="https://assets.myntassets.com/f_webp,dpr_1.0,q_60,w_210,c_limit,fl_progressive/assets/images/productimage/2021/5/19/0ef44f9b-61ef-4212-a56c-a1a08eebaec41621425364224-1.jpg" alt="" class="img-fluid">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="cart--content--box-text">
                                            <div class="cart--text">
                                                <div>
                                                    <div class="item--brand--text">
                                                        <div class="product-detail pl-0">
                                                            <h5 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h5>
                                                            <div class="product-features">
                                                                <p class="item-name">T-Shirt</p>
                                                                <p class="item-price">
                                                                    <span class="price_number"><strong>₹1999</strong></span>
                                                                    <span class="delete_price_number"><del>₹1999</del></span>
                                                                </p>
                                                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="cart-quantiy-cont">
                                                            <div class="d-flex">
                                                                <div class="quant_crt_item">
                                                                   <!--  <div class="qty_flex">
                                                                        <div class="quantity_name fw-700">Qty :</div>
                                                                        <div class="quantity-control" data-quantity="">
                                                                            <button class="quantity-btn" data-quantity-minus=""><svg viewBox="0 0 409.6 409.6">
                                                                                <g>
                                                                                  <g>
                                                                                    <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </button>
                                                                            <input type="number" class="quantity-input cart-grp-qty" data-quantity-target="" value="1" step="1" min="1" max="" name="quantity">
                                                                            <button class="quantity-btn" data-quantity-plus=""><svg viewBox="0 0 426.66667 426.66667">
                                                                                <path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" /></svg>
                                                                            </button>
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="product_listing_count select_size_cart">
                                                                        <div class="">
                                                                            <div class="quantity_name fw-700">Qty :</div>
                                                                            <div class="selectBox">
                                                                                <select class="form-select cart-grp-qty" aria-label="Default select example">
                                                                                  <option selected="">0</option>
                                                                                  <option value="1">1</option>
                                                                                  <option value="2">2</option>
                                                                                  <option value="3">3</option>
                                                                                  <option value="3">4</option>
                                                                                  <option value="2">5</option>
                                                                                  <option value="3">6</option>
                                                                                  <option value="3">7</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product_listing_count select_size_cart">
                                                                        <div class="">
                                                                            <div class="quantity_name fw-700">Size :</div>
                                                                            <div class="selectBox">
                                                                                <select class="form-select cart-grp-qty" aria-label="Default select example">
                                                                                  <option selected="">40</option>
                                                                                  <option value="1">42</option>
                                                                                  <option value="2">44</option>
                                                                                  <option value="3">46</option>
                                                                                  <option value="3">48</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="return-block">
                                                            <div class="d-flex_return d-flex">
                                                                <span class="return-icon">
                                                                    <!--?xml version="1.0" ?--><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,4a8,8,0,0,1,4.985,1.758H15.242a1,1,0,0,0,0,2h4a1,1,0,0,0,1-1v-4a1,1,0,1,0-2,0V4.206A9.983,9.983,0,0,0,2,12a1,1,0,0,0,2,0A8.009,8.009,0,0,1,12,4Z"></path><path d="M21,11a1,1,0,0,0-1,1A7.986,7.986,0,0,1,7.015,18.242H8.757a1,1,0,1,0,0-2h-4a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V19.794A9.984,9.984,0,0,0,22,12,1,1,0,0,0,21,11Z"></path></svg>
                                                                </span>
                                                                <span class="ret-text">
                                                                    <strong>7 days</strong> return available
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item--footer-cart">
                                        <div class="item-footer-list d-flex">
                                            <div class="item--footer_list-block br-right">
                                                <i class="fa-solid fa-trash-can"></i> Remove
                                            </div>
                                            <div class="item--footer_list-block">
                                                <i class="fa-solid fa-heart"></i> Move to wishlist
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right-cart-side">
                            <div class="right-widget">
                                <div class="accordion">
                                    <div class="accordion-item">
                                      <div class="accordion-item-header">
                                        <span class="accordion-item-header-title">
                                            <span class="wid-icon">
                                            <!--?xml version="1.0" ?--><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title></title><g id="Coupon"><path d="M456,128.8008H175.4922a7.9979,7.9979,0,0,0-8,8,11.8672,11.8672,0,0,1-23.7344,0,7.9979,7.9979,0,0,0-8-8H56a7.9979,7.9979,0,0,0-8,8V375.1992a7.9979,7.9979,0,0,0,8,8h79.7578a7.9979,7.9979,0,0,0,8-8,11.8672,11.8672,0,1,1,23.7344,0,7.9979,7.9979,0,0,0,8,8H456a7.9979,7.9979,0,0,0,8-8V136.8008A7.9979,7.9979,0,0,0,456,128.8008Zm-8,238.3984H182.32a27.8687,27.8687,0,0,0-53.3906,0H64V144.8008h64.93a27.8687,27.8687,0,0,0,53.3906,0H448Z"></path><path d="M271.9063,249.6133a28.8036,28.8036,0,0,0,20.375-49.1719h-.004c-10.8906-10.8906-29.871-10.8906-40.746,0a28.7969,28.7969,0,0,0,20.375,49.1719Zm-9.0586-37.8594a12.7925,12.7925,0,0,1,18.1132,0h.0039a12.8165,12.8165,0,1,1-18.1171,0Z"></path><path d="M362.6523,270.8164c-10.8828-10.8906-29.8632-10.8906-40.746,0a28.8125,28.8125,0,1,0,40.75,0Zm-11.3125,29.43a13.1152,13.1152,0,0,1-18.121,0,12.8145,12.8145,0,1,1,18.121,0Z"></path><path d="M251.0352,312.0586a7.9972,7.9972,0,0,0,11.3125,0L363.1484,211.2539a7.9991,7.9991,0,0,0-11.3125-11.3125L251.0352,300.7461A7.9971,7.9971,0,0,0,251.0352,312.0586Z"></path><path d="M155.625,182.02a7.9979,7.9979,0,0,0-8,8v18.4453a8,8,0,0,0,16,0V190.02A7.9979,7.9979,0,0,0,155.625,182.02Z"></path><path d="M155.625,238.7773a7.9979,7.9979,0,0,0-8,8v18.4454a8,8,0,0,0,16,0V246.7773A7.9979,7.9979,0,0,0,155.625,238.7773Z"></path><path d="M155.625,295.5352a7.9979,7.9979,0,0,0-8,8v18.4531a8,8,0,0,0,16,0V303.5352A7.9979,7.9979,0,0,0,155.625,295.5352Z"></path></g></svg>
                                        </span>
                                            Apply Coin
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down accordion-item-header-icon">
                                          <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                      </div>
                                      <div class="accordion-item-description-wrapper">
                                        <div class="accordion-item-description">
                                          <div class="coupon-block inner_accordian">
                                            <div class="d-flex coin_reltv">
                                                <div class="coin_section">
                                                    <img src="images/coin_in.png" width="20px" class="img-fluid" alt="">
                                                    <div class="coin_name">
                                                        <h5>150.00</h5>
                                                        <p>In hand</p>
                                                    </div>
                                                </div>
                                                <div class="redeem_coin_box">
                                                    <input type="text" class="form-control" placeholder="Enter Coin Here">
                                                </div>
                                                <!-- <input type="text" class="form-control" placeholder="Enter Coin Here">
                                                <button class="">Apply</button> -->
                                            </div>
                                            <div class="apply_coin_btn">
                                                    <button class="">Apply</button>
                                                </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <div class="accordion-item-header">
                                        <span class="accordion-item-header-title">
                                            <span class="wid-icon">
                                            <!--?xml version="1.0" ?--><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title></title><g id="Coupon"><path d="M456,128.8008H175.4922a7.9979,7.9979,0,0,0-8,8,11.8672,11.8672,0,0,1-23.7344,0,7.9979,7.9979,0,0,0-8-8H56a7.9979,7.9979,0,0,0-8,8V375.1992a7.9979,7.9979,0,0,0,8,8h79.7578a7.9979,7.9979,0,0,0,8-8,11.8672,11.8672,0,1,1,23.7344,0,7.9979,7.9979,0,0,0,8,8H456a7.9979,7.9979,0,0,0,8-8V136.8008A7.9979,7.9979,0,0,0,456,128.8008Zm-8,238.3984H182.32a27.8687,27.8687,0,0,0-53.3906,0H64V144.8008h64.93a27.8687,27.8687,0,0,0,53.3906,0H448Z"></path><path d="M271.9063,249.6133a28.8036,28.8036,0,0,0,20.375-49.1719h-.004c-10.8906-10.8906-29.871-10.8906-40.746,0a28.7969,28.7969,0,0,0,20.375,49.1719Zm-9.0586-37.8594a12.7925,12.7925,0,0,1,18.1132,0h.0039a12.8165,12.8165,0,1,1-18.1171,0Z"></path><path d="M362.6523,270.8164c-10.8828-10.8906-29.8632-10.8906-40.746,0a28.8125,28.8125,0,1,0,40.75,0Zm-11.3125,29.43a13.1152,13.1152,0,0,1-18.121,0,12.8145,12.8145,0,1,1,18.121,0Z"></path><path d="M251.0352,312.0586a7.9972,7.9972,0,0,0,11.3125,0L363.1484,211.2539a7.9991,7.9991,0,0,0-11.3125-11.3125L251.0352,300.7461A7.9971,7.9971,0,0,0,251.0352,312.0586Z"></path><path d="M155.625,182.02a7.9979,7.9979,0,0,0-8,8v18.4453a8,8,0,0,0,16,0V190.02A7.9979,7.9979,0,0,0,155.625,182.02Z"></path><path d="M155.625,238.7773a7.9979,7.9979,0,0,0-8,8v18.4454a8,8,0,0,0,16,0V246.7773A7.9979,7.9979,0,0,0,155.625,238.7773Z"></path><path d="M155.625,295.5352a7.9979,7.9979,0,0,0-8,8v18.4531a8,8,0,0,0,16,0V303.5352A7.9979,7.9979,0,0,0,155.625,295.5352Z"></path></g></svg>
                                        </span>
                                            Apply Coupon
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down accordion-item-header-icon">
                                          <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                      </div>
                                      <div class="accordion-item-description-wrapper">
                                        <div class="accordion-item-description">
                                          <div class="coupon-block inner_accordian">
                                            <div class="d-flex coupon_reltv">
                                                <input type="text" class="form-control" placeholder="Enter Code Here">
                                                <button class="">Apply</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <div class="accordion-item-header">
                                        <span class="accordion-item-header-title">
                                            <span class="wid-icon">
                                            <!--?xml version="1.0" ?--><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title></title><g id="Coupon"><path d="M456,128.8008H175.4922a7.9979,7.9979,0,0,0-8,8,11.8672,11.8672,0,0,1-23.7344,0,7.9979,7.9979,0,0,0-8-8H56a7.9979,7.9979,0,0,0-8,8V375.1992a7.9979,7.9979,0,0,0,8,8h79.7578a7.9979,7.9979,0,0,0,8-8,11.8672,11.8672,0,1,1,23.7344,0,7.9979,7.9979,0,0,0,8,8H456a7.9979,7.9979,0,0,0,8-8V136.8008A7.9979,7.9979,0,0,0,456,128.8008Zm-8,238.3984H182.32a27.8687,27.8687,0,0,0-53.3906,0H64V144.8008h64.93a27.8687,27.8687,0,0,0,53.3906,0H448Z"></path><path d="M271.9063,249.6133a28.8036,28.8036,0,0,0,20.375-49.1719h-.004c-10.8906-10.8906-29.871-10.8906-40.746,0a28.7969,28.7969,0,0,0,20.375,49.1719Zm-9.0586-37.8594a12.7925,12.7925,0,0,1,18.1132,0h.0039a12.8165,12.8165,0,1,1-18.1171,0Z"></path><path d="M362.6523,270.8164c-10.8828-10.8906-29.8632-10.8906-40.746,0a28.8125,28.8125,0,1,0,40.75,0Zm-11.3125,29.43a13.1152,13.1152,0,0,1-18.121,0,12.8145,12.8145,0,1,1,18.121,0Z"></path><path d="M251.0352,312.0586a7.9972,7.9972,0,0,0,11.3125,0L363.1484,211.2539a7.9991,7.9991,0,0,0-11.3125-11.3125L251.0352,300.7461A7.9971,7.9971,0,0,0,251.0352,312.0586Z"></path><path d="M155.625,182.02a7.9979,7.9979,0,0,0-8,8v18.4453a8,8,0,0,0,16,0V190.02A7.9979,7.9979,0,0,0,155.625,182.02Z"></path><path d="M155.625,238.7773a7.9979,7.9979,0,0,0-8,8v18.4454a8,8,0,0,0,16,0V246.7773A7.9979,7.9979,0,0,0,155.625,238.7773Z"></path><path d="M155.625,295.5352a7.9979,7.9979,0,0,0-8,8v18.4531a8,8,0,0,0,16,0V303.5352A7.9979,7.9979,0,0,0,155.625,295.5352Z"></path></g></svg>
                                        </span>
                                            Gift Voucher
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down accordion-item-header-icon">
                                          <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                      </div>

                                      <div class="accordion-item-description-wrapper">
                                        <div class="accordion-item-description">
                                          <div class="coupon-block inner_accordian">
                                            <div class="d-flex coupon_reltv">
                                                <input type="text" class="form-control" placeholder="Enter Code Here">
                                                <button class="">Apply</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <div class="accordion-item-header">
                                        <span class="accordion-item-header-title">
                                            <span class="wid-icon gift-icon">
                                                <i class="fa fa-shipping-fast"></i>
                                            </span>
                                            Free Shipping (₹25)</span>
                                        <div class="gift-checkbox">
                                            <input type="checkbox" id="shirt1">
                                            <label for="shirt1">
                                                <span class="check_mark_icon"></span>
                                                 </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <div class="accordion-item-header">
                                        <span class="accordion-item-header-title">
                                            <span class="wid-icon gift-icon">
                                                <i class="fa-solid fa-gift"></i>
                                            </span>
                                        Gift Wrap (₹25)</span>
                                        <div class="gift-checkbox">
                                            <input type="checkbox" id="gift">
                                            <label for="gift">
                                                <span class="check_mark_icon"></span>
                                                 </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="billing-details" id="price-listing">
                                <h5><span>Price Details</span><span class="fl-r">(1 Item)</span></h5>
                                <div class="price_listing-list">
                                    <div class="price-list-row">
                                        <span class="">Total MRP</span>
                                        <span class="price-list-val">₹ 1712.38</span>
                                    </div>
                                    <div class="price-list-row">
                                        <span class="">Discount on MRP</span>
                                        <span class="price-list-val">-₹ 1200</span>
                                    </div>
                                    <div class="price-list-row">
                                        <span class="">Coupon Discount</span>
                                        <span class="price-list-val">₹ 50</span>
                                    </div>
                                    <div class="price-list-row">
                                        <span class="">Shipping Fee</span>
                                        <span class="price-list-val">₹ 20</span>
                                    </div>
                                    <div class="price-list-row">
                                        <span class="">GST</span>
                                        <span class="price-list-val">₹ 85</span>
                                    </div>
                                    <div class="price-list-row btop">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4>Total Amount</h4>
                                            <h4 class="final-price-list-val">₹ 1850</h4>
                                        </div>
                                    </div>
                                    <button class="place-order" onclick="location.href='{{  route(\App\Constants\RouteNames::CHECKOUT)  }}'">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@include('website.footer')