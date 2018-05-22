<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
	

/**
     * Get the order item that owns the product.
     */
     public function orderproduct()
    {
        return $this->belongsTo(OrderProduct::class);
    }
}
