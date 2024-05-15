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

Route::get("/shop",[ProductController::class,'index'])->name('shop');
Route::post("shop/{id}",[ProductController::class,'show'])->name("product");

Route::get('/cart',[CartController::class,'cart'])->name('cart');
