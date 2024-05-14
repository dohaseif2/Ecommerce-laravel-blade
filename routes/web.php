<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\dashboard\ProductController as DashboardProductController;
use App\Http\Controllers\dashboard\CategoryController as DashboardCategoryController;
use App\Http\Controllers\dashboard\OrderController as DashboardOrderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class,'index'])->name('homePage')->middleware(['auth','roleCheck']);
Route::get('/shop/{category}',[ProductController::class,'index'])->where('category','[0-9]+')->name('shop')->middleware(['auth','roleCheck']);
Route::get('/site/product/{id}',[ProductController::class,'show'])->where('id','[0-9]+')->name('site.product.show')->middleware(['auth','roleCheck']);
Route::get('/shop',[ProductController::class,'getAllProducts'])->name('products')->middleware(['auth','roleCheck']);
Route::get('/cart',[CardController::class,'index'])->name('cart')->middleware(['auth','roleCheck']);
Route::get('/card/add/{id}',[CardController::class,'add'])->where('id','[0-9]+')->name('addToCard')->middleware(['auth','roleCheck']);
Route::delete('/card/{id}',[CardController::class,'delete'])->where('id','[0-9]+')->name('deleteFromCard')->middleware(['auth','roleCheck']);
Route::get('/checkout',[OrderController::class,'index'])->name('checkout')->middleware(['auth','roleCheck']);
Route::post('/checkout/store',[OrderController::class,'store'])->name('checkout.store')->middleware(['auth','roleCheck']);


//Dashboard routes
Route::resource('/product',DashboardProductController::class)->middleware(['auth']);
Route::resource('/category',DashboardCategoryController::class)->middleware(['auth']);
Route::resource('/order',DashboardOrderController::class)->middleware(['auth']);


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
