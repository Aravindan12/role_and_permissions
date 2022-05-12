<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add-product', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('add-product')->middleware('role:admin');

Route::post('/insert-product', [App\Http\Controllers\ProductController::class, 'insertProduct'])->name('insert-product');

Route::get('/product-list', [App\Http\Controllers\ProductController::class, 'productList'])->name('product-list');

Route::get('/product-delete/{id}', [App\Http\Controllers\ProductController::class, 'productDelete'])->name('product-delete');

Route::get('/product-view/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product-view');
