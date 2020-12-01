<?php

use Illuminate\Support\Facades\Route;


Route::get('/product-cart', function () {
    return view('order-cart');
});

Route::get('/order-cart', function () {
    return view('order-cart');
});

Route::get('/product-table', function () {
    return view('product-table');
});

Route::get('/order-table', function () {
    return view('order-table');
});

Route::get('/login', function () {
    return view('auth-login');
});