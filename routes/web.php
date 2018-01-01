<?php


Route::get('/', function () {
    return view('pages.home');
});

//Profile

Route::prefix('profile')->middleware('auth')->group(function (){
    Route::get('/','profileController@index')->name('profile');
    Route::post('/update', 'profileController@update')->name('profile.update');
});


//Books
Route::resource('books', 'BooksController')->middleware('auth');

//Admin
Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/books', 'AdminController@booksIndex')->name('admin.books');
    Route::get('/universities', 'AdminController@universitiesIndex')->name('admin.universities');
    Route::get('/users', 'AdminController@usersIndex')->name('admin.users');
});



//Mixed
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
