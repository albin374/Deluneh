@include('website.header')

@include('website.nav')
        <!-- -----------------floating Menu Mobile----------------- -->

        <!-- <div class="highlated-sale-banner banner-highlated">
            <div class="container">
                <div class="row owl-carousel" id="top-carousel-off">
                    <div class="sale-content d-flex align-items-center justify-content-center">
                        <p>SALE</p>
                        <div class="discount text-uppercase">Up to 60% off</div>
                        <a href="" class="text-uppercase">Shop Now</a>
                    </div>
                    <div class="sale-content d-flex align-items-center justify-content-center">
                        <p>SALE</p>
                        <div class="discount text-uppercase">Up to 50% off</div>
                        <a href="" class="text-uppercase">Shop Now</a>
                    </div>
                    <div class="sale-content d-flex align-items-center justify-content-center">
                        <p>SALE</p>
                        <div class="discount text-uppercase">Up to 30% off</div>
                        <a href="" class="text-uppercase">Shop Now</a>
                    </div>
                </div>
            </div>
        </div> -->
       <style>
            
            @media (max-width: 767px) {
                .accordion-wrapper {
                    position: relative;
                    margin-bottom: 48px;
                    padding-bottom: 13px;
                }
            }
            #home-none{
                display:none!important;
            }
       </style>
        <section class="slider-banner d-lg-block d-none">
            <div class="banner-wrapper">
                <div class="swiper-container">
                    <div class="swiper-wrapper mb-20">
                        @if(isset($banners) && $banners->count() > 0)
                            @foreach($banners as $banner)
                                <div class="swiper-slide" @if($banner->link) onclick="location.href='{{ $banner->link }}'" style="cursor: pointer;" @endif>
                                    <img src="{{ Storage::url($banner->image) }}" class="img-fluid desktop-slide" alt="Banner">
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-slide">
                                <img src="/images/banner1.webp" class="img-fluid desktop-slide" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/banner2.webp" class="img-fluid desktop-slide" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/b3.jpg" class="img-fluid desktop-slide" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/b4.jpg" class="img-fluid desktop-slide" alt="">
                            </div>
                        @endif
                    </div>
                    <div class="swiper_nav">
                        <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                        <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <section class="slider-banner d-block d-lg-none position-relative overflow-hidden">
            <div class="inset-x-0 top-0 z-10 h-[220px] bg-gradient-to-b from-black/50 to-transparent text-white px-4">
                <div class="content-overlay">
                    <div class="flex justify-center items-center mt-6 pad-left pad-right">
                        <ul class="flex justify-between items-center my-nav-width text-lg font-medium text-center">
                            <li class="flex-1"><a href="/men" class="block py-2 is_active">MEN</a></li>
                            <li class="flex-1 border-x border-white"><a href="/woman" class="block py-2">WOMEN</a></li>
                            <li class="flex-1"><a href="/kids" class="block py-2">KIDS</a></li>
                            <!-- <li class="flex-1"><a href="#" class="block py-2">KIDS</a></li> -->
                        </ul>
                    </div>
                    <div class="relative flex border border-white rounded-lg search mt-50">
                        <span class="left-3 top-2.5 text-gray-500">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g stroke="white" stroke-linecap="round" stroke-linejoin="round" clip-path="url(#a)">
                                    <path d="M8.866 16.59a7.723 7.723 0 1 0 0-15.447 7.723 7.723 0 0 0 0 15.446ZM22.878 22.768l-8.605-8.495"></path>
                                </g>
                                <defs>
                                    <clipPath id="a">
                                        <path fill="white" d="M0 0h24v24H0z"></path>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <input type="text" class="w-full focus-visible:outline-none search-box-mobile" placeholder='Search for your next look..'>
                    </div>
                </div>
            </div>
            <div class="absolute inset-0 z-10"></div>
            <div class="banner-wrapper">
                <div class="swiper mobile-swiper">
                    <div class="swiper-wrapper mb-10">
                        @if(isset($banners) && $banners->count() > 0)
                            @foreach($banners as $banner)
                                <div class="swiper-slide" @if($banner->link) onclick="location.href='{{ $banner->link }}'" style="cursor: pointer;" @endif>
                                    <img src="{{ Storage::url($banner->image) }}" class="img-fluid desktop-slide" alt="Banner">
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-slide">
                                <img src="/images/men1.jpg" class="img-fluid desktop-slide" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/women1.jpg" class="img-fluid desktop-slide" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://prod-img.thesouledstore.com/public/theSoul/storage/mobile-cms-media-prod/banner-images/appbanner_rkJYre7.jpg?w=768&dpr=2" class="img-fluid desktop-slide" alt="">
                            </div>
                            <!-- <div class="swiper-slide">
                                <img src="/images/mob-img1.avif" class="img-fluid desktop-slide" alt="">
                            </div> -->
                        @endif
                    </div>
                    <div class="swiper_nav">
                        <div class="swiper-button-prev mobile-prev"><i class="fa-solid fa-chevron-left"></i></div>
                        <div class="swiper-button-next mobile-next"><i class="fa-solid fa-chevron-right"></i></div>
                    </div>
                    <div class="swiper-pagination mobile-pagination"></div>
                </div>
            </div>
        </section>

        <section class="product-slider-section mt-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-txt align-items-center mb-20">
                            <h3 class="fw-700 text-uppercase text-center">New Arrivals</h3>
                        </div>

                        <!-- Swiper Container -->
                        <div class="swiper product-swiper position-relative">
                            <div class="swiper-wrapper mb-2">
                                @for($i = 0; $i < 10; $i++)
                                    <div class="swiper-slide">
                                    <div class="product-card d-lg-none d-block">
                                        <div class="card image-hover">
                                            <div class="d-flex product-badge">
                                                <div class="d-flex align-items-center badge-background">
                                                    <span class="badge-text"> BUY 2 FOR 999</span>
                                                </div>
                                            </div>
                                            <div class="swiper product-slide-swiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="https://images.bewakoof.com/t540/men-s-beige-embroidered-oversized-shirt-685448-1765191907-1.jpg" class="img-fluid desktop-slide" alt="">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://images.bewakoof.com/t540/men-s-blue-all-over-printed-oversized-shirt-685482-1764076957-1.jpg" class="img-fluid desktop-slide" alt="">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://images.bewakoof.com/t540/men-s-white-cotton-linen-shirt-677615-1753957743-1.jpg" class="img-fluid desktop-slide" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination product-slide-pagination d-block d-lg-none"></div>
                                            </div>
                                            <!-- <img src="/images/f1.webp" class="card-img-top first-img" alt="Product {{ $i + 1 }}"> -->
                                            <!-- <img src="/images/f2.webp" class="card-img-top second-img" alt="Product {{ $i + 1 }}"> -->
                        <!--                    <div class="product-detail p-1 product-title">-->
                        <!--                        <div class="d-flex justify-content-between align-items-center">-->
                        <!--                            <div>-->
                        <!--                                <h5 class="text-left product-title width-small" style="font-size: 12px;border:none;">Cotton Linen: Coral Peach</h5>-->
                        <!--                            </div>-->
                        <!--                            <div class="wishlist-icon">-->
                        <!--                                     <svg width="18" height="18" viewBox="0 0 24 24" fill="none">-->
                        <!--    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5-->
                        <!--           2 5.42 4.42 3 7.5 3-->
                        <!--           c1.74 0 3.41 0.81 4.5 2.09-->
                        <!--           C13.09 3.81 14.76 3 16.5 3-->
                        <!--           19.58 3 22 5.42 22 8.5-->
                        <!--           c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>-->
                        <!--</svg>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                        <div>-->
                        <!--                        </div>-->
                        <!--                        <div>-->
                        <!--                             <span style="font-size: 10px;">Men Utility Shirts</span>-->
                        <!--                        </div>-->
                        <!--                        <p class="item-price">-->
                        <!--                            <span class="offer_price_number">₹599</span>-->
                                                    <!--<span class="price_number">₹1599</span>-->
                                                    <!--<span class="offer">66% OFF</span>-->
                        <!--                        </p>-->
                        <!--                    </div>-->
                                            <div class="product-detail p-2" style="line-height:22px;">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                                    </div>
                                                    <div class="wishlist-icon">
                                                        <svg width="24" height="24" fill="none">
                                                            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                            <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div>
                                                </div>
                                                <div>
                                                     <span style="font-size: 11px;">Men Utility Shirts</span>
                                                </div>
                                                <p class="item-price">
                                                    <span class="offer_price_number">₹599</span>
                                                    <span class="price_number">₹1599</span>
                                                    <span class="offer">66% OFF</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card d-lg-block d-none">
                                        <div class="card image-hover">
                                            <img src="/images/f3.webp" class="card-img-top first-img" alt="Product {{ $i + 1 }}">
                                            <img src="/images/f2.webp" class="card-img-top second-img" alt="Product {{ $i + 1 }}">
                                            <div class="product-detail p-2">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                                        <span style="font-size: 11px;">Men Utility Shirts</span>
                                                    </div>
                                                    <div class="wishlist-icon">
                                                        <svg width="24" height="24" fill="none">
                                                            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                            <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <p class="item-price">
                                                    <span class="offer_price_number">₹599</span>
                                                    <span class="price_number">₹1599</span>
                                                    <span class="offer">66% OFF</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <!-- <div class="swiper-slide">
                                <div class="product-card">
                                    <div class="card">
                                        <img src="/images/f2.webp" class="card-img-top" alt="Product {{ $i + 1 }}">
                                        <div class="product-detail p-2">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h3 class="product-title fw-700">DeLuneh@ {{ $i + 1 }}</h3>
                                                    <p class="item-name">Men's Fog Green Things Typography Oversized T-shirt</p>
                                                </div>
                                                <div class="wishlist-icon">
                                                    <svg width="24" height="24" fill="none">
                                                            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                            <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                                        </svg>
                                                </div>
                                            </div>
                                            <p class="item-price">
                                                <span class="offer_price_number">₹599</span>
                                                <span class="price_number">₹1599</span>
                                                <span class="offer">66% OFF</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="swiper-slide">
                                <div class="product-card">
                                    <div class="card">
                                        <img src="/images/f3.webp" class="card-img-top" alt="Product {{ $i + 1 }}">
                                        <div class="product-detail p-2">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h3 class="product-title fw-700">DeLuneh@ {{ $i + 1 }}</h3>
                                                    <p class="item-name">Men's Fog Green Things Typography Oversized T-shirt</p>
                                                </div>
                                                <div class="wishlist-icon">
                                                    <svg width="24" height="24" fill="none">
                                                            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                            <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                                        </svg>
                                                </div>
                                            </div>
                                            <p class="item-price">
                                                <span class="offer_price_number">₹599</span>
                                                <span class="price_number">₹1599</span>
                                                <span class="offer">66% OFF</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            @endfor
                        </div>

                        <!-- Navigation Buttons -->
                        <div class="product-pagination flex justify-center"></div>
                        <!-- <div class="swiper-button-custom product-button-prev"><i class="fa fa-chevron-left"></i></div> -->
                        <!-- <div class="swiper-button-custom product-button-next"><i class="fa fa-chevron-right"></i></div> -->
                    </div>
                    <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                        <a href="#" class="see_all" style="font-size:10px;">Explore All</a>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="categories-wrap mt-3">
            <div class="container-fluid  container-wrapper">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">DL Categories</h3>
                </div>
                <div class="grid grid-cols-2 gap-2 sm:grid-cols-3 lg:grid-cols-4 lg:gap-2">
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/category7.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/category2.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/category3.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/category8.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/category5.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/category6.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/category1.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/category4.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="highlated-sale top-highlated mt-3">
            <div class="container">
                <div class="row">
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="home-strip-text">HOMEGROWN INDIAN BRAND</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Shop by fandom -->
        <section class="section-block mt-3">
            <div class="container-fluid  container-wrapper">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">Shop By Fandom</h3>
                </div>
                <div class="category-row">
                    <div class="row carousel1" id="shop-fandom">
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/fandom1.webp" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/fandom2.webp" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/fandom3.webp" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/fandom4.webp" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/fandom5.webp" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/fandom6.webp" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                    <a href="#" class="see_all" style="font-size:10px;">Explore All</a>
                </div>
            </div>
        </section>

        <!-- end -->

        <!-- Shop by fandom -->
        <section class="section-block mt-3">
            <div class="container-fluid  container-wrapper">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">Shop By Fandom</h3>
                </div>
                <div class="category-row">
                    <div class="row carousel1" id="shop-by-fandom">
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/fandom1.webp" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/fandom2.webp" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/fandom3.webp" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/fandom4.webp" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/fandom5.webp" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/fandom6.webp" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                    <a href="#" class="see_all" style="font-size:10px;">Explore All</a>
                </div>
            </div>
        </section>

        <!-- end -->

        <!-- from happenstance -->
        <section class="categories-wrap mt-3">
            <div class="container-fluid  container-wrapper">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">DL Categories</h3>
                </div>
                <div class="grid grid-cols-2 gap-2 sm:grid-cols-3 lg:grid-cols-4 lg:gap-2">
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="https://happenstance.com/storage/media/9Duaum9KJdWiumrnLQT1wtqsOa4YMja9ZkObf0wk.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="https://happenstance.com/storage/media/n8krYhZCh8ZCtIlcVXsuaAaT1zzg2i8gmXtwLni8.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="https://happenstance.com/storage/media/1U9IrhwBoZTFJSYY8C1DDCHH5f37Rq7eVnuyULmb.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="https://happenstance.com/storage/media/MTt2RpcD8JR77MvVffnKdbmJEs525fePzpvffePP.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="https://happenstance.com/storage/media/d78cHM9U9oIhuefSi79tEoXsszSk4wErlK2EMjCZ.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="https://happenstance.com/storage/media/anfrvSP97BpvK4AItP6xUUjiPoMTZZjzyFUoLeWY.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="https://happenstance.com/storage/media/kkj9tR65hLJd2PM86C6zmMdA7SBHVO7onZUuYiw7.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="https://happenstance.com/storage/media/ek75zDkTPS2M8kbzXMK7yhdK7NULdluL5MxBXgZB.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end -->

        <section class="new-arrivals section-block mt-3">
            <div class="container-fluid container-wrapper">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase text-center">Featured Products</h3>
                </div>
                <div class="post-row">
                    <div class="row carousel1" id="new-arrival1">
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image round-corner">
                                        <img src="/images/i1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <!-- <div class="product-detail">
                                        <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                                        <div class="product-features">
                                            <p class="item-name">T-Shirt</p>
                                            <p class="item-name-sub">Oversized T-shirts</p>
                                            <p class="item-price">
                                                <span class="price_number">₹ 1999</span>
                                            </p>
                                            <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image round-corner">
                                        <img src="/images/i2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <!-- <div class="product-detail">
                                        <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                                        <div class="product-features">
                                            <p class="item-name">T-Shirt</p>
                                            <p class="item-name-sub">Oversized T-shirts</p>
                                            <p class="item-price">
                                                <span class="price_number">₹ 1999</span>
                                            </p>
                                            <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image round-corner">
                                        <img src="/images/i4.jpg" class="img-fluid" alt="">
                                    </div>
                                    <!-- <div class="product-detail">
                                        <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                                        <div class="product-features">
                                            <p class="item-name">T-Shirt</p>
                                            <p class="item-name-sub">Oversized T-shirts</p>
                                            <p class="item-price">
                                                <span class="price_number">₹ 1999</span>
                                            </p>
                                            <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image round-corner">
                                        <img src="/images/i1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <!-- <div class="product-detail">
                                        <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                                        <div class="product-features">
                                            <p class="item-name">T-Shirt</p>
                                            <p class="item-name-sub">Oversized T-shirts</p>
                                            <p class="item-price">
                                                <span class="price_number">₹ 1999</span>
                                            </p>
                                            <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image round-corner">
                                        <img src="/images/i2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <!-- <div class="product-detail">
                                        <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                                        <div class="product-features">
                                            <p class="item-name">T-Shirt</p>
                                            <p class="item-name-sub">Oversized T-shirts</p>
                                            <p class="item-price">
                                                <span class="price_number">₹ 1999</span>
                                            </p>
                                            <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image round-corner">
                                        <img src="/images/i4.jpg" class="img-fluid" alt="">
                                    </div>
                                    <!-- <div class="product-detail">
                                        <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                                        <div class="product-features">
                                            <p class="item-name">T-Shirt</p>
                                            <p class="item-name-sub">Oversized T-shirts</p>
                                            <p class="item-price">
                                                <span class="price_number">₹ 1999</span>
                                            </p>
                                            <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                    <a href="#" class="see_all" style="font-size:10px;">Explore All</a>
                </div>
            </div>
        </section>

        <section class="new-arrivals section-block mt-3">
            <div class="container-fluid container-wrapper">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase text-center">Newly Launched</h3>
                </div>
                <div class="post-row">
                    <div class="row carousel1" id="featured-videos">
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image round-corner">
                                        <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg">
                                            <source src="https://happenstance.com/storage/media/erhWknKJC8nOXn0698wxGDKlRVOmWVc3eDyuZilP.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <!-- <div class="product-detail">
                                        <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                                        <div class="product-features">
                                            <p class="item-name">T-Shirt</p>
                                            <p class="item-name-sub">Oversized T-shirts</p>
                                            <p class="item-price">
                                                <span class="price_number">₹ 1999</span>
                                            </p>
                                            <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image round-corner">
                                        <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg">
                                            <source src="https://happenstance.com/storage/media/lBtvd2EYBeNJjhVL7VqYnnamiEmNW7FIzo3Ooh2y.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <!-- <div class="product-detail">
                                        <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                                        <div class="product-features">
                                            <p class="item-name">T-Shirt</p>
                                            <p class="item-name-sub">Oversized T-shirts</p>
                                            <p class="item-price">
                                                <span class="price_number">₹ 1999</span>
                                            </p>
                                            <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image round-corner">
                                        <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg">
                                            <source src="https://happenstance.com/storage/media/erhWknKJC8nOXn0698wxGDKlRVOmWVc3eDyuZilP.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <!-- <div class="product-detail">
                                        <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                                        <div class="product-features">
                                            <p class="item-name">T-Shirt</p>
                                            <p class="item-name-sub">Oversized T-shirts</p>
                                            <p class="item-price">
                                                <span class="price_number">₹ 1999</span>
                                            </p>
                                            <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image round-corner">
                                        <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg">
                                            <source src="https://happenstance.com/storage/media/lBtvd2EYBeNJjhVL7VqYnnamiEmNW7FIzo3Ooh2y.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <!-- <div class="product-detail">
                                        <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                                        <div class="product-features">
                                            <p class="item-name">T-Shirt</p>
                                            <p class="item-name-sub">Oversized T-shirts</p>
                                            <p class="item-price">
                                                <span class="price_number">₹ 1999</span>
                                            </p>
                                            <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image round-corner">
                                        <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg">
                                            <source src="https://happenstance.com/storage/media/erhWknKJC8nOXn0698wxGDKlRVOmWVc3eDyuZilP.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <!-- <div class="product-detail">
                                        <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                                        <div class="product-features">
                                            <p class="item-name">T-Shirt</p>
                                            <p class="item-name-sub">Oversized T-shirts</p>
                                            <p class="item-price">
                                                <span class="price_number">₹ 1999</span>
                                            </p>
                                            <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image round-corner">
                                        <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg">
                                            <source src="https://happenstance.com/storage/media/lBtvd2EYBeNJjhVL7VqYnnamiEmNW7FIzo3Ooh2y.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <!-- <div class="product-detail">
                                        <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                                        <div class="product-features">
                                            <p class="item-name">T-Shirt</p>
                                            <p class="item-name-sub">Oversized T-shirts</p>
                                            <p class="item-price">
                                                <span class="price_number">₹ 1999</span>
                                            </p>
                                            <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image round-corner">
                                        <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg">
                                            <source src="https://happenstance.com/storage/media/erhWknKJC8nOXn0698wxGDKlRVOmWVc3eDyuZilP.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <!-- <div class="product-detail">
                                        <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                                        <div class="product-features">
                                            <p class="item-name">T-Shirt</p>
                                            <p class="item-name-sub">Oversized T-shirts</p>
                                            <p class="item-price">
                                                <span class="price_number">₹ 1999</span>
                                            </p>
                                            <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image round-corner">
                                        <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg">
                                            <source src="https://happenstance.com/storage/media/lBtvd2EYBeNJjhVL7VqYnnamiEmNW7FIzo3Ooh2y.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <!-- <div class="product-detail">
                                        <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                                        <div class="product-features">
                                            <p class="item-name">T-Shirt</p>
                                            <p class="item-name-sub">Oversized T-shirts</p>
                                            <p class="item-price">
                                                <span class="price_number">₹ 1999</span>
                                            </p>
                                            <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                    <a href="#" class="see_all" style="font-size:10px;">Explore All</a>
                </div>
            </div>
        </section>

        <!-- Styles in Spotlight -->
        <section class="new-arrivals section-block mt-3">
            <div class="container-fluid  container-wrapper">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">Shop By Fandom</h3>
                </div>
                <div class="post-row">
                    <div class="row carousel1" id="new-arrival1">
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image">
                                        <img src="/images/spot1.webp" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image">
                                        <img src="/images/spot2.webp" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image">
                                        <img src="/images/spot3.webp" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image">
                                        <img src="/images/spot4.webp" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image">
                                        <img src="/images/spot1.webp" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image">
                                        <img src="/images/spot2.webp" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_INDEX) }}">
                                <div class="product-post">
                                    <div class="product-image">
                                        <img src="/images/spot3.webp" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                    <a href="#" class="see_all" style="font-size:10px;">Explore All</a>
                </div>
            </div>
        </section>
        <!-- end -->

        <section class="categories section-block mt-3">
            <div class="container-fluid  container-wrapper">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">Categories</h3>
                </div>
                <div class="category-row">
                    <div class="row carousel1" id="category-slider">
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/c2.webp" class="img-fluid" alt="">
                                    <div class="category-content">
                                        <div class="category-name fw-700">
                                            <p>New Collection</p>
                                            <h3 class="text-uppercase fw-700">Belt</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/c1.webp" class="img-fluid" alt="">
                                    <div class="category-content">
                                        <div class="category-name fw-700">
                                            <p style="">New Collection</p>
                                            <h3 class="text-uppercase fw-700" style="">Formal Shirt</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/c2.webp" class="img-fluid" alt="">
                                    <div class="category-content">
                                        <div class="category-name fw-700">
                                            <p>New Collection</p>
                                            <h3 class="text-uppercase fw-700">Belt</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/c3.webp" class="img-fluid" alt="">
                                    <div class="category-content">
                                        <div class="category-name fw-700">
                                            <p style="">New Collection</p>
                                            <h3 class="text-uppercase fw-700" style="">Sneakers</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mobile-crs-width">
                        <div class="col-md-3 col-lg-3">
                            <div class="category-item sec-cat-sec">
                                <div class="category-image">
                                    <img src="/images/c4.webp" class="img-fluid" alt="">
                                </div>
                                <div class="category-content">
                                    <div class="category-name fw-700">
                                        <p style="">New Collection</p>
                                        <h3 class="text-uppercase fw-700" style="">Pant</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="category-item sec-cat-sec">
                                <div class="category-image">
                                    <img src="/images/c5.jpg" class="img-fluid" alt="">
                                    <!--  <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg" >
                            <source src="https://happenstance.com/storage/media/lBtvd2EYBeNJjhVL7VqYnnamiEmNW7FIzo3Ooh2y.mp4" type="video/mp4">
                            </video> -->
                                </div>
                                <div class="category-content">
                                    <div class="category-name fw-700">
                                        <p style="">New Collection</p>
                                        <h3 class="text-uppercase fw-700" style="">Polos</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="category-item sec-cat-sec">
                                <div class="category-image">
                                    <img src="/images/c5.webp" class="img-fluid" alt="">
                                </div>
                                <div class="category-content">

                                    <div class="category-name fw-700">
                                        <p style="">New Collection</p>
                                        <h3 class="text-uppercase fw-700" style="">Formal Shirt</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="category-item sec-cat-sec">
                                <div class="category-image">
                                    <img src="/images/c4.webp" class="img-fluid" alt="">
                                    <!-- <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg" >
                            <source src="https://happenstance.com/storage/media/udG7fuDRh0MgfYly7J8GMsyebucR3GalSce7cGG2.mp4" type="video/mp4"> -->
                                </div>
                                <div class="category-content">
                                    <div class="category-name fw-700">
                                        <p style="">New Collection</p>
                                        <h3 class="text-uppercase fw-700" style="">Shoes</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row carousel1" id="category-slider1">
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/c2.webp" class="img-fluid" alt="">
                                    <div class="category-content">
                                        <div class="category-name fw-700">
                                            <p>New Collection</p>
                                            <h3 class="text-uppercase fw-700">Belt</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/c1.webp" class="img-fluid" alt="">
                                    <div class="category-content">
                                        <div class="category-name fw-700">
                                            <p style="">New Collection</p>
                                            <h3 class="text-uppercase fw-700" style="">Formal Shirt</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/c2.webp" class="img-fluid" alt="">
                                    <div class="category-content">
                                        <div class="category-name fw-700">
                                            <p>New Collection</p>
                                            <h3 class="text-uppercase fw-700">Belt</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="category-item">
                                <div class="category-image">
                                    <img src="/images/c3.webp" class="img-fluid" alt="">
                                </div>
                                <div class="category-content">
                                    <div class="category-name fw-700">
                                        <p style="">New Collection</p>
                                        <h3 class="text-uppercase fw-700" style="">Sneakers</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-block mt-3">
            <div class="container-fluid">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">Shop Your Size</h3>
                </div>
                <div class="latest-collection-row">
                    <img src="/images/offer1.webp" alt="" style="width:100%">
                </div>
            </div>
        </section>

        <section class="section-block mt-3">
            <div class="container-fluid p-0">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">Iconic supima tees are back</h3>
                </div>

                <div class="latest-collection-row">
                    <div class="row g-0">
                        <div class="col-6 col-md-2">
                            <img src="/images/iconic1.webp" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 col-md-2">
                            <img src="/images/iconic2.webp" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 col-md-2">
                            <img src="/images/iconic3.webp" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 col-md-2">
                            <img src="/images/iconic4.webp" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 col-md-2">
                            <img src="/images/iconic5.webp" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 col-md-2">
                            <img src="/images/iconic6.webp" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-slider-section highlated-sale-strip mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex heading-txt align-items-center justify-content-center flex-wrap gap-2 mt-25">
                            <h3 class="fw-600 text-uppercase text-center">HOT PICKS:OVERSIZED T-SHIRTS AT RS.499</h3>
                            <img src="/images/img-strip.webp" class="img-fluid" alt="">
                        </div>

                        <!-- Swiper Container -->
                        <div class="swiper product-swiper-hot-pick position-relative">
                            <div class="swiper-wrapper mt-3">
                                @for($i = 0; $i < 10; $i++)
                                    <div class="swiper-slide">
                                    <div class="product-card">
                                        <div class="card image-hover">
                                            <img src="/images/f3.webp" class="card-img-top first-img" alt="Product {{ $i + 1 }}">
                                            <img src="/images/f2.webp" class="card-img-top second-img" alt="Product {{ $i + 1 }}">
                                            <div class="product-detail p-2">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                                        <span style="font-size: 11px;">Men Utility Shirts</span>
                                                    </div>
                                                    <div class="wishlist-icon">
                                                        <svg width="24" height="24" fill="none">
                                                            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                            <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <p class="item-price">
                                                    <span class="offer_price_number">₹599</span>
                                                    <span class="price_number">₹1599</span>
                                                    <span class="offer">66% OFF</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            @endfor
                        </div>

                        <!-- Navigation Buttons -->
                        <div class="product-hot-pagination flex justify-center mb-20"></div>
                        <!-- <div class="swiper-button-custom product-button-prev"><i class="fa fa-chevron-left"></i></div> -->
                        <!-- <div class="swiper-button-custom product-button-next"><i class="fa fa-chevron-right"></i></div> -->
                    </div>
                    <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                        <a href="#" class="see_all" style="font-size:10px;">Explore All</a>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="section-block mt-3">
            <div class="container-fluid container-wrapper">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">Membership Perks</h3>
                </div>
                <div class="latest-collection-row">
                    <div class="row carousel2" id="carousel-membership">
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/member1.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/member2.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/member3.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/member4.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/member5.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/member6.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-block mt-3">
            <div class="container-fluid container-wrapper p-0">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">🎉 Big Sale Ends In</h3>
                </div>
                <div class="d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="see_all text-danger" id="countdown"></h3>
                </div>
            </div>
        </section>

        <section class="section-block mt-3">
            <div class="container-fluid container-wrapper p-0">
                <img src="/images/offerbanner.webp" class="img-fluid" alt="">
            </div>
        </section>

        <section class="section-block mt-3">
            <div class="container-fluid container-wrapper">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">Latest Collection</h3>
                </div>
                <div class="latest-collection-row">
                    <div class="row carousel1" id="carousel-latest">
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/l1.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/l2.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/l3.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/l4.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/l1.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/l2.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                    <a href="#" class="see_all" style="font-size:10px;">Explore All</a>
                </div>
            </div>
        </section>

        <section class="section-block mt-3">
            <div class="container-fluid container-wrapper">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">Markdowns</h3>
                </div>
                <div class="latest-collection-row">
                    <div class="row carousel2" id="markdowns">
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/mark1.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/mark2.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/mark3.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/mark4.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/mark1.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/mark2.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                    <a href="#" class="see_all" style="font-size:10px;">Explore All</a>
                </div>
            </div>
        </section>

        <div class="highlated-sale-moon mt-3">
            <div class="container">
                <div class="row">
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="home-strip-text">HOMEGROWN INDIAN BRAND</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="section-block">
            <div class="container-fluid container-wrapper">
                <div class="d-flex heading-txt align-items-center justify-content-center flex-wrap gap-2 mb-20 mt-25">
                    <img src="/images/img-strip.webp" class="img-fluid" alt="">
                    <h3 class="fw-700 text-uppercase text-center">Seasonal must haves</h3>
                    <img src="/images/img-strip.webp" class="img-fluid" alt="">
                </div>
                <div class="latest-collection-row">
                    <div class="grid grid-cols-2 gap-2 sm:grid-cols-3 lg:grid-cols-4 lg:gap-2">
                        <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                            <a href="#" class="block w-full">
                                <img src="/images/season1.webp" alt="Happenstance" width="324" height="271" class="w-full">
                            </a>
                        </div>
                        <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                            <a href="#" class="block w-full">
                                <img src="/images/season2.webp" alt="Happenstance" width="324" height="271" class="w-full">
                            </a>
                        </div>
                        <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                            <a href="#" class="block w-full">
                                <img src="/images/season3.webp" alt="Happenstance" width="324" height="271" class="w-full">
                            </a>
                        </div>
                        <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                            <a href="#" class="block w-full">
                                <img src="/images/season4.webp" alt="Happenstance" width="324" height="271" class="w-full">
                            </a>
                        </div>
                        <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                            <a href="#" class="block w-full">
                                <img src="/images/season5.webp" alt="Happenstance" width="324" height="271" class="w-full">
                            </a>
                        </div>
                        <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                            <a href="#" class="block w-full">
                                <img src="/images/season6.webp" alt="Happenstance" width="324" height="271" class="w-full">
                            </a>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-6 col-md-2">
                            <div class="Latest-item">
                                <img src="/images/season1.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="Latest-item">
                                <img src="/images/season2.webp" class="img-fluid" alt="">
                                <div class="product-detail p-2">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3 class="product-title fw-700 text-uppercase">Joggers</h3>
                                            <p class="item-name">Start at ₹499</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="Latest-item">
                                <img src="/images/season3.webp" class="img-fluid" alt="">
                                <div class="product-detail p-2">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3 class="product-title fw-700 text-uppercase">Shorts</h3>
                                            <p class="item-name">Start at ₹499</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="Latest-item">
                                <img src="/images/season4.webp" class="img-fluid" alt="">
                                <div class="product-detail p-2">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3 class="product-title fw-700 text-uppercase">Pyjamas</h3>
                                            <p class="item-name">Start at ₹499</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="Latest-item">
                                <img src="/images/season5.webp" class="img-fluid" alt="">
                                <div class="product-detail p-2">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3 class="product-title fw-700 text-uppercase">Jeans</h3>
                                            <p class="item-name">Start at ₹499</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="Latest-item">
                                <img src="/images/season6.webp" class="img-fluid" alt="">
                                <div class="product-detail p-2">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3 class="product-title fw-700 text-uppercase">Vests</h3>
                                            <p class="item-name">Start at ₹499</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        <div class="highlated-sale mt-3">
            <div class="container">
                <div class="row">
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="home-strip-text">HOMEGROWN INDIAN BRAND</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="section-block mt-3">
            <div class="container-fluid container-wrapper">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">Sharp dressing</h3>
                </div>
                <div class="latest-collection-row">
                    <div class="row carousel2" id="sharp-dressing">
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/category1.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/category3.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/category2.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/category1.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/category3.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/category2.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                    <a href="#" class="see_all" style="font-size:10px;">Explore All</a>
                </div>
            </div>
        </section>

        <section class="categories-wrap mt-3">
            <div class="container-fluid  container-wrapper">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">Categories</h3>
                </div>
                <div class="grid grid-cols-2 gap-2 sm:grid-cols-3 lg:grid-cols-4 lg:gap-2">
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/cat1.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/cat2.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/cat3.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/cat4.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/cat5.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/cat6.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/cat7.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/cat8.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/cat9.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/cat10.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/cat11.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                    <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                        <a href="#" class="block w-full">
                            <img src="/images/cat12.webp" alt="Happenstance" width="324" height="271" class="w-full rounded-lg">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-block mt-3">
            <div class="container-fluid">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">Denim Takeover</h3>
                </div>
                <div class="latest-collection-row">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                        <div>
                            <img src="/images/denim1.webp" class="w-full h-auto" alt="">
                        </div>
                        <div>
                            <img src="/images/denim2.webp" class="w-full h-auto" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-block mt-3">
            <div class="container-fluid container-wrapper">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">Denim Makeover</h3>
                </div>
                <div class="latest-collection-row">
                    <div class="row carousel2" id="denim-makeover">
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/denim3.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/denim4.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/denim5.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/denim3.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/denim4.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/denim5.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                    <a href="#" class="see_all" style="font-size:10px;">Explore All</a>
                </div>
            </div>
        </section>

        <section class="section-block mt-3">
            <div class="container-fluid container-wrapper p-0">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">Why Choose Us?</h3>
                </div>

                <div class="latest-collection-row">
                    <div class="row">
                        <div class="col-12">
                            <img src="/images/choose.webp" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-block mt-3">
            <div class="container-fluid container-wrapper">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">Top 6 picks of the week</h3>
                </div>
                <div class="latest-collection-row">
                    <div class="row carousel2" id="top-picks">
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/top1.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/top2.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/top3.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/top4.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/top5.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/top6.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                    <a href="#" class="see_all" style="font-size:10px;">Explore All</a>
                </div>
            </div>
        </section>

        <section class="section-block mt-3">
            <div class="container-fluid container-wrapper">
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">Trick and treat!</h3>
                </div>
                <div class="latest-collection-row">
                    <div class="row carousel2" id="trick-treat">
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/trick2.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="Latest-item">
                                <img src="/images/trick2.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                    <a href="#" class="see_all" style="font-size:10px;">Explore All</a>
                </div>
            </div>
        </section>
                <!-- SECTION: SHIRTS -->
                <section class="product-filter-section" id="shirts">
                    <div class="grid grid-cols-2 lg:grid-cols-5 gap-2">
                        <div class="relative ">
                            <a href="#">
                                <div class="relative w-full overflow-hidden filter-container">
                                    <div class="h-full w-full relative"><img alt="Light Weight Flannel Plaid Shirt" class="filter-img" loading="lazy" decoding="async" data-nimg="fill" src="/images/fil5.webp"></div>
                                </div>
                            </a>
                           <div class="p-2">
                                 <div class="product-detail p-0">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                            <span style="font-size: 11px;">Men Utility Shirts</span>
                                        </div>
                                        <div class="wishlist-icon">
                                            <svg width="24" height="24" fill="none">
                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="item-price">
                                        <span class="offer_price_number">₹599</span>
                                        <span class="price_number">₹1599</span>
                                        <span class="offer">66% OFF</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative ">
                            <a href="#">
                                <div class="relative w-full overflow-hidden filter-container">
                                    <div class="h-full w-full relative"><img alt="Light Weight Flannel Plaid Shirt" class="filter-img" loading="lazy" decoding="async" data-nimg="fill" src="/images/fil3.webp"></div>
                                </div>
                            </a>
                            <div class="p-2">
                                 <div class="product-detail p-0">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                            <span style="font-size: 11px;">Men Utility Shirts</span>
                                        </div>
                                        <div class="wishlist-icon">
                                            <svg width="24" height="24" fill="none">
                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="item-price">
                                        <span class="offer_price_number">₹599</span>
                                        <span class="price_number">₹1599</span>
                                        <span class="offer">66% OFF</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative ">
                            <a href="#">
                                <div class="relative w-full overflow-hidden filter-container">
                                    <div class="h-full w-full relative"><img alt="Light Weight Flannel Plaid Shirt" class="filter-img" loading="lazy" decoding="async" data-nimg="fill" src="/images/fil4.webp"></div>
                                </div>
                            </a>
                           <div class="p-2">
                                 <div class="product-detail p-0">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                            <span style="font-size: 11px;">Men Utility Shirts</span>
                                        </div>
                                        <div class="wishlist-icon">
                                            <svg width="24" height="24" fill="none">
                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="item-price">
                                        <span class="offer_price_number">₹599</span>
                                        <span class="price_number">₹1599</span>
                                        <span class="offer">66% OFF</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SECTION: TROUSERS -->
                <section class="product-filter-section" id="trousers">
                    <div class="grid grid-cols-2 lg:grid-cols-5 gap-2">
                        <div class="relative ">
                            <a href="#">
                                <div class="relative w-full overflow-hidden filter-container">
                                    <div class="h-full w-full relative"><img alt="Light Weight Flannel Plaid Shirt" class="filter-img" loading="lazy" decoding="async" data-nimg="fill" src="/images/fil2.webp"></div>
                                </div>
                            </a>
                            <div class="p-2">
                                 <div class="product-detail p-0">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                            <span style="font-size: 11px;">Men Utility Shirts</span>
                                        </div>
                                        <div class="wishlist-icon">
                                            <svg width="24" height="24" fill="none">
                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="item-price">
                                        <span class="offer_price_number">₹599</span>
                                        <span class="price_number">₹1599</span>
                                        <span class="offer">66% OFF</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative ">
                            <a href="#">
                                <div class="relative w-full overflow-hidden filter-container">
                                    <div class="h-full w-full relative"><img alt="Light Weight Flannel Plaid Shirt" class="filter-img" loading="lazy" decoding="async" data-nimg="fill" src="/images/fil5.webp"></div>
                                </div>
                            </a>
                            <div class="p-2">
                                 <div class="product-detail p-0">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                            <span style="font-size: 11px;">Men Utility Shirts</span>
                                        </div>
                                        <div class="wishlist-icon">
                                            <svg width="24" height="24" fill="none">
                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="item-price">
                                        <span class="offer_price_number">₹599</span>
                                        <span class="price_number">₹1599</span>
                                        <span class="offer">66% OFF</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative ">
                            <a href="#">
                                <div class="relative w-full overflow-hidden filter-container">
                                    <div class="h-full w-full relative"><img alt="Light Weight Flannel Plaid Shirt" class="filter-img" loading="lazy" decoding="async" data-nimg="fill" src="/images/fil3.webp"></div>
                                </div>
                            </a>
                            <div class="p-2">
                                 <div class="product-detail p-0">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                            <span style="font-size: 11px;">Men Utility Shirts</span>
                                        </div>
                                        <div class="wishlist-icon">
                                            <svg width="24" height="24" fill="none">
                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="item-price">
                                        <span class="offer_price_number">₹599</span>
                                        <span class="price_number">₹1599</span>
                                        <span class="offer">66% OFF</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative ">
                            <a href="#">
                                <div class="relative w-full overflow-hidden filter-container">
                                    <div class="h-full w-full relative"><img alt="Light Weight Flannel Plaid Shirt" class="filter-img" loading="lazy" decoding="async" data-nimg="fill" src="/images/fil4.webp"></div>
                                </div>
                            </a>
                            <div class="p-2">
                                 <div class="product-detail p-0">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                            <span style="font-size: 11px;">Men Utility Shirts</span>
                                        </div>
                                        <div class="wishlist-icon">
                                            <svg width="24" height="24" fill="none">
                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="item-price">
                                        <span class="offer_price_number">₹599</span>
                                        <span class="price_number">₹1599</span>
                                        <span class="offer">66% OFF</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SECTION: T-SHIRTS -->
                <section class="product-filter-section" id="tshirts">
                    <div class="grid grid-cols-2 lg:grid-cols-5 gap-2">
                        <div class="relative ">
                            <a href="#">
                                <div class="relative w-full overflow-hidden filter-container">
                                    <div class="h-full w-full relative"><img alt="Light Weight Flannel Plaid Shirt" class="filter-img" loading="lazy" decoding="async" data-nimg="fill" src="/images/fil1.webp"></div>
                                </div>
                            </a>
                            <div class="p-2">
                                 <div class="product-detail p-0">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                            <span style="font-size: 11px;">Men Utility Shirts</span>
                                        </div>
                                        <div class="wishlist-icon">
                                            <svg width="24" height="24" fill="none">
                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="item-price">
                                        <span class="offer_price_number">₹599</span>
                                        <span class="price_number">₹1599</span>
                                        <span class="offer">66% OFF</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative ">
                            <a href="#">
                                <div class="relative w-full overflow-hidden filter-container">
                                    <div class="h-full w-full relative"><img alt="Light Weight Flannel Plaid Shirt" class="filter-img" loading="lazy" decoding="async" data-nimg="fill" src="/images/fil3.webp"></div>
                                </div>
                            </a>
                           <div class="p-2">
                                 <div class="product-detail p-0">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                            <span style="font-size: 11px;">Men Utility Shirts</span>
                                        </div>
                                        <div class="wishlist-icon">
                                            <svg width="24" height="24" fill="none">
                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="item-price">
                                        <span class="offer_price_number">₹599</span>
                                        <span class="price_number">₹1599</span>
                                        <span class="offer">66% OFF</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative ">
                            <a href="#">
                                <div class="relative w-full overflow-hidden filter-container">
                                    <div class="h-full w-full relative"><img alt="Light Weight Flannel Plaid Shirt" class="filter-img" loading="lazy" decoding="async" data-nimg="fill" src="/images/fil4.webp"></div>
                                </div>
                            </a>
                            <div class="p-2">
                                 <div class="product-detail p-0">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                            <span style="font-size: 11px;">Men Utility Shirts</span>
                                        </div>
                                        <div class="wishlist-icon">
                                            <svg width="24" height="24" fill="none">
                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="item-price">
                                        <span class="offer_price_number">₹599</span>
                                        <span class="price_number">₹1599</span>
                                        <span class="offer">66% OFF</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SECTION: JACKETS -->
                <section class="product-filter-section" id="jackets">
                    <div class="grid grid-cols-2 lg:grid-cols-5 gap-2">
                        <div class="relative ">
                            <a href="#">
                                <div class="relative w-full overflow-hidden filter-container">
                                    <div class="h-full w-full relative"><img alt="Light Weight Flannel Plaid Shirt" class="filter-img" loading="lazy" decoding="async" data-nimg="fill" src="/images/fil5.webp"></div>
                                </div>
                            </a>
                            <div class="p-2">
                                 <div class="product-detail p-0">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                            <span style="font-size: 11px;">Men Utility Shirts</span>
                                        </div>
                                        <div class="wishlist-icon">
                                            <svg width="24" height="24" fill="none">
                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="item-price">
                                        <span class="offer_price_number">₹599</span>
                                        <span class="price_number">₹1599</span>
                                        <span class="offer">66% OFF</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative ">
                            <a href="#">
                                <div class="relative w-full overflow-hidden filter-container">
                                    <div class="h-full w-full relative"><img alt="Light Weight Flannel Plaid Shirt" class="filter-img" loading="lazy" decoding="async" data-nimg="fill" src="/images/fil3.webp"></div>
                                </div>
                            </a>
