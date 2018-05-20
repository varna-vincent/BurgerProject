<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     /**
     * Get the order item that owns the product.
     */

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type', 'price','description','image'
    ];

 
     public function orderproduct()
    {
        return $this->belongsTo(OrderProduct::class);
    }
}
