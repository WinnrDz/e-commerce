<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Products;
use App\Livewire\Admin\Categories;

Route::get('/', function () {
    return view('layouts/welcome');
});


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
