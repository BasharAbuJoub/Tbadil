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



Route::get('admin/orders', 'AdminController@orders')->middleware('auth');

Route::get('admin/books', 'AdminController@books')->middleware('auth');

Route::get('admin/universities', 'AdminController@universities')->middleware('auth');