<div class="p-2">
                                 <div class="product-detail p-0">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                            <span style="font-size: 11px;">Men Utility Shirts</span>
                                        </div>
                                        <div class="wishlist-icon">
                                            <svg width="24" height="24" fill="none">
                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="item-price">
                                        <span class="offer_price_number">₹599</span>
                                        <span class="price_number">₹1599</span>
                                        <span class="offer">66% OFF</span>
                                    </p>
                                </div>
                            </div>                        </div>
                        <div class="relative ">
                            <a href="#">
                                <div class="relative w-full overflow-hidden filter-container">
                                    <div class="h-full w-full relative"><img alt="Light Weight Flannel Plaid Shirt" class="filter-img" loading="lazy" decoding="async" data-nimg="fill" src="/images/fil4.webp"></div>
                                </div>
                            </a>
<div class="p-2">
                                 <div class="product-detail p-0">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                            <span style="font-size: 11px;">Men Utility Shirts</span>
                                        </div>
                                        <div class="wishlist-icon">
                                            <svg width="24" height="24" fill="none">
                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="item-price">
                                        <span class="offer_price_number">₹599</span>
                                        <span class="price_number">₹1599</span>
                                        <span class="offer">66% OFF</span>
                                    </p>
                                </div>
                            </div>                        </div>
                    </div>
                </section>

                <section class="product-filter-section" id="jeans">
                    <div class="grid grid-cols-2 lg:grid-cols-5 gap-2">
                        <div class="relative ">
                            <a href="#">
                                <div class="relative w-full overflow-hidden filter-container">
                                    <div class="h-full w-full relative"><img alt="Light Weight Flannel Plaid Shirt" class="filter-img" loading="lazy" decoding="async" data-nimg="fill" src="/images/fil1.webp"></div>
                                </div>
                            </a>
                            <div class="p-2">
                                 <div class="product-detail p-0">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                            <span style="font-size: 11px;">Men Utility Shirts</span>
                                        </div>
                                        <div class="wishlist-icon">
                                            <svg width="24" height="24" fill="none">
                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="item-price">
                                        <span class="offer_price_number">₹599</span>
                                        <span class="price_number">₹1599</span>
                                        <span class="offer">66% OFF</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative ">
                            <a href="#">
                                <div class="relative w-full overflow-hidden filter-container">
                                    <div class="h-full w-full relative"><img alt="Light Weight Flannel Plaid Shirt" class="filter-img" loading="lazy" decoding="async" data-nimg="fill" src="/images/fil2.webp"></div>
                                </div>
                            </a>
