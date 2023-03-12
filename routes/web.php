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
    route::get('brand/trash', [BrandController::class, 'trash'])->name('brand.trash')->where('trash', '[A-Za-x]+');
    Route::resource('brand', BrandController::class);
    route::prefix('brand')->group(function () {
        route::get('status/{brand}', [BrandController::class, 'status'])->name('brand.status');
        route::get('delete/{brand}', [BrandController::class, 'delete'])->name('brand.delete');
        route::get('destroy/{brand}', [BrandController::class, 'destroy'])->name('brand.destroy');
        route::get('restore/{brand}', [BrandController::class, 'restore'])->name('brand.restore');
    });
    // category
    route::get('category/trash', [CategoryController::class, 'trash'])->name('category.trash')->where('trash', '[A-Za-x]+');
    Route::resource('category', CategoryController::class);
    route::prefix('category')->group(function () {
        route::get('status/{category}', [CategoryController::class, 'status'])->name('category.status');
        route::get('delete/{category}', [CategoryController::class, 'delete'])->name('category.delete');
        route::get('destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
        route::get('restore/{category}', [CategoryController::class, 'restore'])->name('category.restore');
    });



    // contact
    Route::resource('contact', ContactController::class);
    route::get('contact_trash', [ContactController::class, 'trash'])->name('contact.trash');
    Route::prefix('contact')->group(function () {
        Route::get('edit/{contact}', [ContactController::class, 'replay'])->name('contact.replay');
        Route::get('restore/{contact}', [ContactController::class, 'restore'])->name('contact.restore');
        Route::get('show/{contact}', [ContactController::class, 'show'])->name('contact.show');
        Route::get('delete/{contact}', [ContactController::class, 'delete'])->name('contact.delete');
        Route::get('destroy/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');
    });
    // customer
    Route::resource('customer', CustomerController::class);
    Route::get('customer_trash', [CustomerController::class, 'trash'])->name('customer.trash');
    Route::prefix('customer')->group(function () {
        Route::get('status/{customer}', [CustomerController::class, 'status'])->name('customer.status');
        Route::get('delete/{customer}', [CustomerController::class, 'delete'])->name('customer.delete');
        Route::get('destroy/{customer}', [CustomerController::class, 'destroy'])->name('customer.destroy');
        // Route::get('show/{customer}', [CustomerController::class, 'show'])->name('customer.show');
        Route::get('restore/{customer}', [CustomerController::class, 'restore'])->name('customer.restore');
    });
    // menu
    Route::resource('menu', MenuController::class);
    Route::get('menu_trash', [MenuController::class, 'trash'])->name('menu.trash');
    Route::prefix('menu')->group(function () {
        Route::get('status/{menu}', [MenuController::class, 'status'])->name('menu.status');
        Route::get('delete/{menu}', [MenuController::class, 'delete'])->name('menu.delete');
        Route::get('destroy/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy');
        // Route::get('show/{menu}', [MenuController::class, 'show'])->name('menu.show');
        Route::get('restore/{menu}', [MenuController::class, 'restore'])->name('menu.restore');
    });
    // order
    Route::resource('order', OrderController::class);
    Route::get('order_trash', [orderController::class, 'trash'])->name('order.trash');
    Route::prefix('order')->group(function () {
        Route::get('status/{order}', [orderController::class, 'status'])->name('order.status');
        Route::get('delete/{order}', [orderController::class, 'delete'])->name('order.delete');
        Route::get('destroy/{order}', [orderController::class, 'destroy'])->name('order.destroy');
        Route::get('show/{order}', [orderController::class, 'show'])->name('order.show');
        Route::get('restore/{order}', [orderController::class, 'restore'])->name('order.restore');
    });
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
    Route::get('post_trash', [PostController::class, 'trash'])->name('post.trash');
    Route::prefix('post')->group(function () {
        Route::get('status/{post}', [PostController::class, 'status'])->name('post.status');
        Route::get('delete/{post}', [PostController::class, 'delete'])->name('post.delete');
        Route::get('destroy/{post}', [PostController::class, 'destroy'])->name('post.destroy');
        // Route::get('show/{post}', [PostController::class, 'show'])->name('post.show');
        Route::get('restore/{post}', [PostController::class, 'restore'])->name('post.restore');
    });
    // slider
    Route::resource('slider', SliderController::class);
    Route::get('slider_trash', [SliderController::class, 'trash'])->name('slider.trash');
    Route::prefix('slider')->group(function () {
        Route::get('status/{slider}', [SliderController::class, 'status'])->name('slider.status');
        Route::get('delete/{slider}', [SliderController::class, 'delete'])->name('slider.delete');
        Route::get('destroy/{slider}', [SliderController::class, 'destroy'])->name('slider.destroy');
        // Route::get('show/{slider}', [SliderController::class, 'show'])->name('slider.show');
        Route::get('restore/{slider}', [SliderController::class, 'restore'])->name('slider.restore');
    });
    // topic
    Route::resource('topic', TopicController::class);
    Route::get('topic_trash', [TopicController::class, 'trash'])->name('topic.trash');
    Route::prefix('topic')->group(function () {
        Route::get('status/{topic}', [TopicController::class, 'status'])->name('topic.status');
        Route::get('delete/{topic}', [TopicController::class, 'delete'])->name('topic.delete');
        Route::get('destroy/{topic}', [TopicController::class, 'destroy'])->name('topic.destroy');
        Route::get('show/{topic}', [TopicController::class, 'show'])->name('topic.show');
        Route::get('restore/{topic}', [TopicController::class, 'restore'])->name('topic.restore');
    });
    // user
    Route::resource('user', UserController::class);
    Route::get('user_trash', [UserController::class, 'trash'])->name('user.trash');
    Route::prefix('user')->group(function () {
        Route::get('status/{user}', [UserController::class, 'status'])->name('user.status');
        Route::get('delete/{user}', [UserController::class, 'delete'])->name('user.delete');
        Route::get('destroy/{user}', [UserController::class, 'destroy'])->name('user.destroy');
        // Route::get('show/{user}', [UserController::class, 'show'])->name('user.show');
        Route::get('restore/{user}', [UserController::class, 'restore'])->name('user.restore');
    });
    // login - res...
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
