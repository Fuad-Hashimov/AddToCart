<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/

Route::get("/",[PagesController::class,'index'])->name("home");

// Route::get("/shop",[ProductController::class,'index'])->name('shop');
// Route::get("shop/{id}",[ProductController::class,'show'])->name("product");
Route::prefix('shop')->group(function () {
    Route::get('', [ProductController::class, 'index'])->name('shop');
    Route::get('/{id}', [ProductController::class, 'show'])->name('product');
});

Route::prefix('cart')->group(function(){
    Route::get('',[CartController::class,'cart'])->name('cart');
    Route::get('/{id}',[CartController::class,'addToCart'])->name("add.to.cart");
    Route::get('delete-from-cart/{id}',[CartController::class,'delete'])->name('delete.from.cart');
    Route::get('increment/{id}/{opt?}',[CartController::class,'increment'])->name("increment");
});

