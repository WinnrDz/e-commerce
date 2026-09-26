<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Products;
use App\Livewire\Admin\Categories;
use App\Livewire\Admin\Variants;
use App\Livewire\Admin\Carts;
use App\Livewire\Admin\Orders;
use App\Livewire\Admin\Reviews;
use App\Livewire\Shop;
use App\Livewire\Show;
use App\Livewire\Cart;

Route::get('/', function () {
    return view('layouts/welcome');
})->name("welcome");


Route::get('/show/{id}', Show::class)->name('show');
Route::get('/shop', Shop::class)->name("shop");
Route::get('/cart', Cart::class)->name("cart");
Route::get('/orders', App\Livewire\Account\Orders::class)->name("account.orders");
Route::get('/order/{orderId}', App\Livewire\Account\Order::class)->name('account.order');
Route::get('/account', App\Livewire\Account::class)->name('account');
Route::get('/account/reviews', App\Livewire\Account\Reviews::class)->name('account.reviews');

Route::get('/admin/dashboard', Dashboard::class)->name("admin.dashboard");
Route::get('/admin/products', Products::class)->name("admin.products");
Route::get('/admin/categories', Categories::class)->name("admin.categories");
Route::get('/admin/variants', Variants::class)->name("admin.variants");
Route::get('/admin/carts', Carts::class)->name("admin.carts");
Route::get('/admin/orders', Orders::class)->name("admin.orders");
Route::get('/admin/reviews', Reviews::class)->name("admin.reviews");






/* these are for frontend */
Route::get('/ordersRaw', function () {
    return view('orders');
})->name("ordersRaw");

Route::get('/orderRaw', function () {
    return view('order');
})->name("orderRaw");

Route::get('/aiOrder', function () {
    return view('aiOrder');
})->name("aiOrder");