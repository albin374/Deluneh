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
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               
           </div>
       </div>
       <img src="/images/product_banner.jpg" class="img-fluid hide-mobile" alt="">
       <!--<img src="/images/product_banner_mob.jpg" class="img-fluid hidden-large" style="border-radius:4px;" alt="">-->
        <video class="hidden-large"
                                                    src="/images/istockphoto-1954855689-640_adpp_is.mp4"
                                                    autoplay
                                                    muted
                                                    loop
                                                    playsinline
                                                    style="border-radius:4px;"
                                                ></video>
                                                
       <!--<img src="https://prod-img.thesouledstore.com/public/theSoul/storage/mobile-cms-media-prod/banner-images/fandom_feb_mobile_copy_chnage.png?w=768&dpr=2" class="img-fluid hidden-large" alt="" style="width:100%;height:180px;border-radius:4px;">-->
   </div> 
</section>
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
<div class="product-container">
    <div class="container">
                        <div class="row hide-mobile">
                    <div class="product_listing_count pdct_slct-sort d-flex justify-content-end">
                        <div class="col-md-9">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="breadcrumbs_nav">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb" style="font-size:12px;">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Trending Fandoms</li>
                          </ol>
                        </nav>
                        <p style="font-size:15px;">Trending Fandoms - 345 items</p>
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
    height:100vh;
    overflow-y:auto;
    border-right:1px solid #eee;
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
          <div class="cf-tab" data-tab="themes">Themes</div>
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

          <!-- Themes -->
          <div class="cf-tab-content" id="themes">
            <div class="cf-item">
              <span>Linen Shorts</span>
              <span class="cf-count">1</span>
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

    <div class="filter-title">CATEGORIES</div>
    <input type="text" id="categorySearch" class="search-filter" placeholder="Search for Categories">

    <div id="categoryList">
        <label class="category-item">
            <span><input type="checkbox" value="Backpacks"> Backpacks</span>
            <span>8</span>
        </label>
        <label class="category-item">
            <span><input type="checkbox" value="Jackets"> Biker Jackets</span>
            <span>1</span>
        </label>
        <label class="category-item">
            <span><input type="checkbox" value="Shirts"> Shirts</span>
            <span>15</span>
        </label>
        <label class="category-item extra">
            <span><input type="checkbox" value="Caps"> Caps</span>
            <span>4</span>
        </label>
    </div>

    <div class="more-link" onclick="toggleCategories()">+ More</div>

    <hr style="margin:25px 10px 0px;">

    <div class="filter-title mt-4">SIZE</div>
    <input type="text" id="sizeSearch" class="search-filter" placeholder="Search for Size">

    <div class="size-grid" id="sizeList">
        <div class="size-pill" data-size="S">S (257)</div>
        <div class="size-pill" data-size="M">M (292)</div>
        <div class="size-pill" data-size="L">L (300)</div>
        <div class="size-pill" data-size="XL">XL (150)</div>
    </div>
    
        <div class="more-link" onclick="toggleSizes()">+ More</div>

    <hr style="margin:25px 10px 0px;">

     <div class="filter-title mt-4">PRICES</div>
   
    <div id="priceList">
        <label class="category-item">
    <span>
        <input type="radio" name="price_range" value="999-141">
        Rs. 999 - Rs. 141
    </span>
    <span>42</span>
</label>

<label class="category-item">
    <span>
        <input type="radio" name="price_range" value="1415-1830">
        Rs. 1415 - Rs. 1830
    </span>
    <span>71</span>
</label>

<label class="category-item price-extra">
    <span>
        <input type="radio" name="price_range" value="1831-2246">
        Rs. 1831 - Rs. 2246
    </span>
    <span>7</span>
</label>

<label class="category-item price-extra">
    <span>
        <input type="radio" name="price_range" value="2247-2662">
        Rs. 2247 - Rs. 2662
    </span>
    <span>4</span>
</label>

<label class="category-item price-extra">
    <span>
        <input type="radio" name="price_range" value="2663-3078">
        Rs. 2663 - Rs. 3078
    </span>
    <span>2</span>
</label>
        
    </div>

    <div class="more-link" onclick="togglePrices()">+ More</div>

    <hr style="margin:25px 10px 0px;">
    
    <div class="filter-title mt-4">THEMES</div>

    <div id="categoryList">
        <label class="category-item">
    <span>
        <input type="checkbox" name="brand[]" value="Babil Khan">
        Babil Khan
    </span>
    <span>2</span>
</label>

<label class="category-item">
    <span>
        <input type="checkbox" name="brand[]" value="Donald Duck">
        Donald Duck™
    </span>
    <span>1</span>
</label>

<label class="category-item">
    <span>
        <input type="checkbox" name="brand[]" value="Nomad">
        Nomad
    </span>
    <span>4</span>
