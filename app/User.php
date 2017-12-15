<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone' ,'university_id', 'birth',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function university(){
        return $this->belongsTo('App\University')->first();
    }


    public function purchaseOrders(){
        return $this->hasMany('App\Order', 'buyer_id');
    }

    public function sellOrders(){
        return $this->hasMany('App\Order','seller_id');
    }


    public function orders(){
        return $this->purchaseOrders()->get()->merge($this->sellOrders()->get());
    }



}
