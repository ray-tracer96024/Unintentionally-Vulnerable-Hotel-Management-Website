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
    return view('welcome');
});

Route::get('front_page', function() {
	return view('front_page');
});

Route::get('book_now', function() {
	return view('book_now');
});

Route::get('check_info', function() {
	return view('check_info');
});