</label>

<label class="category-item">
    <span>
        <input type="checkbox" name="brand[]" value="Peanuts">
        Peanuts™
    </span>
    <span>2</span>
</label>

<label class="category-item">
    <span>
        <input type="checkbox" name="brand[]" value="The Souled Store">
        The Souled Store
    </span>
    <span>113</span>
</label>
    </div>

    <div class="more-link" onclick="toggleThemes()">+ More</div>

    <hr style="margin:25px 10px 0px;">

</div>
             
            </div>
            <style>
                .wishlistIcon.wishlist {
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .16);
    background-color: rgba(0, 0, 0, .2);
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
                            @for($i = 0; $i < 10; $i++)
                            <div class="col-md-3 col-6">
                                <div class="product-card d-none d-lg-block mt-2 ">
                                        <div class="card image-hover" style="border:none!important;">
                                            <a href="{{ route(\App\Constants\RouteNames::SINGLE_PRODUCT_INDEX) }}">
                                            <img src="https://prod-img.thesouledstore.com/public/theSoul/uploads/catalog/product/1712574694_1119733.jpg?w=300&dpr=1" class="card-img-top first-img" alt="Product {{ $i + 1 }}">
                                            <img src="https://prod-img.thesouledstore.com/public/theSoul/uploads/catalog/product/1753184953_8196988.jpg?w=300&dpr=1" class="card-img-top second-img" alt="Product {{ $i + 1 }}">
                                            </a>
                                            <div class="wishlistIcon pl-1 pb-2 pr-1 wishlist">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                            <path 
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5
                                   2 5.42 4.42 3 7.5 3
                                   c1.74 0 3.41 0.81 4.5 2.09
                                   C13.09 3.81 14.76 3 16.5 3
                                   19.58 3 22 5.42 22 8.5
                                   c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                                stroke="#ffffff"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                                                    </div>
                                            <div class="product-detail p-1 product-title">
                                                
                                                        <h5 class="text-left" style="font-size: 14px;">Cotton Linen: Coral Peach</h5>
                                                        <span style="font-size: 11px;">Men Utility Shirts</span>
                                                    
                                                <p class="item-price">
                                                    <span class="offer_price_number">₹599</span>
                                                    <!--<span class="price_number">₹1599</span>-->
                                                    <!--<span class="offer">66% OFF</span>-->
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card d-block d-lg-none">
                                        <div class="card image-hover">
                                            <div class="d-flex product-badge">
                                                <div class="d-flex align-items-center badge-background">
                                                    <span class="badge-text"> BUY 2 FOR 999</span>
                                                </div>
                                            </div>
                                            <div class="swiper product-slide-swiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                         <a href="{{ route(\App\Constants\RouteNames::SINGLE_PRODUCT_INDEX) }}">
                                                        <img src="https://images.bewakoof.com/t540/men-s-beige-embroidered-oversized-shirt-685448-1765191907-1.jpg" class="img-fluid desktop-slide" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="swiper-slide">
                                                         <a href="{{ route(\App\Constants\RouteNames::SINGLE_PRODUCT_INDEX) }}">
                                                        <img src="https://images.bewakoof.com/t540/men-s-blue-all-over-printed-oversized-shirt-685482-1764076957-1.jpg" class="img-fluid desktop-slide" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="swiper-slide">
                                                         <a href="{{ route(\App\Constants\RouteNames::SINGLE_PRODUCT_INDEX) }}">
                                                        <img src="https://images.bewakoof.com/t540/men-s-white-cotton-linen-shirt-677615-1753957743-1.jpg" class="img-fluid desktop-slide" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination product-slide-pagination d-block d-lg-none"></div>
                                            </div>
                                            <!-- <img src="/images/f1.webp" class="card-img-top first-img" alt="Product {{ $i + 1 }}"> -->
                                            <!-- <img src="/images/f2.webp" class="card-img-top second-img" alt="Product {{ $i + 1 }}"> -->
                                            <div class="product-detail p-1 product-title">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h5 class="text-left product-title width-small" style="font-size: 12px;border:none;">Cotton Linen: Coral Peach</h5>
                                                    </div>
                                                    <div class="wishlist-icon">
                                                             <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                            <path 
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5
                                   2 5.42 4.42 3 7.5 3
                                   c1.74 0 3.41 0.81 4.5 2.09
                                   C13.09 3.81 14.76 3 16.5 3
                                   19.58 3 22 5.42 22 8.5
                                   c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                                stroke="#000"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                                                    </div>
                                                </div>
                                                <div>
                                                </div>
                                                <div>
                                                     <span style="font-size: 10px;">Men Utility Shirts</span>
                                                </div>
                                                <p class="item-price">
                                                    <span class="offer_price_number">₹599</span>
                                                    <!--<span class="price_number">₹1599</span>-->
                                                    <!--<span class="offer">66% OFF</span>-->
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                  
                            </div>
                            @endfor
                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>

