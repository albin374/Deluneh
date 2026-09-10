@include('website.header')
@include('website.nav')
<style>
body {
    overflow-x: visible !important;
}
.navigation {
    display: none;
}
.highlated-sale.top-highlated.d-lg-block.d-none{
   display:none!important; 
}
    @media screen and (max-width: 768px) {
    .product-container {
        padding: 0px 10px!important;
    }
    .product-detail {
        line-height: 18px;
    }
    .product_banner {
        /*margin-top:10px;*/
        padding: 0px 10px 0px!important;
    }
    .mobile-filter-category {
        z-index: 93;
        position: sticky;
        top: 67px;
        background: #fff;
        width: 100%;
        /* padding: 10px; */
        background: #fff !important;
        backdrop-filter: blur(12px) !important;
        padding: 8px 0px;
    }
    .mobile-filter-category ul li {
        width: 33.33% !important;
    }

    .mobile-filter-category ul li {
        border-right: 1px solid #00000052;
    }
    .mobile-filter-category ul li {
        text-align: center;
        display: inline-block;
        float: left;
        width: 50%;
        /* padding: 13px 10px; */
    }
    
    .mobile-filter-category ul li a {
        display: flex;
        align-items: center;
        justify-content: center;
        column-gap: 4px;
    }
    #product-none{
        display:none!important;
    }
    .main-header{
        box-shadow:none!important;
    }
        .main--wrapper {
        margin-top: 69px !important;
    }
}
.main--wrapper {
        margin-top: 97px !important;
    }

.quick-filter-wrapper[data-v-6cee8452] {
    padding: 0px 10px;
    display: flex;
    justify-content: end;
    position: sticky;
    top: 107px;
    z-index: 93;
    background: #fff;
}
.quick-filter-container[data-v-6cee8452] {
    display: flex;
    justify-content: start;
    min-width: 100%;
}
.quick-filters-container[data-v-26f680c0] {
    overflow-x: auto;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
    -ms-overflow-style: none;
}
.quick-filters[data-v-26f680c0] {
    display: inline-block;
    padding: 10px 0;
}
.filter-chip[data-v-26f680c0] {
    display: inline-block;
    margin-right: 10px;
    min-width: 60px !important;
    height: 30px;
    padding: 3px 7px;
    border-radius: 8px;
    border: 1px solid #ddd;
    color: #222;
    background: #fff;
    white-space: nowrap;
    cursor: pointer;
    font-size: 12px;
    outline: none;
}
</style>
<div class="special-page">
<div class="mobile-filter-category hidden-large" style="bottom:none;">
    <ul class="mobile-filter-flex d-flex align-items-center">
        <li class="filter_btn">
            <a href="javascript: void(0);">
                <span class="filter-mob-text">MEN</span>
            </a>
        </li>
        <li class="filter_btn">
            <a href="javascript: void(0);">
                <span class="filter-mob-text">WOMEN</span>
            </a>
        </li>
        <li class="kids_btn">
            <a href="javascript: void(0);">
                <span class="filter-mob-text">KIDS</span>
            </a>
        </li>
    </ul>
