<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();


});


Route::get('universities', function(){
    return \App\University::all(['id', 'name_ar','name_en']);
});

Route::post('uniBooks', function(){
    return \App\Book::where('university_id', Auth::user()->university()->id)->get();
})->middleware('auth:api');

Route::get('/universityName/{id}/{lang}', function($id, $lang){
    if($lang == "en" || $lang == "ar"){
        $uni = \App\University::find($id);
        if($uni != null)
            return $lang == "ar" ? $uni->name_ar : $uni->name_en;
    }else
        return null;
});


Route::get('/book/isInStock/{id}', function ($id){
    $count = \App\Order::where('book_id', $id)->get()->count();
    return json_encode($count > 0);
});


Route::post('books', function(){
    if(Auth::user()->role > 2){
        return \App\Book::all();
    }
    return null;
})->middleware('auth:api');


