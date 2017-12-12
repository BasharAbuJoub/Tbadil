<?php


Route::get('/', function () {
    return view('pages.home');
});

//Testing

Route::view('/profile','profile.index')->name('profile');


//Production

Route::get('admin/orders', 'AdminController@orders')->middleware('auth');

Route::get('admin/books', 'AdminController@books')->middleware('auth')->name('Ahmad');

Route::get('admin/universities', 'AdminController@universities')->middleware('auth');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
