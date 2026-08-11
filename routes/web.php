<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard;

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

Route::get('/admin/dashboard', Dashboard::class);
