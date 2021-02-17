<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;


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

Route::get('/', [ProductController::class, 'index'])->name('shop.index');

Route::get('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add-to-cart');

Route::get('/shopping-cart', [ProductController::class, 'getCart'])->name('shopping-cart');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/users/profile', [HomeController::class, 'profile'])->name('profile');
