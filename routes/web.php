<?php


Route::get('/', function () {
    return view('pages.home');
});

//Testing

Route::view('/profile','profile.index');


//Production

Route::get('admin/orders', 'AdminController@orders')->middleware('auth');

Route::get('admin/books', 'AdminController@books')->middleware('auth')->name('Ahmad');

Route::get('admin/universities', 'AdminController@universities')->middleware('auth');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