</div>
<section class="product_banner">
   <div class="container-fluid p-0">
       <div class="row">
           <div class="col-md-12">
               
           </div>
       </div>
         @if(request()->is('woman/clothing') || (isset($currentCategory) && $currentCategory->slug == 'clothing' && isset($genderSlug) && $genderSlug == 'woman'))
           <img src="{{ asset('images/Spiderman_restock_Home_page-1_8VM1dtD.avif') }}" class="img-fluid w-100 hide-mobile" style="aspect-ratio: 1500/384; object-fit: cover; object-position: center;" alt="">
           <img src="{{ asset('images/Spiderman_restock_Home_page-1_8VM1dtD.avif') }}" class="img-fluid hidden-large w-100" alt="">
         @elseif(request()->is('men/footwear') || request()->is('footwear') || (isset($currentCategory) && $currentCategory->slug == 'footwear'))
           <img src="{{ asset('images/bannerfootwearmen.webp') }}" class="img-fluid w-100 hide-mobile" style="aspect-ratio: 1500/384; object-fit: cover; object-position: center;" alt="">
           <img src="{{ asset('images/bannerfootwearmen.webp') }}" class="img-fluid hidden-large w-100" alt="">
         @elseif(request()->is('plus-size') || request()->is('plus-size/*') || (isset($currentCategory) && $currentCategory->slug == 'plus-size' || (isset($currentCategory) && $currentCategory->parent && $currentCategory->parent->slug == 'plus-size')))
           <img src="{{ asset('images/c1AvydE0os.webp') }}" class="img-fluid w-100 hide-mobile" style="aspect-ratio: 1500/384; object-fit: cover; object-position: center;" alt="">
           <img src="{{ asset('images/c1AvydE0os.webp') }}" class="img-fluid hidden-large w-100" alt="">
         @elseif(request()->is('bags') || (isset($currentCategory) && $currentCategory->slug == 'bags'))
           <img src="{{ asset('images/bags.png') }}" class="img-fluid w-100 hide-mobile" style="max-height: 400px; object-fit: cover; object-position: top;" alt="">
           <img src="{{ asset('images/bags.png') }}" class="img-fluid hidden-large w-100" style="object-fit: cover; object-position: top;" alt="">
         @elseif(isset($markdownBanners) && $markdownBanners->count() > 0)
            <div class="container my-5">
                <div class="row justify-content-center">
                    @foreach($markdownBanners as $banner)
                        @php
                            $colClass = $banner->orientation === 'vertical' ? 'col-lg-4 col-md-6' : 'col-lg-8 col-md-10';
                        @endphp
                        <div class="{{ $colClass }} mb-5 text-center">
                            @if($banner->link)
                                <a href="{{ $banner->link }}">
                            @endif
                            <img src="{{ asset('storage/' . $banner->image) }}" class="img-fluid" style="width: 100%; border-radius: 12px; object-fit: cover; object-position: center;" alt="Mark Down Banner">
                            @if($banner->link)
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
         @elseif(request()->is('mark-downs'))
            <div class="container my-5 text-center py-5">
                <h4 style="color: #666; font-weight: normal;">Sorry, currently DE LUNEH store has no mark downs right now. Visit next time! 😊</h4>
            </div>
         @else
           <img src="{{ asset('images/product_banner.jpg') }}" class="img-fluid hide-mobile w-100" alt="">
           <!--<img src="/images/product_banner_mob.jpg" class="img-fluid hidden-large" style="border-radius:4px;" alt="">-->
           <video class="hidden-large w-100"
                src="{{ asset('images/istockphoto-1954855689-640_adpp_is.mp4') }}"
                autoplay
                muted
                loop
                playsinline
                style="border-radius:4px;"
            ></video>
       @endif
                                                
       <!--<img src="https://prod-img.thesouledstore.com/public/theSoul/storage/mobile-cms-media-prod/banner-images/fandom_feb_mobile_copy_chnage.png?w=768&dpr=2" class="img-fluid hidden-large" alt="" style="width:100%;height:180px;border-radius:4px;">-->
   </div> 
</section>
@if(!request()->is('mark-downs'))
<div data-v-6cee8452="" class="quick-filter-wrapper d-block d-lg-none"><div data-v-6cee8452="" class="quick-filter-container"><div data-v-26f680c0="" data-v-6cee8452="" class="quick-filters-container"><div data-v-26f680c0="" class="quick-filters"><button data-v-26f680c0="" class="filter-chip">
      Oversized T-Shirts
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Oversized T-Shirts
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Relaxed Fit T-Shirts
    </button><button data-v-26f680c0="" class="filter-chip">
      Socks
    </button><button data-v-26f680c0="" class="filter-chip">
      Collectibles
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Oversized Sweaters
    </button><button data-v-26f680c0="" class="filter-chip">
      Boyfriend T-Shirts
    </button><button data-v-26f680c0="" class="filter-chip">
      Men Oversized Hoodies
    </button><button data-v-26f680c0="" class="filter-chip">
      Oversized Full Sleeve T-Shirts
    </button><button data-v-26f680c0="" class="filter-chip">
      Oversized Polos
    </button><button data-v-26f680c0="" class="filter-chip">
      Boxer Shorts
    </button><button data-v-26f680c0="" class="filter-chip">
      Oversized Pullovers
    </button><button data-v-26f680c0="" class="filter-chip">
      Oversized Shirts
    </button><button data-v-26f680c0="" class="filter-chip">
      T-Shirts
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Knitted Sweaters
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Oversized Jerseys
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Oversized Sweatshirts
    </button><button data-v-26f680c0="" class="filter-chip">
      Backpacks
    </button><button data-v-26f680c0="" class="filter-chip">
      Holiday Shirts
    </button><button data-v-26f680c0="" class="filter-chip">
      Hooded T-Shirts
    </button><button data-v-26f680c0="" class="filter-chip">
      Iron On Patches
    </button><button data-v-26f680c0="" class="filter-chip">
      Men Clogs
    </button><button data-v-26f680c0="" class="filter-chip">
      Men Lounge Shorts
    </button><button data-v-26f680c0="" class="filter-chip">
      Men Oversized Sweatshirts
    </button><button data-v-26f680c0="" class="filter-chip">
      Men Relaxed Fit T-Shirts
    </button><button data-v-26f680c0="" class="filter-chip">
      Men Rugby Polos
    </button><button data-v-26f680c0="" class="filter-chip">
      Pajamas
    </button><button data-v-26f680c0="" class="filter-chip">
      Super Oversized T-Shirts
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Co-ord Sets
    </button><button data-v-26f680c0="" class="filter-chip">
      Boys Cotton T-Shirts (2-8 Yrs)
    </button><button data-v-26f680c0="" class="filter-chip">
      Girls Cotton Sweatshirts (2-8 Yrs)
    </button><button data-v-26f680c0="" class="filter-chip">
      Half Sleeve Shirts
    </button><button data-v-26f680c0="" class="filter-chip">
      Jackets
    </button><button data-v-26f680c0="" class="filter-chip">
      Polos
    </button><button data-v-26f680c0="" class="filter-chip">
      Pullovers
    </button><button data-v-26f680c0="" class="filter-chip">
      Rugs
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Boyfriend Shirts
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Cropped Rugby Polos
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Cropped Sweaters
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Cropped Tops
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Flared Joggers
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Lounge Shorts
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Oversized Cropped T-Shirts
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Oversized Varsity Jackets
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Pants
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Puffer Jackets
    </button><button data-v-26f680c0="" class="filter-chip">
      Women Sweatshirts
    </button><button data-v-26f680c0="" class="filter-chip">
      Zipper Polos
    </button></div></div></div></div>
