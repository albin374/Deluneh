<?php echo $__env->make('website.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('website.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<style>
.navigation {
    display: none;
}
.highlated-sale.top-highlated.d-lg-block.d-none{
   display:none!important; 
}
.main--wrapper {
        margin-top: 120px !important;
    }
    #home-none {
        display: none !important;
    }
    
    .track-container {
        max-width: 600px;
        margin: 50px auto;
        background: #fff;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        border: 1px solid #e6e7e8;
    }
    
    .track-heading {
        text-align: center;
        margin-bottom: 30px;
    }
    
    .track-heading h2 {
        font-weight: 700;
        color: #1a1a1a;
        text-transform: uppercase;
        font-size: 24px;
    }
    
    .track-btn {
        background-color: #e02b2b;
        color: #fff;
        font-weight: 700;
        text-transform: uppercase;
        padding: 12px;
        border: none;
        border-radius: 4px;
        width: 100%;
        margin-top: 15px;
    }
    
    .track-btn:hover {
        background-color: #c42222;
    }
    
    .status-card {
        margin-top: 30px;
        border: 1px solid #f8d7da;
        border-radius: 8px;
        padding: 20px;
        background: #fffafa;
    }
    
    .status-badge {
        display: inline-block;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 15px;
    }
    
    .status-pending, .status-not-delivered { background: #fff3cd; color: #856404; border: 1px solid #ffeeba; }
    .status-shipped { background: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; }
    .status-delivered, .status-out-for-delivery { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
    .status-cancelled { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    .status-custom { background: #e2e3e5; color: #383d41; border: 1px solid #d6d8db; }
</style>

<div class="whole_container container">
    <div class="track-container">
        <div class="track-heading">
            <h2 style="color: #e02b2b;">Your Orders</h2>
            <p style="color: #8c8d8f; font-size: 14px;">Here are the details of your recent orders.</p>
        </div>
        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($orders) && count($orders) > 0): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <div class="status-card">
                <h4 style="font-size: 16px; font-weight: 700;">Order #<?php echo e($order->id); ?></h4>
                <?php
                    $rawStatusClass = 'status-' . strtolower(str_replace(' ', '-', $order->status));
                    $validClasses = ['status-pending', 'status-shipped', 'status-delivered', 'status-cancelled', 'status-not-delivered', 'status-out-for-delivery'];
                    $statusClass = in_array($rawStatusClass, $validClasses) ? $rawStatusClass : 'status-custom';
                ?>
                <span class="status-badge <?php echo e($statusClass); ?>">
                    <?php echo e($order->status); ?>

                </span>
                <p><strong>Total Amount:</strong> ₹<?php echo e($order->total_amount); ?></p>
                <p><strong>Placed On:</strong> <?php echo e($order->created_at->format('d M, Y')); ?></p>
                
                <h5 style="font-size: 14px; font-weight: 700; margin-top: 20px;">Items in this order:</h5>
                <ul style="list-style: none; padding: 0;">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <li style="padding: 10px 0; border-bottom: 1px solid #e6e7e8; display: flex; justify-content: space-between; align-items: center;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($item->product && is_array($item->product->images) && count($item->product->images) > 0): ?>
                                    <img src="<?php echo e(asset('storage/' . $item->product->images[0])); ?>" alt="<?php echo e($item->product->name); ?>" style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px;">
                                <?php elseif($item->product && $item->product->image): ?>
                                    <img src="<?php echo e(asset('storage/' . $item->product->image)); ?>" alt="<?php echo e($item->product->name); ?>" style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px;">
                                <?php else: ?>
                                    <div style="width: 50px; height: 50px; background: #eee; border-radius: 4px;"></div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <span><?php echo e($item->product ? $item->product->name : 'Product'); ?> (x<?php echo e($item->quantity); ?>)</span>
                            </div>
                            <span style="font-weight: 600;">₹<?php echo e($item->price); ?></span>
                        </li>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </ul>
            </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        <?php else: ?>
            <p class="text-center">You have no recent orders.</p>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</div>

<?php echo $__env->make('website.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH D:\anu mostech\delunh\resources\views/website/track.blade.php ENDPATH**/ ?>