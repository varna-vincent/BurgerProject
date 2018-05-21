<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderProduct extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
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
