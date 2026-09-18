<?php echo $__env->make('website.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('website.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<style>
body {
    overflow-x: hidden !important;
}
.navigation {
    display: none;
}
.highlated-sale.top-highlated.d-lg-block.d-none{
   display:none!important; 
}
.profile-banner {
    width: 100%;
    max-height: 350px; 
    overflow: hidden;
    position: relative;
}
.profile-banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.profile-content {
    min-height: 40vh;
    max-width: 800px;
    margin: 0 auto;
}
@media (max-width: 767px) {
    .profile-content {
        min-height: auto;
        margin-bottom: 0 !important;
    }
}
.profile-menu-list {
    list-style: none;
    padding: 0;
    margin: 20px 0;
}
.profile-menu-list li {
    border-bottom: 1px solid #eee;
}
.profile-menu-list li a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 18px 15px;
    color: #333;
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
}
.profile-menu-list li a:hover {
    background-color: #f9f9f9;
}
.profile-menu-list li a .menu-text span {
    color: #4a9e8f;
    font-size: 14px;
    font-weight: 500;
    margin-left: 5px;
}
.profile-menu-list li a i {
    color: #666;
    font-size: 14px;
}
</style>

<div class="profile-banner">
    <img src="<?php echo e(asset('images/bannerprofile.png')); ?>" alt="Profile Banner">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
    <div style="position: absolute; top: 75%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 32px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
        Hi, <?php echo e(auth()->user()->first_name ?? auth()->user()->name); ?>!
    </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>

<div class="container mt-4 mb-5 profile-content">
    <div class="row">
        <div class="col-md-12">
            <ul class="profile-menu-list">
                <li>
                    <a href="<?php echo e(route('track.order')); ?>">
                        <div class="menu-text">My Orders</div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('profile.saved-address')); ?>">
                        <div class="menu-text">Saved Address</div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('gift-vouchers')); ?>">
                        <div class="menu-text">Gift Vouchers</div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('contact')); ?>">
                        <div class="menu-text">Contact Us</div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="menu-text">About Us</div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php echo $__env->make('website.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH D:\anu mostech\delunh\resources\views/website/profile.blade.php ENDPATH**/ ?>