<div class="relative ">
    <a href="<?php echo e(route(\App\Constants\RouteNames::SINGLE_PRODUCT_INDEX, ['slug' => $product->slug])); ?>">
        <div class="relative w-full overflow-hidden filter-container">
            <div class="h-full w-full relative">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->images && count($product->images) > 0): ?>
                    <img alt="<?php echo e($product->name); ?>" class="filter-img w-full rounded-lg" loading="lazy" decoding="async" src="<?php echo e(asset('storage/' . $product->images[0])); ?>" style="<?php echo e($section->zoom_out_image ? 'object-fit: contain;' : 'aspect-ratio: 3/4; object-fit: cover;'); ?>">
                <?php else: ?>
                    <img alt="<?php echo e($product->name); ?>" class="filter-img w-full rounded-lg" loading="lazy" decoding="async" src="/images/f3.webp" style="<?php echo e($section->zoom_out_image ? 'object-fit: contain;' : 'aspect-ratio: 3/4; object-fit: cover;'); ?>">
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </a>
    <div class="p-2">
        <div class="product-detail p-0">
            <div class="d-flex justify-content-between">
                <div style="max-width: 80%; overflow: hidden;">
                    <h5 class="text-left product-title" style="font-size: 14px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;"><?php echo e($product->name); ?></h5>
                    <span style="font-size: 11px;"><?php echo e($product->category ? $product->category->name : 'Uncategorized'); ?></span>
                </div>
                <div class="wishlist-icon" style="cursor: pointer;" data-product-id="<?php echo e($product->id); ?>">
                    <?php
                        $inWishlist = isset(session('wishlist')[$product->id]);
                    ?>
                    <svg width="24" height="24" fill="<?php echo e($inWishlist ? '#e02b2b' : 'none'); ?>">
                        <path stroke="<?php echo e($inWishlist ? '#e02b2b' : '#000'); ?>" stroke-linecap="round" stroke-linejoin="round" d="M16.543 3.75c-3.043 0-4.543 3-4.543 3s-1.5-3-4.543-3C4.984 3.75 3.025 5.82 3 8.288c-.052 5.125 4.065 8.77 8.578 11.832a.75.75 0 0 0 .844 0c4.512-3.063 8.63-6.707 8.578-11.832-.025-2.469-1.984-4.538-4.457-4.538Z"></path>
                    </svg>
                </div>
            </div>
            <p class="item-price">
                <span class="offer_price_number">₹<?php echo e($product->price); ?></span>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->old_price): ?>
                    <span class="price_number">₹<?php echo e($product->old_price); ?></span>
                    <?php
                        $discount = round((($product->old_price - $product->price) / $product->old_price) * 100);
                    ?>
                    <span class="offer"><?php echo e($discount); ?>% OFF</span>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </p>
        </div>
    </div>
</div>
<?php /**PATH D:\anu mostech\delunh\resources\views/website/partials/product_filter_card.blade.php ENDPATH**/ ?>