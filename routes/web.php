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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('profil');
});
Route::get('/blog', function () {
    // return view('welcome');
    return view('blog');
});
Route::get('/blog/kategori/ekonomi', function () {
    return view('blog-ekonomi');
    // return view('ekonomi');
});
Route::get('/blog/kategori/sosial', function () {
    return view('blog-sosial');
});
Route::get('/blog/kategori/kesehatan', function () {
    return view('blog-kesehatan');
});
Route::get('/blog/dampak-covid-19-para-pedagang-mengalami-penurunan-pendapatan', function () {
    return view('blog1');
});
Route::get('/blog/pandemi-covid-19-di-mata-anak-anak-gayungan', function () {
    return view('blog2');
});
Route::get('/blog/kelurahan-gayungan-dalam-pencegahan-dan-mengatasi-pandemi-virus-covid-19', function () {
    return view('blog3');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/test2', function () {
    return view('test2');
});
Route::get('/test3', function () {
    return view('test3');
});
// Route::get('blog', 'BlogController@index');
Route::get('/poster', function () {
    return view('poster');
});
Route::get('/portal-data', function () {
	return view('portal-data');
});
Route::get('/tentang', function () {
	return view('tentang');
});