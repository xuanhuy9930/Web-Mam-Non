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
});
Route::get('/danhsach',function(){
	return view('page.danhsachkhoahoc');
});
Route::get('/chi-tiet-khoa-hoc',function(){
	return view('page.chitietkhoahoc');
});
Route::get('gioithieu', function () {
    return view('page.gioithieu');
});
Route::get('lienhe', function () {
    return view('page.lienhe');
});