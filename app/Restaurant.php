<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'slug'
    ];

    //RELATIONS

    public function type() {
        return $this->belongsToMany('App\Type');
    }
    public function owner() {
        return $this->hasOne('App\Owner');
    }
    public function food() {
        return $this->hasMany('App\Food');
    }

}
