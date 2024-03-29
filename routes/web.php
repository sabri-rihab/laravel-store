<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/', function () {
    return view('Home');
});
Route::get('/', [ProductsController::class, 'index'])->name('Home');
Route::get('/products ', [ProductsController::class, 'index_2']);

Route::get('/products/{id}', 'ProductsController@fetchProductDetails');


Route::view('/login', 'login')->name('login');
Route::view('/products', 'products')->name('products');
