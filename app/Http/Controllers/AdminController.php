<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //


    public function booksIndex(){


        return view('admin.books');

    }


    public function universitiesIndex(){

        return view('admin.universities');

    }

}
