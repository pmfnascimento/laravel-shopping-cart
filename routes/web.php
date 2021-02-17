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

<<<<<<< HEAD
Route::get('/', [ProductController::class, 'index'])->name('shop.index');

Route::get('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add-to-cart');

Route::get('/shopping-cart', [ProductController::class, 'getCart'])->name('shopping-cart');
=======
Route::get('/', [ProductController::class, 'index']);
>>>>>>> a5396dd8df771f8f884aea0b4a306973bc89fc7d

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
<<<<<<< HEAD

Route::get('/users/profile', [HomeController::class, 'profile'])->name('profile');
=======
>>>>>>> a5396dd8df771f8f884aea0b4a306973bc89fc7d
