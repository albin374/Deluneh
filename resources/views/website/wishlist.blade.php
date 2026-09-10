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
<div class="container my-5" style="min-height: 50vh;">
    <h2 class="mb-4" style="font-weight: 900; color: #1a2024; font-size: 24px;">My Wishlist <span style="font-size: 18px; color: #737373;">({{ count($wishlistItems) }} items)</span></h2>
    <div class="row">
        @foreach($wishlistItems as $item)
        <div class="col-md-3 col-6 mb-4">
            <div class="card image-hover" style="border:none;">
                <a href="{{ route(\App\Constants\RouteNames::SINGLE_PRODUCT_INDEX, ['slug' => $item['slug']]) }}">
                    <img src="{{ !empty($item['image']) ? asset('storage/' . $item['image']) : 'https://prod-img.thesouledstore.com/public/theSoul/uploads/catalog/product/1712574694_1119733.jpg?w=300&dpr=1' }}" class="card-img-top" alt="{{ $item['name'] }}" style="aspect-ratio: 3/4; object-fit: cover; width: 100%; background-color: #f5f5f5;">
                </a>
                <div class="p-2 product-title">
                    <h5 class="text-left" style="font-size: 14px; text-transform: capitalize; padding-bottom: 4px; margin-bottom: 4px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $item['name'] }}</h5>
                    <span style="font-size: 11px;">{{ $item['category'] ?? 'Category' }}</span>
                    <p class="item-price" style="margin-top: 4px;">
                        @if(isset($item['old_price']) && $item['old_price'] > $item['price'])
                            <span class="offer_price_number" style="font-weight: bold;">₹{{ round($item['price']) }}</span>
                            <span class="price_number" style="text-decoration: line-through; color: #999; margin-left: 5px;">₹{{ round($item['old_price']) }}</span>
                        @else
                            <span class="offer_price_number" style="font-weight: bold;">₹{{ round($item['price']) }}</span>
                        @endif
                    </p>
                    <button class="btn btn-outline-dark w-100 remove-from-wishlist mt-2" data-product-id="{{ $item['product_id'] }}" style="font-size: 12px; font-weight: bold; border-radius: 4px;">REMOVE FROM WISHLIST</button>
                </div>
            </div>
        </div>
        @endforeach
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
            
            btnElement.innerText = 'REMOVING...';
            btnElement.disabled = true;
            
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
                btnElement.innerText = 'REMOVE FROM WISHLIST';
                btnElement.disabled = false;
            });
        });
    });
});
</script>
@endif

@include('website.footer')
