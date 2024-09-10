<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BuyerController;



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

Route::resource('products', \App\Http\Controllers\ProductController::class);
Route::resource('customers', \App\Http\Controllers\CustomerController::class);
Route::resource('buyers', \App\Http\Controllers\BuyerController::class);

