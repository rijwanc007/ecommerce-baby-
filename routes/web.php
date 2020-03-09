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
    return view('pages.index');
})->name('index');
Route::get('/demo', function () {
    return view('pages.demo');
});
Route::get('/product', function () {
    return view('pages.product');
})->name('product');
Route::get('/singleProduct', function () {
    return view('pages.single_product');
})->name('pages.single_product');
