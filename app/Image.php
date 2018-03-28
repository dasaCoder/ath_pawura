<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image_path','advertisement_id'
    ];
    public function advertisement(){
        return $this->belongsTo('advertisement','advertisement_id');
    }
}