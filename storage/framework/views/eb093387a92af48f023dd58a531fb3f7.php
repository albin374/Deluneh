<?php echo $__env->make('website.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('website.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<style>
.navigation {
    display: none;
}
.highlated-sale.top-highlated.d-lg-block.d-none{
   display:none!important; 
}
.cart-empty-container {
    text-align: center;
    padding: 80px 20px;
    background-color: #fff;
    min-height: 60vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.cart-empty-container img {
    max-width: 250px;
    margin-bottom: 30px;
}
.cart-empty-container h2 {
    font-size: 22px;
    font-weight: 700;
    color: #1a2024;
    margin-bottom: 15px;
}
.cart-empty-container p {
    font-size: 15px;
    color: #737373;
    margin-bottom: 35px;
}
.cart-btn-group {
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

<div class="cart-empty-container">
    <img src="<?php echo e(asset('images/empty-cart.png')); ?>" alt="Empty Cart">
    <h2>Your cart is empty and looking for love.</h2>
    <p>Add products to your cart, review them anytime and easily checkout.</p>
    <div class="cart-btn-group">
        <a href="<?php echo e(url('/')); ?>" class="btn btn-continue-shopping">CONTINUE SHOPPING</a>
        <a href="<?php echo e(url('/login')); ?>" class="btn btn-login">LOGIN</a>
    </div>
</div>

<?php echo $__env->make('website.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH D:\anu mostech\delunh\resources\views/website/empty-cart.blade.php ENDPATH**/ ?>