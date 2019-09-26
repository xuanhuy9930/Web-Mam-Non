<?php

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
    return view('page.home');
})->name('home');
Route::get('/product', function () {
    return view('page.product');
})->name('product');
Route::get('/product-detail', function () {
    return view('page.product-detail');
})->name('product-detail');

