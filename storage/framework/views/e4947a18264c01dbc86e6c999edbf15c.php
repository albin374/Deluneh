<?php echo $__env->make('website.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('website.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<style>
    .main--wrapper {
        margin-top: 80px !important;
        min-height: 50vh;
    }
</style>

<main class="main--wrapper">
    <div class="container py-2 mt-0">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-5" style="font-family: 'Montserrat', sans-serif; color: #ff0043; font-weight: 700;">DE LUNEH stories</h1>
            </div>
        </div>
        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($blogs->isEmpty()): ?>
            <div class="text-center">
                <p class="lead text-muted">Check back soon for exciting updates, styling tips, and news!</p>
            </div>
        <?php else: ?>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
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
                            
                            <div class="mt-4 text-center text-md-start">
                                <a href="<?php echo e(route('blog.show', $blog->id)); ?>" class="btn px-4 py-2" style="border-radius: 30px; font-weight: 500; background-color: #ff0043; color: #fff; border: none;">
                                    Continue reading <i class="fa-solid fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </div>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</main>

<?php echo $__env->make('website.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH D:\anu mostech\delunh\resources\views/website/blog.blade.php ENDPATH**/ ?>