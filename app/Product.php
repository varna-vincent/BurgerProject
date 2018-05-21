<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	  use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
     /**
     * Get the order item that owns the product.
     */
     public function orderproduct()
    {
        return $this->belongsTo(OrderProduct::class);
    }
}
