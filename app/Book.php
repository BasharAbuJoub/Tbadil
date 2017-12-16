<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = ['name_ar', 'name_en', 'year', 'university_id', 'price'];

    public function university(){
        return $this->belongsTo('App/University');
    }


    




}
