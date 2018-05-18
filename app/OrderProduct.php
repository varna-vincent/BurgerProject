<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    /**
     * Get the user that owns the phone.
     */
    public function order()
    {
    	return $this->belongsTo('App\Order');
    } 

     public function products()
    {
    	return $this->belongsTo('App\Product');
    } 



}
