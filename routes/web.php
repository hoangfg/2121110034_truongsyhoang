<?php

use Illuminate\Support\Facades\Route;
// controller frontend
use App\Http\Controllers\frontend\SiteController;
// controller backend
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\OrderdetailController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\UserController;

// trang người dùng
Route::get('/', [SiteController::class,'index'])->name('site.index');

// trang admin
Route::prefix('admin')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('product', ProductController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('order', OrderController::class);
    Route::resource('orderdetail', OrderdetailController::class);
    Route::resource('post', PostController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('topic', TopicController::class);
    Route::resource('user', UserController::class);
});
