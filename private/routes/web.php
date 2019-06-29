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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.admin.lihat');
});

Route::get('post', function () {
    return view('pages.admin.post');
});

Route::get('lihat', function () {
    return view('pages.admin.lihat');
});

Route::get('dtpengunjung', function () {
    return view('pages.admin.dtpengunjung');
});


Route::get('profil', function () {
    return view('pages.admin.profil');
});

Route::get('login', function () {
    return view('pages.admin.login');
});
//Route::get('blog',"BlogController@index");

//user view

Route::get('home', function () {
    return view('pages.user.home');
});

Route::get('about', function () {
    return view('pages.user.about');
});

Route::get('comics', function () {
    return view('pages.user.comics');
});

Route::get('novels', function () {
    return view('pages.user.novels');
});

Route::get('films', function () {
    return view('pages.user.films');
});

Route::get('readmore', function () {
    return view('pages.user.readmore');
});

