<?php echo $__env->make('website.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('website.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(empty($wishlistItems)): ?>
<div class="wishlist-empty-container">
    <img src="https://prod-img.thesouledstore.com/public/theSoul/images/ghost.gif" onerror="this.onerror=null; this.src='<?php echo e(asset('images/empty-cart.png')); ?>';" alt="Empty Wishlist">
    <h2>Your wishlist is lonely and looking for love.</h2>
    <p>Add products to your wishlist, review them anytime and easily move to cart.</p>
    <div class="wishlist-btn-group">
        <a href="<?php echo e(url('/')); ?>" class="btn btn-continue-shopping">CONTINUE SHOPPING</a>
        <a href="<?php echo e(url('/login')); ?>" class="btn btn-login">LOGIN</a>
    </div>
</div>
<?php else: ?>
<div class="container my-5" style="min-height: 50vh;">
    <h2 class="mb-4" style="font-weight: 900; color: #1a2024; font-size: 24px;">My Wishlist <span style="font-size: 18px; color: #737373;">(<?php echo e(count($wishlistItems)); ?> items)</span></h2>
    <div class="row">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $wishlistItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
        <div class="col-md-3 col-6 mb-4">
            <div class="card image-hover" style="border:none;">
                <a href="<?php echo e(route(\App\Constants\RouteNames::SINGLE_PRODUCT_INDEX, ['slug' => $item['slug']])); ?>">
                    <img src="<?php echo e(!empty($item['image']) ? asset('storage/' . $item['image']) : 'https://prod-img.thesouledstore.com/public/theSoul/uploads/catalog/product/1712574694_1119733.jpg?w=300&dpr=1'); ?>" class="card-img-top" alt="<?php echo e($item['name']); ?>" style="aspect-ratio: 3/4; object-fit: cover; width: 100%; background-color: #f5f5f5;">
                </a>
                <div class="p-2 product-title">
                    <h5 class="text-left" style="font-size: 14px; text-transform: capitalize; padding-bottom: 4px; margin-bottom: 4px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo e($item['name']); ?></h5>
                    <span style="font-size: 11px;"><?php echo e($item['category'] ?? 'Category'); ?></span>
                    <p class="item-price" style="margin-top: 4px;">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($item['old_price']) && $item['old_price'] > $item['price']): ?>
                            <span class="offer_price_number" style="font-weight: bold;">₹<?php echo e(round($item['price'])); ?></span>
                            <span class="price_number" style="text-decoration: line-through; color: #999; margin-left: 5px;">₹<?php echo e(round($item['old_price'])); ?></span>
                        <?php else: ?>
                            <span class="offer_price_number" style="font-weight: bold;">₹<?php echo e(round($item['price'])); ?></span>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </p>
                    <button class="btn btn-outline-dark w-100 remove-from-wishlist mt-2" data-product-id="<?php echo e($item['product_id']); ?>" style="font-size: 12px; font-weight: bold; border-radius: 4px;">REMOVE FROM WISHLIST</button>
                </div>
            </div>
        </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
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
            
            fetch('<?php echo e(route("wishlist.add")); ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
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
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php echo $__env->make('website.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH D:\anu mostech\delunh\resources\views/website/wishlist.blade.php ENDPATH**/ ?>