</div>


<section class="highlated-sale bottom-heighlated">
    <div class="container">
        <div class="row owl-carousel" id="bottom-top-carousel-off">
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
</section>
</div>
</main>
<script>

/* ================= FILTER LOGIC ================= */

const checkboxes = document.querySelectorAll('#categoryList input');
const sizePills = document.querySelectorAll('.size-pill');
const products = document.querySelectorAll('.product');

function filterProducts(){
    const selectedCategories = Array.from(checkboxes)
        .filter(cb => cb.checked)
        .map(cb => cb.value);

    const activeSize = document.querySelector('.size-pill.active');

    products.forEach(product => {
        const matchCategory = selectedCategories.length === 0 || selectedCategories.includes(product.dataset.category);
        const matchSize = !activeSize || product.dataset.size === activeSize.dataset.size;

        product.style.display = (matchCategory && matchSize) ? 'block' : 'none';
    });
}

checkboxes.forEach(cb => cb.addEventListener('change', filterProducts));

sizePills.forEach(pill => {
    pill.addEventListener('click', function(){
        sizePills.forEach(p => p.classList.remove('active'));
        this.classList.toggle('active');
        filterProducts();
    });
});

/* ================= SEARCH FILTER ================= */

document.getElementById('categorySearch').addEventListener('keyup', function(){
    let value = this.value.toLowerCase();
    document.querySelectorAll('#categoryList label').forEach(item=>{
        item.style.display = item.innerText.toLowerCase().includes(value) ? 'flex' : 'none';
    });
});

document.getElementById('sizeSearch').addEventListener('keyup', function(){
    let value = this.value.toLowerCase();
    sizePills.forEach(pill=>{
        pill.style.display = pill.innerText.toLowerCase().includes(value) ? 'block' : 'none';
    });
});

/* ================= MORE TOGGLE ================= */

function toggleCategories(){
    document.querySelectorAll('.extra').forEach(el=>{
        el.style.display = (el.style.display === 'none') ? 'flex' : 'none';
    });
}

function togglePrices(){
    document.querySelectorAll('.price-extra').forEach(el=>{
        el.style.display = (el.style.display === 'none') ? 'flex' : 'none';
    });
}


document.querySelectorAll('.extra').forEach(el=> el.style.display='none');
document.querySelectorAll('.price-extra').forEach(el=> el.style.display='none');

</script>

<script>
document.addEventListener("DOMContentLoaded", function() {

  const filterBtn = document.getElementById("filter_btn_a");
  const filterPanel = document.querySelector(".filter-mobile-slide");
  const wrapper = document.getElementById("customFilterWrapper");

  // OPEN
  filterBtn.addEventListener("click", function(e) {
    e.preventDefault();
    filterPanel.style.display = "block";
        wrapper.style.display = "block";
  });

});
(function() {
  const wrapper = document.getElementById("customFilterWrapper");

  const tabs = wrapper.querySelectorAll(".cf-tab");
  const contents = wrapper.querySelectorAll(".cf-tab-content");
  const closeBtn = wrapper.querySelector(".cf-close");
  const clearBtn = wrapper.querySelector(".cf-clear");
  const bottomClose = wrapper.querySelector(".cf-close-btn");
  const applyBtn = wrapper.querySelector(".cf-apply-btn");

  // Tab switching
  tabs.forEach(tab => {
    tab.addEventListener("click", function() {
      tabs.forEach(t => t.classList.remove("active"));
      contents.forEach(c => c.classList.remove("active"));

      this.classList.add("active");
      wrapper.querySelector("#" + this.dataset.tab)
             .classList.add("active");
    });
  });

  // Close panel
  closeBtn.addEventListener("click", function() {
    wrapper.style.display = "none";
    document.documentElement.classList.remove("no-scroll"); 
  });
  
  bottomClose.addEventListener("click", function() {
    wrapper.style.display = "none";
    document.documentElement.classList.remove("no-scroll"); 
  });

  applyBtn.addEventListener("click", function() {
    wrapper.style.display = "none";
    // Later you can trigger filtering logic here
  });

  // Clear all checkboxes
  clearBtn.addEventListener("click", function() {
    const checkboxes = wrapper.querySelectorAll("input[type='checkbox']");
    checkboxes.forEach(cb => cb.checked = false);
  });

})();

document.querySelectorAll("#chipBarWrapper .chip").forEach(chip => {
  chip.addEventListener("click", function() {
    this.classList.toggle("active");
  });
});
</script>
@include('website.footer')