<div class="product-container p-0">
    <div class="container-fluid">
                        <div class="row hide-mobile">
                    <div class="product_listing_count pdct_slct-sort d-flex justify-content-end">
                        <div class="col-md-9">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="breadcrumbs_nav">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb" style="font-size:12px;">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            @if(isset($category))
                                <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                            @else
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                            @endif
                          </ol>
                        </nav>
                        <p style="font-size:15px;">
                            {{ isset($category) ? $category->name : 'Products' }} - <span id="product-count-display">{{ isset($products) ? $products->count() : 0 }}</span> items
                        </p>
                        </div>
                            <!--<p>Showing <strong>50 of 2283</strong></p>-->
                            <div class="selectBox">
                                <select class="form-select" aria-label="Default select example">
                                  <option value="">Select Sorting Options</option>
                                  <option value="1">A to Z</option>
                                  <option value="2">Price-High to Low</option>
                                  <option value="3">Price-Low to High</option>
                                  <option value="3">Newest</option>
                                  <option value="4" selected>Popularity</option>
                                </select>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
<style>
    .sidebar{
    width:300px;
    background:#fff;
    padding:20px;
    height: calc(100vh - 97px);
    overflow-y:auto;
    border-right:1px solid #eee;
    position: sticky;
    top: 97px;
}

.sidebar::-webkit-scrollbar {
    width: 5px;
}

.sidebar::-webkit-scrollbar-thumb {
    background: #eee;
    border-radius: 10px;
}

@media (min-width: 992px) {
    .product-list-scroll {
        height: calc(100vh - 97px);
        overflow-y: auto;
        padding-bottom: 50px;
    }
    
    .product-list-scroll::-webkit-scrollbar {
        width: 5px;
    }
    
    .product-list-scroll::-webkit-scrollbar-thumb {
        background: #eee;
        border-radius: 10px;
    }
}

.filter-title{
    font-size:14px;
    font-weight:600;
    letter-spacing:1px;
    margin-bottom:15px;
}

.search-filter{
    width:100%;
    padding:10px;
    border:1px solid #ddd;
    border-radius:6px;
    margin-bottom:15px;
    font-size:13px;
}

.category-item{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:10px;
    font-size:14px;
}

.category-item input{
    margin-right:8px;
}

.more-link{
    color:#00a896;
    font-size:14px;
    cursor:pointer;
    margin-top:5px;
}

/* SIZE PILLS */

.size-grid{
    display:flex;
    flex-wrap:wrap;
    gap:10px;
    margin-top:10px;
}

.size-pill{
    padding:6px 12px;
    border:1px solid #333;
    border-radius:8px;
    font-size:13px;
    cursor:pointer;
    background:#fff;
    transition:.2s;
}

.size-pill.active{
    background:#000;
    color:#fff;
}

<style>
#customFilterWrapper * {
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

#customFilterWrapper .cf-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.3);
  display: flex;
  justify-content: flex-start;
  z-index: 9999;
}

#customFilterWrapper .cf-panel {
  width: 100%;
  background: #f2f2f2;
  height: 100%;
  display: flex;
  flex-direction: column;
}

#customFilterWrapper .cf-header {
  display: flex;
  align-items: center;
  padding: 15px;
  background: #fff;
  border-bottom: 1px solid #ddd;
}

#customFilterWrapper .cf-title {
  font-weight: bold;
  flex: 1;
}

#customFilterWrapper .cf-clear {
  margin-right: 15px;
  color: #666;
  cursor: pointer;
  font-size: 14px;
}

#customFilterWrapper .cf-close {
  cursor: pointer;
  font-size: 20px;
}

#customFilterWrapper .cf-body {
  display: flex;
  flex: 1;
}

#customFilterWrapper .cf-tabs {
  width: 120px;
  background: #e6e6e6;
}

#customFilterWrapper .cf-tab {
  padding: 15px;
  cursor: pointer;
  border-bottom: 1px solid #d0d0d0;
  font-size: 14px;
}

#customFilterWrapper .cf-tab.active {
  background: #dcdcdc;
  font-weight: bold;
}

#customFilterWrapper .cf-content {
  flex: 1;
  background: #fff;
  padding: 10px;
  overflow-y: auto;
}

#customFilterWrapper .cf-tab-content {
  display: none;
}

#customFilterWrapper .cf-tab-content.active {
  display: block;
}

