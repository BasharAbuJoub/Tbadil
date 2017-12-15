<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;

class profileController extends Controller
{
    //


    public function index(){

        $user = Auth::user();

        return view('profile.index')->with(compact('user'));

    }


    public function update(Request $r){


        if($r->isMethod('post')){

            $v = $r->validate( [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'phone'=>'required',
            ]);

            $user = Auth::user();
            $user->update([
                'name' =>   $r->name,
                'email'=>   $r->email,
                'phone'=>   $r->phone
            ]);
            $r->session()->flash('updated');
            return redirect(route('profile'));

        }


    }

}
