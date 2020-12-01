<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controllers\BDController::class, "drawTableProduct"]);

Route::post('/exportxls', [Controllers\XlsController::class, "ImportIsFileToBd"]);

Route::get('/add_product', function(){ return view('add_product');});
Route::post('/add_product_bd', [Controllers\BDController::class, "addCardProduct"]);

Route::get('/product-table', [Controllers\BDController::class, "drawTableProduct"]);

Route::get('/product-cart/{id}', [Controllers\BDController::class, "drawCartProduct"]);

Route::get('/order-cart', function () {
    return view('order-cart');
});

Route::get('/order-table', function () {
    return view('order-table');
});

Route::get('/login', function () {
    return view('auth-login');
});