#customFilterWrapper .cf-item {
  display: flex;
  align-items: center;
  padding: 10px 5px;
  border-bottom: 1px solid #eee;
  font-size: 14px;
}

#customFilterWrapper .cf-item span:first-child {
  flex: 1;
}

#customFilterWrapper .cf-count {
  margin-right: 10px;
  color: #888;
}

#customFilterWrapper input[type="checkbox"] {
  width: 16px;
  height: 16px;
  cursor: pointer;
}

#customFilterWrapper .cf-footer {
  /*display: flex;*/
  border-top: 1px solid #ccc;
  background: #f7f7f7;
}

#customFilterWrapper .cf-btn {
  flex: 1;
  padding: 15px 0;
  border: none;
  font-weight: bold;
  cursor: pointer;
  font-size: 14px;
  background: #f7f7f7;
}


#customFilterWrapper .cf-close-btn {
  color: #000;
}

#customFilterWrapper .cf-apply-btn {
  color: #0f7c6b;
}
.filter-mobile-slide{
    display:none;
}
@media (max-width: 767px) {
    .accordion-wrapper {
        position: relative;
        margin-bottom: 48px;
        padding-bottom: 10px;
    }
}

@media (max-width: 767px) {
    .product-title {
        width:100%!important;
    }
    .mobile-filter ul li {
        width: 33.33%!important;
    }
}
@media (min-width: 992px) {
.product-container {
    padding:0px 0px 30px!important;
}
}
</style>

 <div class="mobile-filter hidden-large">
    <ul class="mobile-filter-flex">
        <li class="filter_btn">
            <a id="filter_btn_a">
                <span class="filter-icon">
                    <svg enable-background="new 0 0 32 32" id="Editable-line" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="  M3.241,7.646L13,19v9l6-4v-5l9.759-11.354C29.315,6.996,28.848,6,27.986,6H4.014C3.152,6,2.685,6.996,3.241,7.646z" fill="none" id="XMLID_6_" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></svg>
                </span>
                <span class="filter-mob-text">Filter</span>
            </a>
        </li>
        <li class="sort_btn">
            <a href="javascript: void(0);">
                <span class="filter-icon">
                   <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8 16H4l6 6V2H8zm6-11v17h2V8h4l-6-6z"/></svg>
                </span>
                <span class="filter-mob-text">Sort</span>
            </a>
        </li>
        <li class="filter_btn menu_sliding_icon">
            <a id="menu_btn_a">
                <span class="filter-icon">
                   <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 8H28M4 16H28M4 24H28"
                              fill="none"
                              stroke="#000"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </span>
                <span class="filter-mob-text">Menu</span>
            </a>
        </li>

    </ul>
</div>
<div class="sort_section">
    <div class="sort_heading" style="border-bottom:none;">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center"><svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8 16H4l6 6V2H8zm6-11v17h2V8h4l-6-6z"/></svg>
            <h5>SORT BY</h5></div>
            <div class="sort_close">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
    </div>

    <div class="sort_list">
        <ul>

            <li>
                <label class="sort_option">
                    <input type="radio" name="sort_by" value="a_to_z">
                    <span>A to Z</span>
                </label>
            </li>

            <li>
                <label class="sort_option">
                    <input type="radio" name="sort_by" value="high_to_low">
                    <span>Price: High to Low</span>
                </label>
            </li>

            <li>
                <label class="sort_option">
                    <input type="radio" name="sort_by" value="low_to_high">
                    <span>Price: Low to High</span>
                </label>
            </li>

            <li>
                <label class="sort_option">
                    <input type="radio" name="sort_by" value="newest">
                    <span>Newest</span>
                </label>
            </li>

            <li>
                <label class="sort_option">
                    <input type="radio" name="sort_by" value="popularity">
                    <span>Popularity</span>
                </label>
            </li>

        </ul>
    </div>
</div>
<!-- <div class="overlay_bg hidden-large"></div> -->
<div class="filter-mobile-slide">
    <!-- FILTER COMPONENT START -->
<div id="customFilterWrapper">

  <div class="cf-overlay">
    <div class="cf-panel">

      <div class="cf-header">
        <div class="cf-title">Filter</div>
      <div class="cf-clear">Clear All</div>
        <div class="cf-close">&times;</div>
      </div>

      <div class="cf-body">
        <div class="cf-tabs">
          <div class="cf-tab active" data-tab="categories">Categories</div>
          <div class="cf-tab" data-tab="size">Size</div>
          <div class="cf-tab" data-tab="prices">Prices</div>
        </div>

        <div class="cf-content">

          <!-- Categories -->
          <div class="cf-tab-content active" id="categories">
            <div class="cf-item">
              <span>Bomber Jackets</span>
              <span class="cf-count">2</span>
              <input type="checkbox">
            </div>
            <div class="cf-item">
              <span>Cotton Linen Pants</span>
              <span class="cf-count">7</span>
              <input type="checkbox">
            </div>
            <div class="cf-item">
              <span>Cotton Linen Shirts</span>
              <span class="cf-count">102</span>
              <input type="checkbox">
            </div>
          </div>



          <!-- Size -->
          <div class="cf-tab-content" id="size">
            <div class="cf-item">
              <span>Men Bermuda Shorts</span>
              <span class="cf-count">1</span>
              <input type="checkbox">
            </div>
            <div class="cf-item">
              <span>Men Co-Ord Sets</span>
              <span class="cf-count">2</span>
              <input type="checkbox">
            </div>
          </div>

          <!-- Prices -->
          <div class="cf-tab-content" id="prices">
            <div class="cf-item">
              <span>Overshirts</span>
              <span class="cf-count">3</span>
              <input type="checkbox">
            </div>
            <div class="cf-item">
              <span>Oversized Shirts</span>
              <span class="cf-count">2</span>
              <input type="checkbox">
            </div>
          </div>

        </div>
      </div>
      <div class="cf-footer">
  <div class="row">
    <div class="col-6 col-md-6 text-center" style="border-right: 1px solid #ccc;
