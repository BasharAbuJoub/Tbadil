<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    //

    public function buyIndex(){
        return view('books.buy');
    }


    public function sellIndex(){
        return view('books.sell');
    }

}
