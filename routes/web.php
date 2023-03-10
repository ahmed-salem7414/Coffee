<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/', 'App\Http\Controllers\ProductsController@product');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('search', 'App\Http\Controllers\ProductsController@search_product');

Route::get('products', 'App\Http\Controllers\ProductsController@all_product');

Route::get('product/{id?}', 'App\Http\Controllers\ProductsController@product');
Route::get('add_cart/{id?}', 'App\Http\Controllers\ProductsController@add_cart');

Route::get('product_detail/{id?}', 'App\Http\Controllers\ProductsController@product_detail');
Route::get('logout/', 'App\Http\Controllers\ProductsController@logout');
Route::get('coffee', function () {
    return view('coffee');
});

Route::get('advanced_search', 'App\Http\Controllers\ProductsController@show_filter');
Route::post('filter', 'App\Http\Controllers\ProductsController@advaned_search');

Route::get('about', function () {
    return view('about');
});
