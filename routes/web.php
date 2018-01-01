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

Route::prefix('order')->middleware('auth')->group(function (){
    #Order
    Route::get('/{id}', 'OrderController@show')->name('order');
    Route::get('/sell/{id}', 'OrderController@sell')->name('order.sell');
    Route::get('/buy/{id}', 'OrderController@book')->name('order.buy');

    Route::get('/cancel/{id}', 'OrderController@cancel')->name('order.cancel');

    #Order-> Supervisor Only
    Route::get('/approve/{id}', 'OrderController@approve')->name('order.approve');
    Route::get('/disapprove/{id}', 'OrderController@disapprove')->name('order.disapprove');
    Route::get('/done/{id}', 'OrderController@success')->name('order.done');
});


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
