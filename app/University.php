<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //
    protected $fillable = [
        'name_ar', 'name_en',
    ];


    public function users(){
        return $this->hasMany("App\User");
    }



}
