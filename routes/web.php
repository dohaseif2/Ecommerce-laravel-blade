<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\dashboard\ProductController as DashboardProductController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class,'index']);
Route::get('/shop/{category}',[ProductController::class,'index'])->name('shop');
Route::get('/site/product/{id}',[ProductController::class,'show'])->name('site.product.show');
// Route::get('/dashboard',[ProductController::class,'index'])->name('dashboard');
Route::resource('/product',DashboardProductController::class);

