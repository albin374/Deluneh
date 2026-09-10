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
            .product-card .card-img-top, .product-card .desktop-slide {
                aspect-ratio: 3/4;
                object-fit: cover;
                width: 100%;
            }

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
                                    <img src="{{ asset('storage/' . $banner->image) }}" class="img-fluid desktop-slide" alt="Banner">
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
                                    <img src="{{ asset('storage/' . $banner->image) }}" class="img-fluid desktop-slide" alt="Banner">
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

        @foreach($homeSections as $section)
            @if($section->is_banner)
                <div class="highlated-sale-banner banner-highlated" style="background-color: #d31212; padding: 4px 0; margin-top: 20px; margin-bottom: 20px; overflow: hidden;">
                    @if(!empty($section->banner_sentences) && count($section->banner_sentences) > 0)
                        <div class="owl-carousel banner-carousel-{{ $section->id }}">
                            @foreach($section->banner_sentences as $sentenceObj)
                                <div class="item d-flex align-items-center justify-content-center" style="background-color: #d31212;">
                                    <p class="home-strip-text m-0 text-white" style="background-color: #d31212;">{{ $sentenceObj['sentence'] ?? '' }}</p>
                                </div>
                            @endforeach
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                if (typeof $ !== 'undefined' && $.fn.owlCarousel) {
                                    $('.banner-carousel-{{ $section->id }}').owlCarousel({
                                        items: 1,
                                        loop: true,
                                        autoplay: true,
                                        autoplayTimeout: 3000,
                                        nav: false,
                                        dots: false,
                                        mouseDrag: false,
                                        touchDrag: false
                                    });
                                }
                            });
                        </script>
                    @elseif($section->show_title)
                    <div class="d-flex align-items-center justify-content-center" style="background-color: #d31212;">
                        <p class="home-strip-text m-0 text-white" style="background-color: #d31212;">{{ $section->name }}</p>
                    </div>
                    @endif
                </div>
            @elseif($section->is_timer)
                <div class="text-center mt-5 mb-5 countdown-section" data-endtime="{{ $section->timer_end_date ? $section->timer_end_date->format('Y-m-d\TH:i:s') : '' }}">
                    @if($section->show_title)
                    <h3 class="fw-bold mb-3" style="font-size: 20px; display: flex; align-items: center; justify-content: center;">
                        {{ $section->name }}
                    </h3>
                    @endif
                    <div class="countdown-timer" style="color: #dc3545; font-size: 20px; font-weight: 500;">
                        <span class="hours">0</span> hours : <span class="mins">0</span> mins : <span class="secs">0</span> secs
                    </div>
                </div>
            @elseif($section->products && $section->products->isNotEmpty())
        @if($section->layout_style === 'product_filter')
            @php
                $categories = collect();
                foreach ($section->products as $product) {
                    if ($product->category && !$categories->contains('id', $product->category->id)) {
                        $categories->push($product->category);
                    }
                }
            @endphp
            <section class="section-block filter-section mt-3 mb-5">
                <div class="container-fluid container-wrapper">
                    <div class="row">
                        <div class="col-12">
                            @if($section->show_title)
                            <div class="heading-txt align-items-center mb-20">
                                <h3 class="fw-700 text-uppercase text-center">{{ $section->name }}</h3>
                            </div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="product-filter d-flex flex-wrap justify-content-center mb-4 gap-2" id="productFilter-{{ $section->id }}" style="padding-bottom: 5px;">
                        <a href="javascript:void(0)" class="category-pallet active rounded-lg" data-target="all-{{ $section->id }}" data-section="{{ $section->id }}">All</a>
                        @foreach($categories as $category)
                            <a href="javascript:void(0)" class="category-pallet rounded-lg" data-target="category-{{ $category->id }}-{{ $section->id }}" data-section="{{ $section->id }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                    
                    <div class="filter-content-wrapper">
                        <!-- All Products -->
                        <div class="product-filter-section filter-section-content active" id="all-{{ $section->id }}" data-section="{{ $section->id }}" style="display: block;">
                            <div class="grid grid-cols-2 lg:grid-cols-5 gap-2">
                                @foreach($section->products as $product)
                                    @include('website.partials.product_filter_card', ['product' => $product, 'section' => $section])
                                @endforeach
                            </div>
                        </div>

                        <!-- Category specific products -->
                        @foreach($categories as $category)
                            <div class="product-filter-section filter-section-content" id="category-{{ $category->id }}-{{ $section->id }}" data-section="{{ $section->id }}" style="display: none;">
                                <div class="grid grid-cols-2 lg:grid-cols-5 gap-2">
                                    @foreach($section->products->where('category_id', $category->id) as $product)
                                        @include('website.partials.product_filter_card', ['product' => $product, 'section' => $section])
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const filterContainer = document.getElementById('productFilter-{{ $section->id }}');
                        if (!filterContainer) return;
                        
                        const tabs = filterContainer.querySelectorAll('.category-pallet');
                        const contents = document.querySelectorAll('.filter-section-content[data-section="{{ $section->id }}"]');
                        
                        tabs.forEach(tab => {
                            tab.addEventListener('click', function(e) {
                                e.preventDefault();
                                
                                // Remove active class from all tabs
                                tabs.forEach(t => t.classList.remove('active'));
                                
                                // Add active class to clicked tab
                                this.classList.add('active');
                                
                                // Hide all content sections
                                contents.forEach(content => content.style.display = 'none');
                                
                                // Show target content section
                                const targetId = this.getAttribute('data-target');
                                const targetContent = document.getElementById(targetId);
                                if (targetContent) {
                                    targetContent.style.display = 'block';
                                }
                            });
                        });
                    });
                </script>
            </section>
        @else
        <section class="product-slider-section mt-4 mb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if($section->show_title)
                        <div class="heading-txt align-items-center mb-20">
                            <h3 class="fw-700 text-uppercase text-center">{{ $section->name }}</h3>
                        </div>
                        @endif

                        <!-- Swiper Container -->
                        <div class="swiper {{ $section->enable_carousel || $section->enable_auto_carousel ? 'product-carousel-' . $section->id : 'product-swiper' }} position-relative">
                            <div class="swiper-wrapper mb-4">
                                @foreach($section->products as $product)
                                    <div class="swiper-slide">
                                    <div class="product-card d-lg-none d-block">
                                        <div class="card image-hover">
                                            <a href="{{ route(\App\Constants\RouteNames::SINGLE_PRODUCT_INDEX, ['slug' => $product->slug]) }}">
                                                <div class="d-flex product-badge">
                                                    <div class="d-flex align-items-center badge-background">
                                                        <span class="badge-text"> NEW </span>
                                                    </div>
                                                </div>
                                                <div class="swiper product-slide-swiper">
                                                    <div class="swiper-wrapper">
                                                        @if($product->images && count($product->images) > 0)
                                                            @foreach($product->images as $img)
                                                                <div class="swiper-slide">
                                                                    <img src="{{ asset('storage/' . $img) }}" class="img-fluid desktop-slide" alt="{{ $product->name }}">
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <div class="swiper-slide">
                                                                <img src="https://images.bewakoof.com/t540/men-s-beige-embroidered-oversized-shirt-685448-1765191907-1.jpg" class="img-fluid desktop-slide" alt="Placeholder">
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="swiper-pagination product-slide-pagination d-block d-lg-none"></div>
                                                </div>
                                            </a>
                                            <div class="product-detail p-2" style="line-height:22px;">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div style="max-width: 80%; overflow: hidden;">
                                                        <h5 class="text-left product-title" style="font-size: 14px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">{{ $product->name }}</h5>
                                                    </div>
                                                    <div class="wishlist-icon" style="cursor: pointer;" data-product-id="{{ $product->id }}">
                                                        @php
                                                            $inWishlist = isset(session('wishlist')[$product->id]);
                                                        @endphp
                                                        <svg width="24" height="24" fill="{{ $inWishlist ? '#e02b2b' : 'none' }}">
                                                            <path stroke="{{ $inWishlist ? '#e02b2b' : '#000' }}" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div>
                                                     <span style="font-size: 11px;">{{ $product->category ? $product->category->name : 'Uncategorized' }}</span>
                                                </div>
                                                <p class="item-price">
                                                    <span class="offer_price_number">₹{{ $product->price }}</span>
                                                    @if($product->old_price)
                                                        <span class="price_number">₹{{ $product->old_price }}</span>
                                                        @php
                                                            $discount = round((($product->old_price - $product->price) / $product->old_price) * 100);
                                                        @endphp
                                                        <span class="offer">{{ $discount }}% OFF</span>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card d-lg-block d-none">
                                        <div class="card image-hover">
                                            <a href="{{ route(\App\Constants\RouteNames::SINGLE_PRODUCT_INDEX, ['slug' => $product->slug]) }}">
                                                @if($product->images && count($product->images) > 0)
                                                    <img src="{{ asset('storage/' . $product->images[0]) }}" class="card-img-top first-img" alt="{{ $product->name }}">
                                                    @if(count($product->images) > 1)
                                                        <img src="{{ asset('storage/' . $product->images[1]) }}" class="card-img-top second-img" alt="{{ $product->name }}">
                                                    @else
                                                        <img src="{{ asset('storage/' . $product->images[0]) }}" class="card-img-top second-img" alt="{{ $product->name }}">
                                                    @endif
                                                @else
                                                    <img src="/images/f3.webp" class="card-img-top first-img" alt="{{ $product->name }}">
                                                    <img src="/images/f2.webp" class="card-img-top second-img" alt="{{ $product->name }}">
                                                @endif
                                            </a>
                                            <div class="product-detail p-2">
                                                <div class="d-flex justify-content-between">
                                                    <div style="max-width: 80%; overflow: hidden;">
                                                        <h5 class="text-left product-title" style="font-size: 14px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">{{ $product->name }}</h5>
                                                        <span style="font-size: 11px;">{{ $product->category ? $product->category->name : 'Uncategorized' }}</span>
                                                    </div>
                                                    <div class="wishlist-icon" style="cursor: pointer;" data-product-id="{{ $product->id }}">
                                                        @php
                                                            $inWishlist = isset(session('wishlist')[$product->id]);
                                                        @endphp
                                                        <svg width="24" height="24" fill="{{ $inWishlist ? '#e02b2b' : 'none' }}">
                                                            <path stroke="{{ $inWishlist ? '#e02b2b' : '#000' }}" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <p class="item-price">
                                                    <span class="offer_price_number">₹{{ $product->price }}</span>
                                                    @if($product->old_price)
                                                        <span class="price_number">₹{{ $product->old_price }}</span>
                                                        @php
                                                            $discount = round((($product->old_price - $product->price) / $product->old_price) * 100);
                                                        @endphp
                                                        <span class="offer">{{ $discount }}% OFF</span>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                @endforeach
                            </div>

                        <!-- Navigation Buttons -->
                        <div class="{{ $section->enable_carousel || $section->enable_auto_carousel ? 'product-pagination-' . $section->id : 'product-pagination' }} swiper-pagination" style="position: relative !important; margin-top: 25px !important; bottom: auto !important;"></div>
                        @if($section->enable_carousel || $section->enable_auto_carousel)
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                if (typeof Swiper !== 'undefined') {
                                    new Swiper('.product-carousel-{{ $section->id }}', {
                                        loop: true,
                                        speed: 500,
                                        spaceBetween: 10,
                                        slidesPerView: 4,
                                        slidesPerGroup: 1,
                                        @if($section->enable_auto_carousel)
                                        autoplay: { delay: 3000, disableOnInteraction: false },
                                        @endif
                                        @if($section->enable_carousel)
                                        pagination: {
                                            el: '.product-pagination-{{ $section->id }}',
                                            clickable: true,
                                        },
                                        @endif
                                        breakpoints: {
                                            0: { slidesPerView: 2, slidesPerGroup: 1 },
                                            576: { slidesPerView: 3, slidesPerGroup: 1 },
                                            768: { slidesPerView: 4, slidesPerGroup: 1 },
                                            1200: { slidesPerView: 4, slidesPerGroup: 1 }
                                        }
                                    });
                                }
                            });
                        </script>
                        @endif
                    </div>
                    @if($section->has_explore_all)
                    <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                        <a href="{{ $section->explore_all_link ?? '#' }}" class="see_all" style="font-size:10px; font-weight:700; color:#000; text-transform:uppercase; text-decoration:none; border-bottom: 2px solid #000; padding-bottom: 2px;">EXPLORE ALL</a>
                    </div>
                    @endif
                </div>
            </div>
            </div>
            </div>
        </section>
        @endif
            @elseif(($section->images && count($section->images) > 0) || ($section->advanced_images && count($section->advanced_images) > 0))
        <section class="categories-wrap mt-4 mb-5">
            <div class="container-fluid  container-wrapper">
                @if($section->show_title)
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">{{ $section->name }}</h3>
                </div>
                @endif
                @if($section->enable_carousel || $section->enable_auto_carousel)
                    @php
                        $carouselItems = [];
                        if (!empty($section->advanced_images) && count($section->advanced_images) > 0) {
                            $carouselItems = $section->advanced_images;
                        } elseif (!empty($section->images) && count($section->images) > 0) {
                            $carouselItems = array_map(function($path) {
                                return ['image' => $path, 'title' => null, 'subtitle' => null, 'title_color' => null, 'subtitle_color' => null];
                            }, $section->images);
                        }
                        
                        $slidesPerView = 4;
                        $breakpoints = "
                            320: { slidesPerView: 2, spaceBetween: 10 },
                            576: { slidesPerView: 3, spaceBetween: 15 },
                            768: { slidesPerView: 4, spaceBetween: 20 },
                        ";
                        if ($section->layout_style == 'grid_2') {
                            $slidesPerView = 2;
                            $breakpoints = "
                                320: { slidesPerView: 1, spaceBetween: 10 },
                                576: { slidesPerView: 2, spaceBetween: 15 },
                                768: { slidesPerView: 2, spaceBetween: 20 },
                            ";
                        } elseif ($section->layout_style == 'grid_5') {
                            $slidesPerView = 5;
                            $breakpoints = "
                                320: { slidesPerView: 2, spaceBetween: 10 },
                                576: { slidesPerView: 3, spaceBetween: 15 },
                                768: { slidesPerView: 4, spaceBetween: 20 },
                                1024: { slidesPerView: 5, spaceBetween: 20 },
                            ";
                        } elseif ($section->layout_style == 'slider_6') {
                            $slidesPerView = 6;
                            $breakpoints = "
                                320: { slidesPerView: 2, spaceBetween: 10 },
                                576: { slidesPerView: 3, spaceBetween: 15 },
                                768: { slidesPerView: 4, spaceBetween: 20 },
                                1024: { slidesPerView: 6, spaceBetween: 20 },
                            ";
                        }
                        
                        $shouldLoop = 'true';
                        if (count($carouselItems) > 0 && count($carouselItems) <= $slidesPerView) {
                            $original = $carouselItems;
                            while (count($carouselItems) <= $slidesPerView * 2) {
                                $carouselItems = array_merge($carouselItems, $original);
                            }
                        }
                    @endphp
                    <div class="swiper image-carousel-{{ $section->id }}">
                        <div class="swiper-wrapper pb-8">
                            @foreach($carouselItems as $item)
                            <div class="swiper-slide">
                                <a href="#" class="block w-full overflow-hidden rounded-lg position-relative">
                                    <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $section->name }}" class="w-full rounded-lg transition-transform duration-300 ease-in-out hover:scale-110" style="{{ $section->zoom_out_image ? 'object-fit: contain;' : 'aspect-ratio: ' . ($section->layout_style == 'grid_2' ? '16/9' : '3/4') . '; object-fit: cover;' }}">
                                    @if(!empty($item['title']) || !empty($item['subtitle']))
                                    <div class="category-content" style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 15px;">
                                        <div class="category-name fw-700 text-center">
                                            @if(!empty($item['subtitle']))
                                            <p style="color: {{ $item['subtitle_color'] ?? '#ffff00' }} !important; font-weight: bold; text-transform: uppercase;">{{ $item['subtitle'] }}</p>
                                            @endif
                                            @if(!empty($item['title']))
                                            <h3 class="text-uppercase fw-700" style="color: {{ $item['title_color'] ?? '#ffffff' }} !important;">{{ $item['title'] }}</h3>
                                            @endif
                                        </div>
                                    </div>
                                    @endif
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="image-pagination-{{ $section->id }} swiper-pagination" style="position: relative !important; margin-top: 25px !important; bottom: auto !important;"></div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            if (typeof Swiper !== 'undefined') {
                                new Swiper('.image-carousel-{{ $section->id }}', {
                                    loop: {{ $shouldLoop }},
                                    @if($section->enable_auto_carousel)
                                    autoplay: { delay: 3000, disableOnInteraction: false },
                                    @endif
                                    slidesPerView: {{ $slidesPerView }},
                                    spaceBetween: 20,
                                    @if($section->enable_carousel)
                                    pagination: {
                                        el: '.image-pagination-{{ $section->id }}',
                                        clickable: true,
                                    },
                                    @endif
                                    breakpoints: {
                                        {!! $breakpoints !!}
                                    }
                                });
                            }
                        });
                    </script>
                @else
                @switch($section->layout_style ?? 'grid_4')
                    @case('slider_6')
                        <div class="swiper section-slider-6-{{ $section->id }}">
                            <div class="swiper-wrapper pb-8">
                                @foreach($section->images as $img)
                                <div class="swiper-slide">
                                    <a href="#" class="block w-full overflow-hidden rounded-lg">
                                        <img src="{{ asset('storage/' . $img) }}" alt="{{ $section->name }}" class="w-full rounded-lg transition-transform duration-300 ease-in-out hover:scale-110" style="{{ $section->zoom_out_image ? 'object-fit: contain;' : 'aspect-ratio: 3/4; object-fit: cover;' }}">
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                if (typeof Swiper !== 'undefined') {
                                    new Swiper('.section-slider-6-{{ $section->id }}', {
                                        slidesPerView: 4,
                                        spaceBetween: 20,
                                        autoplay: { delay: 3000, disableOnInteraction: false },
                                        pagination: { el: '.swiper-pagination', clickable: true },
                                        breakpoints: {
                                            320: { slidesPerView: 2, spaceBetween: 10 },
                                            576: { slidesPerView: 3, spaceBetween: 15 },
                                            768: { slidesPerView: 4, spaceBetween: 20 },
                                        }
                                    });
                                }
                            });
                        </script>
                        @break

                    @case('slider_3_zoomed')
                        <div class="swiper section-slider-3-{{ $section->id }} overflow-hidden">
                            <div class="swiper-wrapper py-6 pb-12">
                                @foreach($section->images as $img)
                                <div class="swiper-slide">
                                    <a href="#" class="block w-full overflow-hidden rounded-lg">
                                        <img src="{{ asset('storage/' . $img) }}" alt="{{ $section->name }}" class="w-full rounded-lg transition-transform duration-300 ease-in-out hover:scale-110" style="{{ $section->zoom_out_image ? 'object-fit: contain;' : 'aspect-ratio: 3/4; object-fit: cover;' }}">
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                if (typeof Swiper !== 'undefined') {
                                    new Swiper('.section-slider-3-{{ $section->id }}', {
                                        slidesPerView: 3,
                                        spaceBetween: 10,
                                        loop: true,
                                        autoplay: { delay: 3000, disableOnInteraction: false },
                                        pagination: { el: '.swiper-pagination', clickable: true },
                                        breakpoints: {
                                            640: { slidesPerView: 3, spaceBetween: 15 },
                                            1024: { slidesPerView: 3, spaceBetween: 20 },
                                        }
                                    });
                                }
                            });
                        </script>
                        @break

                    @case('grid_5')
                        <div class="swiper section-slider-5-{{ $section->id }}">
                            <div class="swiper-wrapper pb-8">
                                @foreach($section->images as $img)
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="product-post mb-0">
                                            <div class="product-image round-corner">
                                                <img src="{{ asset('storage/' . $img) }}" alt="{{ $section->name }}" class="main-video rounded-lg w-full" style="{{ $section->zoom_out_image ? 'object-fit: contain;' : 'aspect-ratio: 3/4; object-fit: cover;' }}">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                if (typeof Swiper !== 'undefined') {
                                    new Swiper('.section-slider-5-{{ $section->id }}', {
                                        slidesPerView: 5,
                                        spaceBetween: 15,
                                        loop: false,
                                        pagination: { el: '.swiper-pagination', clickable: true },
                                        breakpoints: {
                                            320: { slidesPerView: 2, spaceBetween: 10 },
                                            640: { slidesPerView: 3, spaceBetween: 10 },
                                            1024: { slidesPerView: 5, spaceBetween: 15 },
                                        }
                                    });
                                }
                            });
                        </script>
                        @break

                    @case('grid_10')
                        @php
                            $gridItems = [];
                            if (!empty($section->advanced_images)) {
                                $gridItems = $section->advanced_images;
                            } elseif (!empty($section->images)) {
                                $gridItems = array_map(function($path) {
                                    return ['image' => $path, 'title' => null, 'subtitle' => null, 'title_color' => null, 'subtitle_color' => null];
                                }, $section->images);
                            }
                        @endphp
                        <div class="category-row">
                            @if(count($gridItems) > 0)
                            <!-- Row 1: 3 images -->
                            <div class="row">
                                @foreach(array_slice($gridItems, 0, 3) as $item)
                                <div class="col-md-4 col-lg-4 mb-2 mb-md-0">
                                    <div class="category-item h-100">
                                        <div class="category-image h-100">
                                            <a href="#" class="block w-100 h-100">
                                                <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $section->name }}" class="img-fluid w-100 h-100" style="{{ $section->zoom_out_image ? 'object-fit: contain;' : 'aspect-ratio: 3/4; object-fit: cover;' }}">
                                            </a>
                                            @if(!empty($item['title']) || !empty($item['subtitle']))
                                            <div class="category-content">
                                                <div class="category-name fw-700">
                                                    @if(!empty($item['subtitle']))
                                                    <p style="color: {{ $item['subtitle_color'] ?? '#ffff00' }} !important; font-weight: bold; text-transform: uppercase;">{{ $item['subtitle'] }}</p>
                                                    @endif
                                                    @if(!empty($item['title']))
                                                    <h3 class="text-uppercase fw-700" style="color: {{ $item['title_color'] ?? '#ffffff' }} !important;">{{ $item['title'] }}</h3>
                                                    @endif
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                            @if(count($gridItems) > 3)
                            <!-- Row 2: 4 images -->
                            <div class="row mobile-crs-width mt-lg-3 mt-2">
                                @foreach(array_slice($gridItems, 3, 4) as $item)
                                <div class="col-md-3 col-lg-3 mb-2 mb-md-0">
                                    <div class="category-item sec-cat-sec h-100">
                                        <div class="category-image h-100">
                                            <a href="#" class="block w-100 h-100">
                                                <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $section->name }}" class="img-fluid w-100 h-100" style="{{ $section->zoom_out_image ? 'object-fit: contain;' : 'aspect-ratio: 3/4; object-fit: cover;' }}">
                                            </a>
                                            @if(!empty($item['title']) || !empty($item['subtitle']))
                                            <div class="category-content">
                                                <div class="category-name fw-700">
                                                    @if(!empty($item['subtitle']))
                                                    <p style="color: {{ $item['subtitle_color'] ?? '#ffff00' }} !important; font-weight: bold; text-transform: uppercase;">{{ $item['subtitle'] }}</p>
                                                    @endif
                                                    @if(!empty($item['title']))
                                                    <h3 class="text-uppercase fw-700" style="color: {{ $item['title_color'] ?? '#ffffff' }} !important;">{{ $item['title'] }}</h3>
                                                    @endif
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                            @if(count($gridItems) > 7)
                            <!-- Row 3: 3 images -->
                            <div class="row mobile-crs-width mt-lg-3 mt-2">
                                @foreach(array_slice($gridItems, 7, 3) as $item)
                                <div class="col-md-4 col-lg-4 mb-2 mb-md-0">
                                    <div class="category-item h-100">
                                        <div class="category-image h-100">
                                            <a href="#" class="block w-100 h-100">
                                                <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $section->name }}" class="img-fluid w-100 h-100" style="{{ $section->zoom_out_image ? 'object-fit: contain;' : 'aspect-ratio: 3/4; object-fit: cover;' }}">
                                            </a>
                                            @if(!empty($item['title']) || !empty($item['subtitle']))
                                            <div class="category-content">
                                                <div class="category-name fw-700">
                                                    @if(!empty($item['subtitle']))
                                                    <p style="color: {{ $item['subtitle_color'] ?? '#ffff00' }} !important; font-weight: bold; text-transform: uppercase;">{{ $item['subtitle'] }}</p>
                                                    @endif
                                                    @if(!empty($item['title']))
                                                    <h3 class="text-uppercase fw-700" style="color: {{ $item['title_color'] ?? '#ffffff' }} !important;">{{ $item['title'] }}</h3>
                                                    @endif
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        @break

                    @case('grid_6')
                    @case('grid_6_no_gap')
                        @php
                            $gridItems = [];
                            if (!empty($section->advanced_images) && count($section->advanced_images) > 0) {
                                $gridItems = $section->advanced_images;
                            } elseif (!empty($section->images)) {
                                $gridItems = array_map(function($path) {
                                    return ['image' => $path, 'title' => null, 'subtitle' => null, 'title_color' => null, 'subtitle_color' => null];
                                }, $section->images);
                            }
                        @endphp
                        <div class="latest-collection-row">
                            <div class="grid {{ $section->layout_style == 'grid_6_no_gap' ? 'grid-cols-2 gap-2 lg:grid-cols-6 lg:gap-0' : 'grid-cols-2 gap-2 lg:grid-cols-6 lg:gap-2' }} md:max-w-full">
                                @foreach($gridItems as $item)
                                <div class="flex items-center position-relative">
                                    <a href="#" class="block w-100 h-100">
                                        <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $section->name }}" class="img-fluid" style="width: 100%; height: 100%; {{ $section->zoom_out_image ? 'object-fit: contain;' : 'aspect-ratio: 3/4; object-fit: cover;' }}">
                                    </a>
                                    @if(!empty($item['title']) || !empty($item['subtitle']))
                                    <div class="category-content" style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 15px;">
                                        <div class="category-name fw-700 text-left">
                                            @if(!empty($item['subtitle']))
                                            <p style="color: {{ $item['subtitle_color'] ?? '#ffffff' }} !important; font-weight: bold; font-size: 14px; text-transform: uppercase;">{{ $item['subtitle'] }}</p>
                                            @endif
                                            @if(!empty($item['title']))
                                            <h3 class="text-uppercase fw-700" style="color: {{ $item['title_color'] ?? '#ffffff' }} !important; font-size: 16px;">{{ $item['title'] }}</h3>
                                            @endif
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @break

                    @case('single_image')
                        @php
                            $singleItem = null;
                            if (!empty($section->advanced_images) && count($section->advanced_images) > 0) {
                                $singleItem = $section->advanced_images[0];
                            } elseif (!empty($section->images) && count($section->images) > 0) {
                                $singleItem = ['image' => $section->images[0], 'title' => null, 'subtitle' => null];
                            }
                        @endphp
                        @if($singleItem)
                        <div class="latest-collection-row position-relative w-100">
                            <a href="#" class="block w-100">
                                <img src="{{ asset('storage/' . $singleItem['image']) }}" alt="{{ $section->name }}" style="width:100%; height:auto;" class="img-fluid w-100">
                            </a>
                            @if(!empty($singleItem['title']) || !empty($singleItem['subtitle']))
                            <div class="category-content" style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 20px;">
                                <div class="category-name fw-700 text-center">
                                    @if(!empty($singleItem['subtitle']))
                                    <p style="color: {{ $singleItem['subtitle_color'] ?? '#ffff00' }} !important; font-weight: bold; text-transform: uppercase;">{{ $singleItem['subtitle'] }}</p>
                                    @endif
                                    @if(!empty($singleItem['title']))
                                    <h3 class="text-uppercase fw-700" style="color: {{ $singleItem['title_color'] ?? '#ffffff' }} !important;">{{ $singleItem['title'] }}</h3>
                                    @endif
                                </div>
                            </div>
                            @endif
                        </div>
                        @endif
                        @break

                    @case('grid_2')
                        <div class="latest-collection-row">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                                @foreach($section->images as $img)
                                <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                                    <a href="#" class="block w-full">
                                        <img src="{{ asset('storage/' . $img) }}" alt="{{ $section->name }}" class="w-full rounded-lg" style="{{ $section->zoom_out_image ? 'object-fit: contain;' : 'aspect-ratio: 16/9; object-fit: cover;' }}">
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @break

                    @case('grid_4')
                    @default
                        <div class="grid grid-cols-2 gap-2 sm:grid-cols-3 lg:grid-cols-4 lg:gap-2">
                            @foreach($section->images as $img)
                            <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                                <a href="#" class="block w-full">
                                    <img src="{{ asset('storage/' . $img) }}" alt="{{ $section->name }}" class="w-full rounded-lg" style="{{ $section->zoom_out_image ? 'object-fit: contain;' : 'aspect-ratio: 3/4; object-fit: cover;' }}">
                                </a>
                            </div>
                            @endforeach
                        </div>
                @endswitch
                @endif
                @if($section->has_explore_all)
                <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                    <a href="{{ $section->explore_all_link ?? '#' }}" class="see_all" style="font-size:10px; font-weight:700; color:#000; text-transform:uppercase; text-decoration:none; border-bottom: 2px solid #000; padding-bottom: 2px;">EXPLORE ALL</a>
                </div>
                @endif
            </div>
        </section>
            @elseif($section->videos && count($section->videos) > 0)
        <section class="categories-wrap mt-4 mb-5">
            <div class="container-fluid  container-wrapper">
                @if($section->show_title)
                <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
                    <h3 class="fw-700 text-uppercase">{{ $section->name }}</h3>
                </div>
                @endif
                @switch($section->layout_style ?? 'grid_4')
                    @case('slider_6')
                        <div class="swiper section-slider-6-{{ $section->id }}">
                            <div class="swiper-wrapper pb-8">
                                @foreach($section->videos as $vid)
                                @php $videoSrc = !empty($vid['upload']) ? asset('storage/' . $vid['upload']) : ($vid['link'] ?? ''); @endphp
                                @if($videoSrc)
                                <div class="swiper-slide">
                                    <a href="#" class="block w-full overflow-hidden rounded-lg">
                                        <video src="{{ $videoSrc }}" autoplay loop muted playsinline class="w-full rounded-lg transition-transform duration-300 ease-in-out hover:scale-110"></video>
                                    </a>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                if (typeof Swiper !== 'undefined') {
                                    new Swiper('.section-slider-6-{{ $section->id }}', {
                                        slidesPerView: 4,
                                        spaceBetween: 20,
                                        autoplay: { delay: 3000, disableOnInteraction: false },
                                        pagination: { el: '.swiper-pagination', clickable: true },
                                        breakpoints: {
                                            320: { slidesPerView: 2, spaceBetween: 10 },
                                            576: { slidesPerView: 3, spaceBetween: 15 },
                                            768: { slidesPerView: 4, spaceBetween: 20 },
                                        }
                                    });
                                }
                            });
                        </script>
                        @break

                    @case('slider_3_zoomed')
                        <div class="swiper section-slider-3-{{ $section->id }} overflow-hidden">
                            <div class="swiper-wrapper py-6 pb-12">
                                @foreach($section->videos as $vid)
                                @php $videoSrc = !empty($vid['upload']) ? asset('storage/' . $vid['upload']) : ($vid['link'] ?? ''); @endphp
                                @if($videoSrc)
                                <div class="swiper-slide">
                                    <a href="#" class="block w-full overflow-hidden rounded-lg">
                                        <video src="{{ $videoSrc }}" autoplay loop muted playsinline class="w-full rounded-lg transition-transform duration-300 ease-in-out hover:scale-110"></video>
                                    </a>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                if (typeof Swiper !== 'undefined') {
                                    new Swiper('.section-slider-3-{{ $section->id }}', {
                                        slidesPerView: 3,
                                        spaceBetween: 10,
                                        loop: true,
                                        autoplay: { delay: 3000, disableOnInteraction: false },
                                        pagination: { el: '.swiper-pagination', clickable: true },
                                        breakpoints: {
                                            640: { slidesPerView: 3, spaceBetween: 15 },
                                            1024: { slidesPerView: 3, spaceBetween: 20 },
                                        }
                                    });
                                }
                            });
                        </script>
                        @break

                    @case('grid_5')
                        <div class="swiper section-slider-5-{{ $section->id }}">
                            <div class="swiper-wrapper pb-8">
                                @foreach($section->videos as $vid)
                                @php $videoSrc = !empty($vid['upload']) ? asset('storage/' . $vid['upload']) : ($vid['link'] ?? ''); @endphp
                                @if($videoSrc)
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="product-post mb-0">
                                            <div class="product-image round-corner">
                                                <video src="{{ $videoSrc }}" autoplay loop muted playsinline class="main-video rounded-lg w-full"></video>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                if (typeof Swiper !== 'undefined') {
                                    new Swiper('.section-slider-5-{{ $section->id }}', {
                                        slidesPerView: 5,
                                        spaceBetween: 15,
                                        loop: false,
                                        pagination: { el: '.swiper-pagination', clickable: true },
                                        breakpoints: {
                                            320: { slidesPerView: 2, spaceBetween: 10 },
                                            640: { slidesPerView: 3, spaceBetween: 10 },
                                            1024: { slidesPerView: 5, spaceBetween: 15 },
                                        }
                                    });
                                }
                            });
                        </script>
                        @break

                    @case('grid_4')
                    @default
                        <div class="grid grid-cols-2 gap-2 sm:grid-cols-3 lg:grid-cols-4 lg:gap-2">
                            @foreach($section->videos as $vid)
                            @php $videoSrc = !empty($vid['upload']) ? asset('storage/' . $vid['upload']) : ($vid['link'] ?? ''); @endphp
                            @if($videoSrc)
                            <div class="flex justify-center items-center w-full hover:brightness-[.95] transition-all duration-300 ease-out">
                                <a href="#" class="block w-full">
                                    <video src="{{ $videoSrc }}" autoplay loop muted playsinline class="w-full rounded-lg"></video>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                @endswitch
                @if($section->has_explore_all)
                <div class="heading-txt d-flex align-items-center justify-content-center mt-10 text-left">
                    <a href="{{ $section->explore_all_link ?? '#' }}" class="see_all" style="font-size:10px; font-weight:700; color:#000; text-transform:uppercase; text-decoration:none; border-bottom: 2px solid #000; padding-bottom: 2px;">EXPLORE ALL</a>
                </div>
                @endif
            </div>
        </section>
            @endif
        @endforeach
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



    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const countdowns = document.querySelectorAll('.countdown-section');
            countdowns.forEach(section => {
                const endTimeStr = section.getAttribute('data-endtime');
                if (!endTimeStr) return;
                const countDownDate = new Date(endTimeStr).getTime();

                const hoursEl = section.querySelector('.hours');
                const minsEl = section.querySelector('.mins');
                const secsEl = section.querySelector('.secs');

                const x = setInterval(function() {
                    const now = new Date().getTime();
                    const distance = countDownDate - now;

                    if (distance < 0) {
                        clearInterval(x);
                        hoursEl.innerHTML = "0";
                        minsEl.innerHTML = "0";
                        secsEl.innerHTML = "0";
                        return;
                    }

                    const hours = Math.floor(distance / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    hoursEl.innerHTML = hours;
                    minsEl.innerHTML = minutes;
                    secsEl.innerHTML = seconds;
                }, 1000);
            });
        });
    </script>
@include('website.footer')