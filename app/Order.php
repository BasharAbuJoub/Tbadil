<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function buyer(){
        return $this->belongsTo('App/User','buyer_id');
    }

    public function seller(){
        return $this->belongsTo('App/User', 'seller_id');
    }

    public function issuer(){
        return $this->belongsTo('App/User', 'issuer_id');
    }

    public function book(){
        return $this->belongsTo('App/Book', 'book_id');
    }

    public function university(){
        return $this->book();
    }

}