">
      <button class="cf-btn cf-close-btn">CLOSE</button>
    </div>
    <div class="col-6 col-md-6 text-center">
      <button class="cf-btn cf-apply-btn">APPLY</button>
    </div>
  </div>
</div>

    </div>
  </div>
</div>
<!-- FILTER COMPONENT END -->
</div>
        <div class="row">
            <div class="col-md-3 d-none d-lg-block">
                <div class="sidebar">

    <div style="font-size: 20px; font-weight: bold; margin-bottom: 20px; text-transform: uppercase;">Filters</div>
    <div class="filter-title">CATEGORIES</div>

    <div id="categoryList">
        @if(isset($currentCategory) && $currentCategory->children->isNotEmpty())
            @foreach($currentCategory->children as $childCat)
                <label class="category-item" style="color: #0f7c6b; font-weight: bold;">
                    <span>
                        <input type="checkbox" class="category-filter-checkbox" value="{{ $childCat->name }}"> 
                        {{ $childCat->name }}
                    </span>
                    <span></span>
                </label>
            @endforeach
            <hr style="margin:10px 0; border-top: 1px dashed #ccc;">
        @else
            @php
                $availableGenders = [];
                $availableCategories = [];
                if (isset($products)) {
                    foreach($products as $prod) {
                        if ($prod->category) {
                            $catName = $prod->category->name;
                            if ($catName) {
                                $availableCategories[$catName] = $catName;
                            }
                            $cat = $prod->category;
                            while($cat->parent) {
                                $cat = $cat->parent;
                            }
                            $gName = trim(strtolower($cat->name));
                            if ($gName == 'woman') $gName = 'women';
                            if ($gName) {
                                $availableGenders[$gName] = ucfirst($gName);
                            }
                        }
                    }
                }
            @endphp
            @if(count($availableCategories) > 0)
                @foreach($availableCategories as $cName)
                    <label class="category-item" style="color: #0f7c6b; font-weight: bold;">
                        <span>
                            <input type="checkbox" class="category-filter-checkbox" value="{{ $cName }}"> 
                            {{ $cName }}
                        </span>
                        <span></span>
                    </label>
                @endforeach
                <hr style="margin:10px 0; border-top: 1px dashed #ccc;">
            @endif
            @if(count($availableGenders) > 0)
                <div class="filter-title mt-4">GENDER</div>
                @foreach($availableGenders as $gKey => $gLabel)
                    <label class="category-item" style="color: #0f7c6b; font-weight: bold;">
                        <span>
                            <input type="checkbox" class="gender-filter-checkbox" value="{{ $gKey }}"> 
                            {{ $gLabel }}
                        </span>
                        <span></span>
                    </label>
                @endforeach
                <hr style="margin:10px 0; border-top: 1px dashed #ccc;">
            @endif
        @endif
    </div>

    <hr style="margin:25px 10px 0px;">

    @php
        $allSizes = [];
        $minPrice = 0;
        $maxPrice = 0;
        if (isset($products) && $products->count() > 0) {
            $minPrice = $products->min('price');
            $maxPrice = $products->max('price');
            
            foreach ($products as $product) {
                if (is_array($product->sizes)) {
                    $allSizes = array_merge($allSizes, $product->sizes);
                } elseif (is_string($product->sizes)) {
                    $decoded = json_decode($product->sizes, true);
                    if(is_array($decoded)) {
                         $allSizes = array_merge($allSizes, $decoded);
                    }
                }
            }
            $allSizes = array_unique($allSizes);
            
            // Custom sort for standard sizes
            $sizeOrder = ['XS' => 1, 'S' => 2, 'M' => 3, 'L' => 4, 'XL' => 5, 'XXL' => 6, 'XXXL' => 7];
            usort($allSizes, function($a, $b) use ($sizeOrder) {
                $valA = $sizeOrder[$a] ?? 99;
                $valB = $sizeOrder[$b] ?? 99;
                if ($valA == $valB) return strcmp($a, $b);
                return $valA - $valB;
            });
        }

        $clothingSizes = [];
        $footwearSizes = [];
        foreach($allSizes as $size) {
            if(is_numeric($size)) {
                $footwearSizes[] = $size;
            } else {
                $clothingSizes[] = $size;
            }
        }
        sort($footwearSizes);
        
        $priceRanges = [];
        if ($maxPrice > 0) {
            $step = max(500, ceil(($maxPrice - $minPrice) / 4 / 100) * 100);
            if ($step == 0) $step = 500; // prevent zero division or step
            $start = floor($minPrice / $step) * $step;
            $end = ceil($maxPrice / $step) * $step;
            if ($start == $end) {
                $end = $start + $step;
            }
            
            for ($i = $start; $i < $end; $i += $step) {
                $rangeMin = $i;
                $rangeMax = $i + $step - 1;
                $rangeCount = $products->whereBetween('price', [$rangeMin, $rangeMax])->count();
                if ($rangeCount > 0) {
                    $priceRanges[] = [
                        'label' => 'Rs. ' . $rangeMin . ' - Rs. ' . $rangeMax,
                        'value' => $rangeMin . '-' . $rangeMax,
                        'count' => $rangeCount
                    ];
                }
            }
        }
    @endphp

    @if(count($clothingSizes) > 0)
        <div class="filter-title mt-4">CLOTHING SIZE</div>
        <div class="size-grid" id="clothingSizeList">
            @foreach($clothingSizes as $size)
                <div class="size-pill" data-size="{{ $size }}">{{ $size }}</div>
            @endforeach
        </div>
    @endif

    @if(count($footwearSizes) > 0)
        <div class="filter-title mt-4">FOOTWEAR SIZE</div>
        <div class="size-grid" id="footwearSizeList">
            @foreach($footwearSizes as $size)
                <div class="size-pill" data-size="{{ $size }}">{{ $size }}</div>
            @endforeach
        </div>
    @endif
    
    <hr style="margin:25px 10px 0px;">

    <div class="filter-title mt-4">PRICES</div>
   
    <div id="priceList">
        @foreach($priceRanges as $range)
            <label class="category-item">
                <span><input type="radio" name="price_range" value="{{ $range['value'] }}" class="price-filter-radio"> {{ $range['label'] }}</span>
                <span>{{ $range['count'] }}</span>
            </label>
        @endforeach
    </div>

