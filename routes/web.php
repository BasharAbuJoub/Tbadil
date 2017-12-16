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
Route::resource('books', 'BooksController');

//Admin
Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/books', 'AdminController@booksIndex')->name('admin.books');
    Route::get('/universities', function (){})->name('admin.universities');
    Route::get('/users', function (){})->name('admin.users');
});



//Mixed
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//API


Route::get('/api/universities/', function(){

    return \App\University::all('id', 'name_ar', 'name_en');

})->name('api.universities');
