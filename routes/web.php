<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\shopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\upload_csv;
use App\Http\Controllers\WishlistController;

Route::get('/', [homeController::class, 'index']);


Route::get('/upload-csv', [\App\Http\Controllers\upload_csv::class, 'index'])->name('upload.csv');
Route::post('/upload-csv', [upload_csv::class, 'upload'])->name('csv.upload');
Route::post('start-sync', [upload_csv::class, 'startSync'])->name('start.sync');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/get-cart', [CartController::class, 'getCart'])->name('get.cart');
Route::get('shop/men', [shopController::class, 'men'])->name('shop.men');
Route::get('shop/women', [shopController::class, 'women'])->name('shop.women');
Route::get('category-listing', [shopController::class, 'category_listing'])->name('category-listing');
Route::get('/product-detail', [shopController::class, 'product_detail'])->name('product-detail');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->middleware('auth')->name('cart.add');
Route::get('/cart-count', [CartController::class, 'getUserPendingCartCount'])->name('cart.count');

Route::get('checkout',[CartController::class, 'checkout'])->name('checkout');

Route::post('/checkout/place-order', [CheckoutController::class, 'placeOrder'])->name('checkout.place');
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');

// Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
// Route::delete('/wishlist/{id}', [WishlistController::class, 'destroy'])->name('wishlist.remove');
// Route::post('/wishlist/add', [WishlistController::class, 'store'])->name('wishlist.add');

Route::middleware(['auth'])->group(function () {
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::delete('/wishlist/{id}', [WishlistController::class, 'destroy'])->name('wishlist.remove');
    Route::post('/wishlist/add', [WishlistController::class, 'store'])->name('wishlist.add');
    Route::post('/wishlist/toggle', [WishlistController::class, 'toggle'])->name('wishlist.toggle');



});






require __DIR__.'/auth.php';
