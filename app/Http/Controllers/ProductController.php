<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct() {

        $this->middleware('auth')->except(['index','show']);
        $this->middleware('admin')->only(['store', 'update', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        //
             //$name_regex = "/^a-zA-Z\s*$/";
           // $description_regex = '/^a-z0-9+$/i';
        echo 'I am here';

        var_dump($request->input('product.0.name'));
      /*  $this->validate(request(), [
           
            'name' => array('required','string','max:255','regex:'.'/^a-zA-Z\s*$/' ),
            'type' => array('required','string','max:255','regex:'.'/^a-zA-Z\s*$/' ),
            'price' => 'required|numeric',
            'description' => array('required','regex:'.'/^a-z0-9+$/i' ),
            'image' => 'required'
            ]);*/

     /*   $product = Product::create(['name' => 'Kunal',
                                'type' => '$request->type',
                                'price' => '1',
                                'description' => '$request->description',
                                'image' => '$request->image'
                                 ]);

        return $product;*/

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
