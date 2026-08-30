<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Products;
use App\Livewire\Admin\Categories;
use App\Livewire\Admin\Variants;
use App\Livewire\Admin\Carts;
use App\Livewire\Admin\Orders;
use App\Livewire\Admin\Reviews;

Route::get('/', function () {
    return view('layouts/welcome');
})->name("welcome");


Route::get('/show', function () {
    return view('Show');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/admin/dashboard', Dashboard::class)->name("admin.dashboard");
Route::get('/admin/products', Products::class)->name("admin.products");
Route::get('/admin/categories', Categories::class)->name("admin.categories");
Route::get('/admin/variants', Variants::class)->name("admin.variants");
Route::get('/admin/carts', Carts::class)->name("admin.carts");
Route::get('/admin/orders', Orders::class)->name("admin.orders");
Route::get('/admin/reviews', Reviews::class)->name("admin.reviews");