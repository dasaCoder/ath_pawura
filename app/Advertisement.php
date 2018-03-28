<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = [
        'title','type','price','description'
    ];

    public function user(){
        return $this->belongsTo('user','user_id');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }
}