</div>
             
            </div>
            <style>
                .image-hover a {
                    position: relative;
                    display: block;
                }
                .image-hover .second-img {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    opacity: 0;
                    transition: opacity 0.3s ease;
                }
                .image-hover:hover .second-img {
                    opacity: 1;
                }
                .wishlistIcon.wishlist {
                    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .16);
                    background-color: rgba(0, 0, 0, .2);
                }
                .wishlistIcon {
                    width: 30px;
                    height: 30px;
                    background-color: rgba(0, 0, 0, .2);
                    border-radius: 50%;
    text-align: center;
    line-height: 30px;
    position: absolute;
    top: 15px;
    right: 15px;
    z-index: 92;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .16);
    cursor: pointer;
}
.wishlistIcon {
    width: 30px;
    height: 30px;
    background-color: rgba(0, 0, 0, .2);
    border-radius: 50%;
    text-align: center;
    line-height: 30px;
    position: absolute;
    top: 15px;
    right: 15px;
    z-index: 92;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .16);
    cursor: pointer;
}
.pb-2, .py-2 {
    padding-bottom: .5rem !important;
}
.pl-1, .px-1 {
    padding-left: .25rem !important;
}
.pr-1, .px-1 {
    padding-right: .25rem !important;
}

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
.floating-menu.hidden-large{
    display:none!important;
}
#chipBarWrapper {
  position: sticky;       /* sticks while scrolling */
  top: 70px;              /* adjust based on navbar height */
  z-index: 93;
  /*background: #f5f5f5;*/
  /*border-bottom: 1px solid #ddd;*/
}

#chipBarWrapper .chip-bar {
  display: flex;
  overflow-x: auto;
  white-space: nowrap;
  /*padding: 10px;*/
  gap: 10px;
  scrollbar-width: none; /* Firefox */
}

#chipBarWrapper .chip-bar::-webkit-scrollbar {
  display: none; /* Chrome */
}

#chipBarWrapper .chip {
    font-size:12px;
  flex: 0 0 auto;
  padding: 4px 7px;
  border: 1px solid #ccc;
  border-radius: 8px;
  background: #fff;
  font-size: 12px;
  cursor: pointer;
  transition: 0.2s ease;
}

#chipBarWrapper .chip:hover {
  background: #eaeaea;
}

