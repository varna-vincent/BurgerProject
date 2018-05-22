<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class OrderProduct extends Model
{

 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['order_id','product_id','name','quantity','price'];

    /**
     * Get the order that owns the product.
     */
    public function order()
    {
    	return $this->belongsTo(Order::class);
    } 

    /**
     * Get the product record associated with the order item.
     */
     public function product()
    {
    	return $this->hasOne(Product::class);
    } 
}
