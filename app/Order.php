<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['book_id', 'seller_id', 'buyer_id', 'issuer_id', 'status',
        'purchase_time' ,'rating'];


    public function buyer(){
        return $this->belongsTo('App\User','buyer_id');
    }

    public function seller(){
        return $this->belongsTo('App\User', 'seller_id');
    }

    public function issuer(){
        return $this->belongsTo('App\User', 'issuer_id');
    }

    public function book(){
        return $this->belongsTo('App\Book', 'book_id')->first();
    }

    public function university(){
        return $this->book()->university();
    }

}
