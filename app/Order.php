<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function food() {
        return $this->hasMany('App\Food');
    }
}
