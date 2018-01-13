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

    public function viewProfile($id){

        $user = User::find($id);

        if($user != null)
            return view('profile.index')->with(compact('user')); 
        
        \Session::flash('flash-msg', 'لم يتم العثور على نتيجة');
        return redirect('/');
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
