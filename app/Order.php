<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['book_id', 'seller_id', 'buyer_id', 'issuer_id', 'status',
        'purchase_time' ,'rating'];


    public function buyer(){
        return $this->belongsTo('App\User','buyer_id')->first();
    }

    public function seller(){
        return $this->belongsTo('App\User', 'seller_id')->first();
    }

    public function supervisor(){
        return $this->belongsTo('App\User', 'issuer_id')->first();
    }

    public function book(){
        return $this->belongsTo('App\Book', 'book_id')->first();
    }

    public function university(){
        return $this->book()->university();
    }

    public function hasBuyer(){
        return $this->buyer_id != null;
    }

    public function arStatus(){
        switch ($this->status){
            case -2:
                return 'تم إلغاء طلب البيع';
            case -1:
                return 'تم الغاء تأكيد الطلب';
            case 0:
                return 'جاري تأكيد الطلب';
            case 1:
                return 'تم تأكيد الطلب';
            case 2:
                return 'تم حجز الكتاب';
            case 3:
                return 'تمت عملية البيع بنجاح';
            default:
                return '-';
        }
    }

}
