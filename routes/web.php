<?php

use Illuminate\Support\Facades\Route;
use App\Constants\RouteNames;
use App\Http\Controllers\HomeController;

Route::get('/welcome', function () {return view('welcome');});
Route::get('/', [HomeController::class, 'index'])->name(RouteNames::HOME_INDEX);
Route::get('/product', [HomeController::class, 'product'])->name(RouteNames::PRODUCT_INDEX);
Route::get('/notify', [HomeController::class, 'notify'])->name('notify');
Route::get('/single-product/{slug?}', [HomeController::class, 'single_product'])->name(RouteNames::SINGLE_PRODUCT_INDEX);
Route::get('/cart', [HomeController::class, 'cart'])->name(RouteNames::CART);
Route::get('/checkout', [HomeController::class, 'checkout'])->name(RouteNames::CHECKOUT);
Route::get('/clear', function () {
    \Artisan::call('config:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('config:cache');
    return 'Cleared!';
});
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/otp-verify', [AuthController::class, 'showOtpForm'])->name('otp.verify');
Route::post('/otp-verify', [AuthController::class, 'verifyOtp']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

use App\Http\Controllers\CategoryController;
Route::get('/debug-footwear', function() {
    return \App\Models\Category::where('slug', 'like', '%footwear%')->get();
});

Route::get('/debug-footwear-2', function() {
    return \App\Models\Category::where('slug', 'like', '%footwear%')->get();
});

Route::get('/migrate-fresh', function () {
    // Run the migrate:fresh command
    Artisan::call('migrate:fresh');
    $migrateOutput = Artisan::output();

    // Run the db:seed --class=CategoryHierarchySeeder command
    Artisan::call('db:seed', ['--class' => 'CategoryHierarchySeeder']);
    $hierarchyOutput = Artisan::output();

    // Return the output
    return "Migrations applied successfully!<br><br>Migrate output:<br>" . nl2br($migrateOutput) . "<br><br>Hierarchy output:<br>" . nl2br($hierarchyOutput);
});

Route::redirect('/wishlist.html', '/wishlist');
Route::redirect('/cart.html', '/cart');

Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('website.wishlist');
Route::post('/add-to-wishlist', [HomeController::class, 'addToWishlist'])->name('wishlist.add');



Route::post('/add-to-cart', [HomeController::class, 'addToCart'])->name('cart.add');
Route::post('/remove-from-cart', [HomeController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/place-order', [HomeController::class, 'placeOrder'])->name('order.place');

Route::get('/track-order', [HomeController::class, 'trackOrder'])->name('track.order');

Route::get('/blog', function() {
    $blogs = \App\Models\Blog::orderBy('date', 'desc')->get();
    return view('website.blog', compact('blogs'));
})->name('blog');

Route::get('/blog/{id}', function($id) {
    $blog = \App\Models\Blog::findOrFail($id);
    return view('website.single-blog', compact('blog'));
})->name('blog.show');

Route::get('/{path}', [CategoryController::class, 'show'])->where('path', '.*');
