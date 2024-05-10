<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\dashboard\ProductController as DashboardProductController;
use App\Http\Controllers\dashboard\CategoryController as DashboardCategoryController;
use App\Http\Controllers\dashboard\OrderController as DashboardOrderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class,'index'])->name('homePage');
Route::get('/shop/{category}',[ProductController::class,'index'])->name('shop');
Route::get('/site/product/{id}',[ProductController::class,'show'])->name('site.product.show');

Route::get('/cart',[CardController::class,'index'])->name('cart');
Route::get('/card/add/{id}',[CardController::class,'add'])->name('addToCard');
Route::delete('/card/{id}',[CardController::class,'delete'])->name('deleteFromCard');
Route::get('/checkout',[OrderController::class,'index'])->name('checkout');
Route::post('/checkout/store',[OrderController::class,'store'])->name('checkout.store');


//Dashboard routes
Route::resource('/product',DashboardProductController::class);
Route::resource('/category',DashboardCategoryController::class);
Route::resource('/order',DashboardOrderController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
