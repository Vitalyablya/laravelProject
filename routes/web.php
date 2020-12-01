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

// Route::get('/BDController', [Controllers\BDController::class, "main"]);
Route::post('/exportxls', [Controllers\XlsController::class, "ImportIsFileToBd"]);

Route::get('/auth-login', function(){
    return view('auth-login');
});
Route::get('/add_product', function(){ return view('add_product');});
Route::post('/add_product_bd', [Controllers\BDController::class, "addCard"]);

Route::get('/product-table', [Controllers\BDController::class, "drawTable"]); // product-table.blade

Route::get('/', function(){
    return view('test');
});
