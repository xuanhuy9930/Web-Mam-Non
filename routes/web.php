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
});
<<<<<<< HEAD
=======

<<<<<<< HEAD
Route::get('/document', function () {
    return view('page.document');
})->name('document');

Route::get('/document_detail', function () {
    return view('page.document_detail');
})->name('document_detail');
=======
>>>>>>> 7e803ad7dc6f3bb1623b5631dbd2ef4de7ff3d29
Route::get('/tintuc', function () {
    return view('page.tintuc');
});
Route::get('/chitiettintuc', function () {
    return view('page.chitiettintuc');
});
<<<<<<< HEAD
=======



>>>>>>> 7e803ad7dc6f3bb1623b5631dbd2ef4de7ff3d29
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
<<<<<<< HEAD
=======

>>>>>>> c35e0ef41d3551d35cdf77da4e15b89c4db277eb
>>>>>>> 7e803ad7dc6f3bb1623b5631dbd2ef4de7ff3d29
