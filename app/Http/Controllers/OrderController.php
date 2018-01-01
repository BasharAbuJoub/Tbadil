<?php

namespace App\Http\Controllers;

use App\Book;
use App\Order;
use Carbon\Carbon;

class OrderController extends Controller
{

    //

    #If every thing was running normal
    #The scenario will be the following
    #Sell(0)-> Approve(1)-> Book(2)-> Success(3)
    #

    #Just show the order page

    public function show($id){
        $order = Order::find($id);
        return view('orders.order')->with(compact('order'));
    }

    #-2 : User(Seller) or System (X amount of time passed on being booked)
    public function cancel($id){
        $order = Order::find($id);
        if($order->seller_id == \Auth::user()->id){
            $order->update(['status'=>-2]);
            \Session::flash('flash-msg', 'تم الغاء الطلب');
            return redirect('/order/' . $order->id);
        }else if($order->buyer_id != null && $order->buyer_id == \Auth::user()->id){
            $order->update(['status'=>1]);
            \Session::flash('flash-msg', 'تم الغاء الطلب');
            return redirect('/');

        }else{
            \Session::flash('flash-msg', 'حدث خطأ ما');
            return redirect('/');
        }
    }

    #-1 : Supervisor
    public function disapprove($id){
        $order = Order::find($id);
        $order->update(['status'=>-1]);
        \Session::flash('flash-msg', 'تم رفض طلب البيع');
        return redirect('/order/' . $order->id);
    }

    #0 : User
    public function sell($id){
        $book = Book::find($id);
        $order = Order::create([
            'book_id' => $book->id,
            'seller_id' => \Auth::user()->id,
        ]);
        \Session::flash('created', true);
        return redirect('/order/' . $order->id);
    }

    #1 : Supervisor : Ready for selling
    public function approve($id){
        $order = Order::find($id);
        $order->update(['status'=>1]);
        \Session::flash('flash-msg', 'تم الموافقه على طلب البيع');
        return redirect('/order/' . $order->id);
    }

    #2 : User
    public function book($id){
        $order = Order::find($id);
        if($order->university()->id != \Auth::user()->university()->id || $order->seller_id == \Auth::user()->id){
            #The user has no access to other university books.
            \Session::flash('flash-msg', 'عذرا .. لقد حدث خطأ ما');
            return redirect('/');
        }
        $order->update(['buyer_id' => \Auth::user()->id, 'status'=> 2]);
        \Session::flash('flash-msg', 'تم حجز الكتاب يرجى الذهاب الى الكشك الخاص بجامعتك من اجل الاستلام');
        return redirect('/order/' . $order->id);
    }

    #3 : Supervisor
    public function success($id){
        $order = Order::find($id);
        $order->update(['status'=> 3, 'issuer_id' => \Auth::user()->id , 'purchase_time'=> Carbon::now()]);
        \Session::flash('flash-msg', 'تم انهاء عملية الشراء بنجاح');
        return redirect('/order/' . $order->id);
    }




}
