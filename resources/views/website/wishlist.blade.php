@include('website.header')
@include('website.nav')
<style>
.navigation {
    display: none;
}
.highlated-sale.top-highlated.d-lg-block.d-none{
   display:none!important; 
}
.wishlist-empty-container {
    text-align: center;
    padding: 80px 20px;
    background-color: #fff;
    min-height: 60vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.wishlist-empty-container img {
    max-width: 250px;
    margin-bottom: 30px;
}
.wishlist-empty-container h2 {
    font-size: 22px;
    font-weight: 700;
    color: #1a2024;
    margin-bottom: 15px;
}
.wishlist-empty-container p {
    font-size: 15px;
    color: #737373;
    margin-bottom: 35px;
}
.wishlist-btn-group {
    display: flex;
    gap: 20px;
    justify-content: center;
}
.btn-continue-shopping {
    border: 2px solid #e02b2b;
    color: #e02b2b;
    background: transparent;
    padding: 12px 30px;
    font-weight: 700;
    text-transform: uppercase;
    border-radius: 4px;
    font-size: 14px;
    transition: all 0.3s;
}
.btn-continue-shopping:hover {
    background: #e02b2b;
    color: #fff;
}
.btn-login {
    background: #e02b2b;
    color: #fff;
    border: 2px solid #e02b2b;
    padding: 12px 60px;
    font-weight: 700;
    text-transform: uppercase;
    border-radius: 4px;
    font-size: 14px;
    transition: all 0.3s;
}
.btn-login:hover {
    background: #b81d1d;
    border-color: #b81d1d;
}
</style>

@if(empty($wishlistItems))
<div class="wishlist-empty-container">
    <img src="https://prod-img.thesouledstore.com/public/theSoul/images/ghost.gif" onerror="this.onerror=null; this.src='{{ asset('images/empty-cart.png') }}';" alt="Empty Wishlist">
    <h2>Your wishlist is lonely and looking for love.</h2>
    <p>Add products to your wishlist, review them anytime and easily move to cart.</p>
    <div class="wishlist-btn-group">
        <a href="{{ url('/') }}" class="btn btn-continue-shopping">CONTINUE SHOPPING</a>
        <a href="{{ url('/login') }}" class="btn btn-login">LOGIN</a>
    </div>
</div>
@else
<div class="container my-5" style="min-height: 50vh; max-width: 1200px !important; padding: 0 30px !important;">
    <h2 class="mb-4" style="font-weight: 900; color: #1a2024; font-size: 24px;">My Wishlist <span style="font-size: 18px; color: #737373;">({{ count($wishlistItems) }} items)</span></h2>
    <div class="row">
        @foreach($wishlistItems as $item)
        <div class="col-md-3 col-6 mb-4">
            <div class="card wishlist-card image-hover" style="border: 1px solid #eaeaea; border-radius: 4px; overflow: hidden; position: relative;">
                <button class="btn remove-from-wishlist p-0" data-product-id="{{ $item['product_id'] }}" style="position: absolute; top: 10px; right: 10px; z-index: 10; background: rgba(255,255,255,0.8); border-radius: 50%; width: 24px; height: 24px; display: flex; align-items: center; justify-content: center; border: none;">
                    <svg width="12" height="12" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 1L1 13M1 1L13 13" stroke="#555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <a href="{{ route(\App\Constants\RouteNames::SINGLE_PRODUCT_INDEX, ['slug' => $item['slug']]) }}">
                    <img src="{{ !empty($item['image']) ? asset('storage/' . $item['image']) : 'https://prod-img.thesouledstore.com/public/theSoul/uploads/catalog/product/1712574694_1119733.jpg?w=300&dpr=1' }}" class="card-img-top" alt="{{ $item['name'] }}" style="aspect-ratio: 3/4; object-fit: cover; width: 100%; background-color: #f5f5f5;">
                </a>
                <div class="p-3 product-title" style="border-bottom: 1px solid #eaeaea;">
                    <h5 class="text-left" style="font-size: 14px; text-transform: capitalize; margin-bottom: 4px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; border-bottom: none; font-weight: 600;">{{ $item['name'] }}</h5>
                    <span style="font-size: 12px; color: #777; display: block; margin-bottom: 8px;">{{ $item['category'] ?? 'Category' }}</span>
                    <p class="item-price" style="margin-top: 4px; margin-bottom: 0;">
                        @if(isset($item['old_price']) && $item['old_price'] > $item['price'])
                            <span class="offer_price_number" style="font-weight: bold;">₹{{ round($item['price']) }}</span>
                            <span class="price_number" style="text-decoration: line-through; color: #999; margin-left: 5px;">₹{{ round($item['old_price']) }}</span>
                        @else
                            <span class="offer_price_number" style="font-weight: bold;">₹{{ round($item['price']) }}</span>
                        @endif
                    </p>
                </div>
                @php
                    $productModel = \App\Models\Product::find($item['product_id']);
                    $sizes = [];
                    if ($productModel) {
                        if (is_array($productModel->sizes)) {
                            $sizes = $productModel->sizes;
                        } elseif (is_string($productModel->sizes)) {
                            $sizes = json_decode($productModel->sizes, true) ?: [];
                        }
                    }
                    $sizesJson = json_encode($sizes);
                @endphp
                <button class="btn w-100 move-to-cart-btn" style="background: #e02b2b; color: #fff; font-size: 12px; font-weight: 700; border: none; padding: 12px 0; letter-spacing: 0.5px;" 
                        data-product-id="{{ $item['product_id'] }}"
                        data-product-name="{{ $item['name'] }}"
                        data-product-category="{{ $item['category'] ?? 'Category' }}"
                        data-product-price="₹{{ round($item['price']) }}"
                        data-product-image="{{ !empty($item['image']) ? asset('storage/' . $item['image']) : '' }}"
                        data-product-sizes="{{ $sizesJson }}">
                    MOVE TO CART
                </button>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Move to Cart Modal -->
<div class="modal fade" id="moveCartModal" tabindex="-1" aria-labelledby="moveCartModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
    <div class="modal-content" style="border-radius: 8px; border: none; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">
      <div class="modal-header border-0 pb-0" style="padding: 15px 15px 0;">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 12px;"></button>
      </div>
      <div class="modal-body pt-0" style="padding: 20px;">
         <div class="d-flex mb-3">
            <img src="" id="modalProductImage" style="width: 80px; height: 100px; object-fit: cover; margin-right: 15px; border-radius: 4px;">
            <div>
               <h6 id="modalProductTitle" style="font-weight: 700; font-size: 14px; margin-bottom: 4px; color: #1a2024;"></h6>
               <p id="modalProductCategory" style="font-size: 12px; color: #777; margin-bottom: 8px;"></p>
               <h5 id="modalProductPrice" style="font-weight: 700; font-size: 16px; margin-bottom: 0; color: #1a2024;"></h5>
            </div>
         </div>
         <hr style="border-color: #eaeaea; margin: 15px 0;">
         <h6 style="font-weight: 700; font-size: 14px; margin-bottom: 10px; color: #1a2024;">Please select a size.</h6>
         <div id="modalProductSizes" class="d-flex flex-wrap gap-2 mb-2">
            <!-- Size buttons appended here -->
         </div>
         <p class="text-danger" id="modalSizeError" style="display:none; font-size:12px; margin-bottom: 10px; font-weight: 500;">Please select a size.</p>
         
         <div class="d-flex align-items-center mb-3 mt-2">
             <span style="font-weight: 700; font-size: 14px; margin-right: 15px; color: #1a2024;">QTY:</span>
             <div class="d-flex" style="border: 1px solid #ddd; border-radius: 4px; overflow: hidden;">
                 <button type="button" class="btn btn-light btn-sm" id="modalQtyMinus" style="border-radius: 0; padding: 4px 10px; font-weight: bold; background: #fff; border: none; border-right: 1px solid #ddd;">-</button>
                 <input type="text" id="modalQtyInput" value="1" readonly style="width: 40px; text-align: center; border: none; font-size: 14px; font-weight: 600; background: #fff; outline: none;">
                 <button type="button" class="btn btn-light btn-sm" id="modalQtyPlus" style="border-radius: 0; padding: 4px 10px; font-weight: bold; background: #fff; border: none; border-left: 1px solid #ddd;">+</button>
             </div>
         </div>
         
         <button class="btn w-100 mt-2" id="modalAddToCartBtn" style="background: #e02b2b; color: #fff; font-weight: 700; font-size: 14px; padding: 12px; border-radius: 4px; border: none; letter-spacing: 0.5px;">ADD TO CART</button>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const removeBtns = document.querySelectorAll('.remove-from-wishlist');
    removeBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const productId = this.getAttribute('data-product-id');
            const btnElement = this;
            
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
                    location.reload();
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });

    const moveBtns = document.querySelectorAll('.move-to-cart-btn');
    const modal = new bootstrap.Modal(document.getElementById('moveCartModal'));
    const modalProductImage = document.getElementById('modalProductImage');
    const modalProductTitle = document.getElementById('modalProductTitle');
    const modalProductCategory = document.getElementById('modalProductCategory');
    const modalProductPrice = document.getElementById('modalProductPrice');
    const modalProductSizes = document.getElementById('modalProductSizes');
    const modalSizeError = document.getElementById('modalSizeError');
    const modalAddToCartBtn = document.getElementById('modalAddToCartBtn');
    const modalQtyInput = document.getElementById('modalQtyInput');
    const modalQtyMinus = document.getElementById('modalQtyMinus');
    const modalQtyPlus = document.getElementById('modalQtyPlus');
    
    let currentProductId = null;
    let selectedSize = null;

    moveBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            currentProductId = this.getAttribute('data-product-id');
            const name = this.getAttribute('data-product-name');
            const category = this.getAttribute('data-product-category');
            const price = this.getAttribute('data-product-price');
            const image = this.getAttribute('data-product-image');
            const sizesStr = this.getAttribute('data-product-sizes');
            
            let sizes = [];
            if (sizesStr) {
                try {
                    sizes = JSON.parse(sizesStr);
                } catch(e) {}
            }
            
            modalProductTitle.innerText = name;
            modalProductCategory.innerText = category;
            modalProductPrice.innerText = price;
            if(image) {
                modalProductImage.src = image;
            } else {
                modalProductImage.src = 'https://prod-img.thesouledstore.com/public/theSoul/uploads/catalog/product/1712574694_1119733.jpg?w=300&dpr=1';
            }
            
            modalProductSizes.innerHTML = '';
            selectedSize = null;
            modalSizeError.style.display = 'none';
            modalQtyInput.value = 1;
            modalAddToCartBtn.innerText = 'ADD TO CART';
            modalAddToCartBtn.disabled = false;
            
            if (sizes && sizes.length > 0) {
                sizes.forEach(sz => {
                    const btn = document.createElement('button');
                    btn.className = 'btn btn-outline-secondary size-btn';
                    btn.style.cssText = 'border-radius: 4px; font-size: 13px; font-weight: 600; padding: 6px 12px;';
                    btn.innerText = sz;
                    btn.onclick = function() {
                        document.querySelectorAll('.size-btn').forEach(b => {
                            b.classList.remove('btn-dark');
                            b.classList.add('btn-outline-secondary');
                        });
                        btn.classList.remove('btn-outline-secondary');
                        btn.classList.add('btn-dark');
                        selectedSize = sz;
                        modalSizeError.style.display = 'none';
                    };
                    modalProductSizes.appendChild(btn);
                });
            } else {
                selectedSize = 'Default';
            }
            
            modal.show();
        });
    });
    
    modalQtyMinus.addEventListener('click', function() {
        let val = parseInt(modalQtyInput.value);
        if (val > 1) {
            modalQtyInput.value = val - 1;
        }
    });
    
    modalQtyPlus.addEventListener('click', function() {
        let val = parseInt(modalQtyInput.value);
        modalQtyInput.value = val + 1;
    });

    modalAddToCartBtn.addEventListener('click', function() {
        if (!selectedSize && document.querySelectorAll('.size-btn').length > 0) {
            modalSizeError.style.display = 'block';
            return;
        }
        
        const quantity = parseInt(modalQtyInput.value) || 1;
        const originalHtml = modalAddToCartBtn.innerHTML;
        modalAddToCartBtn.innerText = 'ADDING...';
        modalAddToCartBtn.disabled = true;
        
        fetch('{{ route("cart.add") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                product_id: currentProductId,
                size: selectedSize,
                quantity: quantity
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Remove from wishlist
                fetch('{{ route("wishlist.add") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        product_id: currentProductId
                    })
                }).then(() => {
                    location.reload();
                });
            } else {
                modalAddToCartBtn.innerHTML = originalHtml;
                modalAddToCartBtn.disabled = false;
                alert('Error adding to cart');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            modalAddToCartBtn.innerHTML = originalHtml;
            modalAddToCartBtn.disabled = false;
        });
    });

});
</script>
@endif

@include('website.footer')
