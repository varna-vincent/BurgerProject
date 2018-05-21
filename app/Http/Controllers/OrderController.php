<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($status)
    {   
        $orderproducts = null;
        $order = Order::where('user_id', auth()->user()->id)->where('status', $status)->first();

        if($order != null) { 
            $orderproducts = OrderProduct::where('order_id', $order->id)->get();
        }

        if($orderproducts != null && !empty($orderproducts)) {
            $total = $orderproducts->reduce(function ($sum, $order) {
                return $sum += ($order->price * $order->quantity);
            }, 0);
        }
        
        return view($status == 'Cart' ? 'cart' : 'orderHistory', compact('order','orderproducts','total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'id' => 'bail|required',
            'price' => 'required',
            'name' => 'required'
        ]);

        $order = Order::firstOrCreate(['user_id' => auth()->user()->id, 'status' => 'Cart'], ['status' => 'Cart']);
        $orderproduct = OrderProduct::firstOrNew(['order_id' => $order->id, 'product_id' => $request->input('id')]);
        $orderproduct->name = $request->input('name');
        $orderproduct->quantity = $orderproduct->quantity + 1;
        $orderproduct->price = $request->input('price');
        $orderproduct->save();

        return $orderproduct;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
       
    }
}
