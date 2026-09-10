<?php echo $__env->make('website.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('website.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<style>
    .main--wrapper {
        margin-top: 120px !important;
        min-height: 50vh;
    }
</style>

<main class="main--wrapper">
    <div class="container py-4 mt-2">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-5" style="font-family: 'Montserrat', sans-serif;">DE LUNEH stories</h1>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="blog-card mb-5 p-4 p-md-5" style="border: 1px solid #eaeaea; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.03); background-color: #fff;">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 border-bottom pb-3">
                        <h2 style="font-weight: 600; color: #111;"><?php echo e($blog->heading); ?></h2>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($blog->date): ?>
                            <?php
                                $parsedDate = \Carbon\Carbon::parse($blog->date)->startOfDay();
                                $today = \Carbon\Carbon::now()->startOfDay();
                                $diff = $parsedDate->diffInDays($today);
                                
                                if ($parsedDate->isToday()) {
                                    $dateDisplay = 'Today';
                                } elseif ($parsedDate->isYesterday()) {
                                    $dateDisplay = '1 day ago';
                                } elseif ($parsedDate->isFuture()) {
                                    $dateDisplay = $parsedDate->format('M d, Y');
                                } else {
                                    $dateDisplay = $diff . ' days ago';
                                }
                            ?>
                            <span class="text-muted mt-2 mt-md-0" style="font-size: 0.95rem; font-weight: 500;">
                                <i class="fa-regular fa-calendar-alt me-1"></i> <?php echo e($dateDisplay); ?>

                            </span>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($blog->image): ?>
                        <div class="blog-image mb-4 text-center">
                            <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" alt="<?php echo e($blog->heading); ?>" class="img-fluid rounded" style="max-height: 600px; width: 100%; object-fit: cover;">
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($blog->description): ?>
                        <div class="blog-description mb-5" style="color: #444; line-height: 1.7; font-size: 1.05rem;">
                            <?php echo $blog->description; ?>

                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($blog->points && is_array($blog->points)): ?>
                        <div class="blog-points mt-5">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $blog->points; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                <div class="point-item mb-5 pb-4" style="border-bottom: 1px dashed #e2e2e2;">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($point['image'])): ?>
                                        <div class="mb-4 text-center">
                                            <img src="<?php echo e(asset('storage/' . $point['image'])); ?>" alt="<?php echo e($point['heading'] ?? 'Blog feature'); ?>" class="img-fluid rounded" style="max-height: 500px; width: 100%; object-fit: cover;">
                                        </div>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($point['heading'])): ?>
                                        <h4 class="mb-3" style="color: #222; font-weight: 600;"><?php echo e($point['heading']); ?></h4>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($point['description'])): ?>
                                        <div style="color: #555; line-height: 1.6;"><?php echo nl2br(e($point['description'])); ?></div>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    
                    <div class="mt-4 text-center">
                        <a href="<?php echo e(route('blog')); ?>" class="btn btn-outline-dark px-4 py-2" style="border-radius: 30px;">
                            <i class="fa-solid fa-arrow-left me-2"></i> Back to all stories
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php echo $__env->make('website.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH D:\anu mostech\delunh\resources\views/website/single-blog.blade.php ENDPATH**/ ?>