#chipBarWrapper .chip.active {
  background: #000;
  color: #fff;
  border-color: #000;
}
.width-small{
    width:125px!important;
}
            </style>
                          

            <div class="col-md-9">
  

                <div class="product_shwings">

                    <div class="pdct_showing_main_list">
                        <div class="row">
                            @if(isset($products) && $products->count() > 0)
                                  @foreach($products as $product)
                                  @php
                                      $topCategoryName = '';
                                      if ($product->category) {
                                          $cat = $product->category;
                                          while($cat->parent) {
                                              $cat = $cat->parent;
                                          }
                                          $topCategoryName = trim(strtolower($cat->name));
                                          if ($topCategoryName == 'woman') $topCategoryName = 'women';
                                      }
                                  @endphp
                                  <div class="col-md-3 col-6 product" data-category="{{ $product->category ? $product->category->name : '' }}" data-gender="{{ $topCategoryName }}" data-price="{{ $product->price }}" data-sizes="{{ json_encode($product->sizes ?? []) }}">
                                      <div class="product-card d-none d-lg-block mt-2">
                                          <div class="card image-hover" style="border:none!important;">
                                              <a href="{{ route(\App\Constants\RouteNames::SINGLE_PRODUCT_INDEX, ['slug' => $product->slug]) }}">
                                                  @php
                                                      $image1 = !empty($product->images) && isset($product->images[0]) ? asset('storage/' . $product->images[0]) : 'https://prod-img.thesouledstore.com/public/theSoul/uploads/catalog/product/1712574694_1119733.jpg?w=300&dpr=1';
                                                      $image2 = !empty($product->images) && isset($product->images[1]) ? asset('storage/' . $product->images[1]) : $image1;
                                                  @endphp
                                                  <img src="{{ $image1 }}" class="card-img-top first-img" alt="{{ $product->name }}" style="aspect-ratio: 3/4; object-fit: cover; width: 100%; background-color: #f5f5f5;">
                                                  <img src="{{ $image2 }}" class="card-img-top second-img" alt="{{ $product->name }}" style="aspect-ratio: 3/4; object-fit: cover; width: 100%; background-color: #f5f5f5;">
                                              </a>
                                              @php
                                                  $inWishlist = isset(session('wishlist')[$product->id]);
                                                  $heartFill = $inWishlist ? '#e02b2b' : 'none';
                                                  $heartStroke = $inWishlist ? '#e02b2b' : '#ffffff';
                                              @endphp
                                              <div class="wishlistIcon pl-1 pb-2 pr-1 wishlist" data-product-id="{{ $product->id }}">
                                                  <svg width="18" height="18" viewBox="0 0 24 24" fill="{{ $heartFill }}">
                                                      <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3 c1.74 0 3.41 0.81 4.5 2.09 C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5 c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" stroke="{{ $heartStroke }}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                  </svg>
                                              </div>
                                              <div class="product-detail p-1 product-title">
                                                  <h5 class="text-left" style="font-size: 14px; text-transform: capitalize; padding-bottom: 4px; margin-bottom: 4px;">{{ $product->name }}</h5>
                                                  <span style="font-size: 11px;">{{ $product->category ? $product->category->name : 'Category' }}</span>
                                                  <p class="item-price" style="margin-top: 4px;">
                                                      @if($product->discount_price)
                                                          <span class="offer_price_number">₹{{ round($product->discount_price) }}</span>
                                                          <span class="price_number" style="text-decoration: line-through; color: #999; margin-left: 5px;">₹{{ round($product->price) }}</span>
                                                      @else
                                                          <span class="offer_price_number">₹{{ round($product->price) }}</span>
                                                      @endif
                                                  </p>
                                              </div>
                                          </div>
                                      </div>

                                      <!-- Mobile Card for Dynamic Product -->
                                      <div class="product-card d-block d-lg-none mt-2">
                                          <div class="card image-hover">
                                              <div class="swiper product-slide-swiper">
                                                  <div class="swiper-wrapper">
                                                      <div class="swiper-slide">
                                                          <a href="{{ route(\App\Constants\RouteNames::SINGLE_PRODUCT_INDEX, ['slug' => $product->slug]) }}">
                                                              <img src="{{ $image1 }}" class="img-fluid desktop-slide" alt="{{ $product->name }}" style="aspect-ratio: 3/4; object-fit: cover; width: 100%; background-color: #f5f5f5;">
                                                          </a>
                                                      </div>
                                                  </div>
                                                  <div class="swiper-pagination product-slide-pagination d-block d-lg-none"></div>
                                              </div>
                                              <div class="product-detail p-1 product-title">
                                                  <div class="d-flex justify-content-between align-items-center">
                                                      <div>
                                                          <h5 class="text-left product-title width-small" style="font-size: 12px; text-transform: capitalize; padding-bottom: 4px; margin-bottom: 4px;">{{ $product->name }}</h5>
                                                      </div>
                                                  </div>
                                                  <div>
                                                       <span style="font-size: 10px;">{{ $product->category ? $product->category->name : 'Category' }}</span>
                                                  </div>
                                                  <p class="item-price" style="margin-top: 4px;">
                                                      @if($product->discount_price)
                                                          <span class="offer_price_number">₹{{ round($product->discount_price) }}</span>
                                                          <span class="price_number" style="text-decoration: line-through; color: #999; margin-left: 5px; font-size: 10px;">₹{{ round($product->price) }}</span>
                                                      @else
                                                          <span class="offer_price_number">₹{{ round($product->price) }}</span>
                                                      @endif
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  @endforeach
                            @else
                                <div class="col-12 text-center py-5">
                                    <h4>No products found.</h4>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<script>
