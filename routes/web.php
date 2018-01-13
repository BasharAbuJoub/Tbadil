<?php


Route::get('/', function () {
    return view('pages.home');
});

#Profile
Route::prefix('profile')->middleware('auth')->group(function (){
    Route::get('/','profileController@index')->name('profile');
    Route::post('/update', 'profileController@update')->name('profile.update');
});



#Books
Route::resource('books', 'BooksController')->middleware('auth');

Route::prefix('order')->middleware('auth')->group(function (){
    #Order
    Route::get('/{id}', 'OrderController@show')->name('order');
    Route::get('/sell/{id}', 'OrderController@sell')->name('order.sell');
    Route::get('/buy/{id}', 'OrderController@book')->name('order.buy');

    Route::get('/cancel/{id}', 'OrderController@cancel')->name('order.cancel');

    #Order-> Supervisor Only
    Route::get('/approve/{id}', 'OrderController@approve')->name('order.approve')->middleware('supervisor');
    Route::get('/disapprove/{id}', 'OrderController@disapprove')->name('order.disapprove')->middleware('supervisor');
    Route::get('/done/{id}', 'OrderController@success')->name('order.done')->middleware('supervisor');
});



//Admin
Route::prefix('control')->middleware('auth')->group(function (){
    Route::get('/books', 'AdminController@booksIndex')->name('admin.books')->middleware('admin');
    Route::get('/universities', 'AdminController@universitiesIndex')->name('admin.universities')->middleware('admin');
    Route::get('/users', 'AdminController@usersIndex')->name('admin.users')->middleware('admin');
    Route::get('/dashboard', 'ControlPanelController@index')->name('controlpanel')->middleware('supervisor');
});

//Mixed
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

