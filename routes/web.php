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
        Route::get('destroy/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
        Route::get('show/{product}', [ProductController::class, 'show'])->name('product.show');
        Route::get('restore/{product}', [ProductController::class, 'restore'])->name('product.restore');
    });
    // brand
    Route::resource('brand', BrandController::class);
    route::get('brand_trash', [BrandController::class, 'trash'])->name('brand.trash');
    route::prefix('brand')->group(function () {
        route::get('status/{brand}', [BrandController::class, 'status'])->name('brand.status');
        Route::get('show/{brand}', [BrandController::class, 'show'])->name('brand.show');
        route::get('delete/{brand}', [BrandController::class, 'delete'])->name('brand.delete');
        route::get('destroy/{brand}', [BrandController::class, 'destroy'])->name('brand.destroy');
        route::get('restore/{brand}', [BrandController::class, 'restore'])->name('brand.restore');
    });
    // category
    Route::resource('category', CategoryController::class);
    
    route::get('category_trash', [CategoryController::class, 'trash'])->name('category.trash');
    Route::prefix('category')->group(function () {
        Route::get('status/{category}', [CategoryController::class, 'status'])->name('category.status');
        Route::get('delete/{category}', [CategoryController::class, 'delete'])->name('category.delete');
        Route::get('destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
        Route::get('show/{category}', [CategoryController::class, 'show'])->name('category.show');
        Route::get('restore/{category}', [CategoryController::class, 'restore'])->name('category.restore');
    });


    // contact
    Route::resource('contact', ContactController::class);
    // customer
    Route::resource('customer', CustomerController::class);
    // menu
    Route::resource('menu', MenuController::class);
    // order
    Route::resource('order', OrderController::class);
    // orderdertail
    Route::resource('orderdetail', OrderdetailController::class);
    // page
    Route::resource('page', PageController::class);
    Route::get('page_trash', [PageController::class, 'trash'])->name('page.trash');
    Route::prefix('page')->group(function () {
        Route::get('status/{page}', [PageController::class, 'status'])->name('page.status');
        Route::get('delete/{page}', [PageController::class, 'delete'])->name('page.delete');
        Route::get('destroy/{page}', [PageController::class, 'destroy'])->name('page.destroy');
        // Route::get('show/{page}', [PageController::class, 'show'])->name('page.show');
        Route::get('restore/{page}', [PageController::class, 'restore'])->name('page.restore');
    });
    // post
    Route::resource('post', PostController::class);
    // slider
    Route::resource('slider', SliderController::class);
    // topic
    Route::resource('topic', TopicController::class);


    // user
    Route::resource('user', UserController::class);

    // login - res...
    Route::post('login', [LoginController::class, 'login'])->name('login');
});
