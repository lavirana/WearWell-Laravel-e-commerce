<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\shopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('shop/men', [shopController::class, 'men'])->name('shop.men');
Route::get('shop/women', [shopController::class, 'women'])->name('shop.women');
Route::get('category-listing', [shopController::class, 'category_listing'])->name('category-listing');

Route::get('/product-detail', [shopController::class, 'product_detail'])->name('product-detail');

require __DIR__.'/auth.php';
