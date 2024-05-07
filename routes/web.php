<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class,'index']);
Route::get('/shop/{category}',[ProductController::class,'index'])->name('shop');