document.querySelectorAll('.extra').forEach(el=> el.style.display='none');
document.querySelectorAll('.price-extra').forEach(el=> el.style.display='none');
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const wrapper = document.getElementById("customFilterWrapper");
  if(!wrapper) return;
  const tabs = wrapper.querySelectorAll(".cf-tab");
  const contents = wrapper.querySelectorAll(".cf-tab-content");
  const closeBtn = wrapper.querySelector(".cf-close");
  const clearBtn = wrapper.querySelector(".cf-clear");
  const bottomClose = wrapper.querySelector(".cf-close-btn");
  const applyBtn = wrapper.querySelector(".cf-apply-btn");

  tabs.forEach(tab => {
    tab.addEventListener("click", function() {
      tabs.forEach(t => t.classList.remove("active"));
      contents.forEach(c => c.classList.remove("active"));
      this.classList.add("active");
      wrapper.querySelector("#" + this.dataset.tab).classList.add("active");
    });
  });

  if (closeBtn) {
    closeBtn.addEventListener("click", function() {
      wrapper.style.display = "none";
      document.documentElement.classList.remove("no-scroll"); 
    });
  }
  
  if (bottomClose) {
    bottomClose.addEventListener("click", function() {
      wrapper.style.display = "none";
      document.documentElement.classList.remove("no-scroll"); 
    });
  }

  if (applyBtn) {
    applyBtn.addEventListener("click", function() {
      wrapper.style.display = "none";
    });
  }

  if (clearBtn) {
    clearBtn.addEventListener("click", function() {
      const checkboxes = wrapper.querySelectorAll("input[type='checkbox']");
      checkboxes.forEach(cb => cb.checked = false);
    });
  }
});

document.querySelectorAll("#chipBarWrapper .chip").forEach(chip => {
  chip.addEventListener("click", function() {
    this.classList.toggle("active");
  });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    function applyFilters() {
        const selectedCategories = Array.from(document.querySelectorAll('.category-filter-checkbox:checked')).map(cb => cb.value.toLowerCase());
        const selectedGenders = Array.from(document.querySelectorAll('.gender-filter-checkbox:checked')).map(cb => cb.value.toLowerCase());
        const selectedSizes = Array.from(document.querySelectorAll('.size-pill.active')).map(pill => pill.getAttribute('data-size'));
        const priceRadio = document.querySelector('.price-filter-radio:checked');
        
        let minPrice = 0, maxPrice = Infinity;
        if (priceRadio) {
            const parts = priceRadio.value.split('-');
            minPrice = parseFloat(parts[0]);
            if (parts[1]) maxPrice = parseFloat(parts[1]);
        }
        
        let visibleCount = 0;
        document.querySelectorAll('.product').forEach(product => {
            let show = true;
            
            if (selectedCategories.length > 0) {
                const prodCat = (product.getAttribute('data-category') || '').toLowerCase();
                if (!selectedCategories.includes(prodCat)) show = false;
            }
            
            if (show && selectedGenders.length > 0) {
                const prodGender = (product.getAttribute('data-gender') || '').toLowerCase();
                if (!selectedGenders.includes(prodGender)) show = false;
            }
            
            if (show && selectedSizes.length > 0) {
                try {
                    const prodSizes = JSON.parse(product.getAttribute('data-sizes') || '[]');
                    const hasSize = selectedSizes.some(size => prodSizes.includes(size));
                    if (!hasSize) show = false;
                } catch (e) {
                    show = false;
                }
            }
            
            if (show && priceRadio) {
                const prodPrice = parseFloat(product.getAttribute('data-price') || 0);
                if (prodPrice < minPrice || prodPrice > maxPrice) show = false;
            }
            
            product.style.display = show ? 'block' : 'none';
            if (show) visibleCount++;
        });

        const countDisplay = document.getElementById('product-count-display');
        if (countDisplay) {
            countDisplay.innerText = visibleCount;
        }
    }

    document.querySelectorAll('.category-filter-checkbox, .gender-filter-checkbox, .price-filter-radio').forEach(el => {
        el.addEventListener('change', applyFilters);
    });

    document.querySelectorAll('.size-pill').forEach(el => {
        el.addEventListener('click', function() {
            this.classList.toggle('active');
            applyFilters();
        });
    });
});
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const wishlistIcons = document.querySelectorAll('.wishlistIcon');
        
        wishlistIcons.forEach(icon => {
            icon.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                const productId = this.getAttribute('data-product-id');
                const svg = this.querySelector('svg');
                const path = svg.querySelector('path');
                
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
                            svg.setAttribute('fill', '#e02b2b');
                            path.setAttribute('stroke', '#e02b2b');
                        } else {
                            svg.setAttribute('fill', 'none');
                            path.setAttribute('stroke', '#ffffff');
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
                .catch(error => console.error('Error:', error));
            });
        });
    });
</script>

@include('website.footer')
