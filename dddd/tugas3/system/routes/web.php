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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/flatshoes', function () {
    return view('flatshoes');
});

Route::get('/Login', function () {
    return view('Login');

});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/beranda', function () {
    return view('section.beranda');
});
Route::get('/user', function () {
    return view('section.user');
});
Route::get('/Logout', function () {
    return view('Login');
});
Route::get('/produk', function () {
    return view('section.produk');
});
Route::get('/kategori', function () {
    return view('section.kategori');
});

