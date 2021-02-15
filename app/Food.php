<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table='foods';

    protected $fillable = [
        'name',
        'description',
        'price',
        'photo',
        'visibility',
        'allergenic',
        'ingredients'
    ];

    public function restaurant() {
        return $this->belongsTo('App\Restaurant');
    }

    public function order() {
        return $this->hasMany('App\Order');
    }
}
