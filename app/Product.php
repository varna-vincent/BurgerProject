<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     /**
     * Get the product record associated with the orderproduct.
     */
     public function orderproduct()
    {
        return $this->hasOne('App\OrderProduct');
    }
}
