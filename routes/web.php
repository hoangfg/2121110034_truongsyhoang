<?php

use Illuminate\Support\Facades\Route;
// controller frontend
use App\Http\Controllers\frontend\SiteController;
// controller backend
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\OrderdetailController;
use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\LoginController;

// trang người dùng
Route::get('/', [SiteController::class, 'index'])->name('site.index');

// trang admin
Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    //product
    Route::resource('product', ProductController::class);
    Route::get('product_trash', [ProductController::class, 'trash'])->name('product.trash');
    Route::prefix('product')->group(function () {
        Route::get('status/{product}', [ProductController::class, 'status'])->name('product.status');
        Route::get('delete/{product}', [ProductController::class, 'delete'])->name('product.delete');
        Route::get('show/{product}', [ProductController::class, 'show'])->name('product.show');
        Route::get('restore/{product}', [ProductController::class, 'restore'])->name('product.restore');

    });

    Route::resource('brand', BrandController::class);
    // category
    Route::resource('category', CategoryController::class);
    Route::prefix('category')->group(function () {
        Route::get('status/{category}', [CategoryController::class, 'status'])->name('category.status');
        Route::get('delete/{category}', [CategoryController::class, 'delete'])->name('category.delete');
    });
   


    Route::resource('contact', ContactController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('order', OrderController::class);
    Route::resource('orderdetail', OrderdetailController::class);
    Route::resource('page', PageController::class);
    Route::resource('post', PostController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('topic', TopicController::class);
    Route::resource('user', UserController::class);
    Route::resource('login', LoginController::class);
});