<div class="p-2">
                                 <div class="product-detail p-0">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                            <span style="font-size: 11px;">Men Utility Shirts</span>
                                        </div>
                                        <div class="wishlist-icon">
                                            <svg width="24" height="24" fill="none">
                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="item-price">
                                        <span class="offer_price_number">₹599</span>
                                        <span class="price_number">₹1599</span>
                                        <span class="offer">66% OFF</span>
                                    </p>
                                </div>
                            </div>                        </div>
                        <div class="relative ">
                            <a href="#">
                                <div class="relative w-full overflow-hidden filter-container">
                                    <div class="h-full w-full relative"><img alt="Light Weight Flannel Plaid Shirt" class="filter-img" loading="lazy" decoding="async" data-nimg="fill" src="/images/fil4.webp"></div>
                                </div>
                            </a>
<div class="p-2">
                                 <div class="product-detail p-0">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="text-left product-title" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                            <span style="font-size: 11px;">Men Utility Shirts</span>
                                        </div>
                                        <div class="wishlist-icon">
                                            <svg width="24" height="24" fill="none">
                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M11.553 6.974s0 0 0 0h0l-.002-.003-.01-.02a5.342 5.342 0 0 0-.239-.392 6.283 6.283 0 0 0-.785-.954c-.7-.695-1.716-1.355-3.06-1.355-2.18 0-3.934 1.83-3.957 4.043-.049 4.833 3.833 8.342 8.359 11.413h0a.25.25 0 0 0 .282 0h0c4.525-3.071 8.407-6.58 8.359-11.413-.023-2.214-1.776-4.043-3.957-4.043-1.344 0-2.36.66-3.06 1.355a6.283 6.283 0 0 0-.979 1.264l-.045.083-.01.019-.002.003h0a.5.5 0 0 1-.894 0Zm0 0h0s0 0 0 0h0Z"></path>
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="item-price">
                                        <span class="offer_price_number">₹599</span>
                                        <span class="price_number">₹1599</span>
                                        <span class="offer">66% OFF</span>
                                    </p>
                                </div>
                            </div>                        </div>
                    </div>
                </section>
            </div>
        </section>


        <!-- <div class="bottom-footer">
        </div> -->

    </main>
@include('website.footer')