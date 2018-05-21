@extends('layouts.master')

@section('content')
<div class="container d-flex p-3 justify-content-center">
  <div class="d-flex w-100 pt-3 flex-column">
      <div class="text-center">
      <h1 class="pb-2">My Orders</h1> 
      @empty($orderproducts)
      <p class="text-muted">You have no orders</p>
      @endempty
      @isset($orderproducts)
      <table class="mt-3 table border">
        <thead class="thead-light">
          <tr>
            <th scope="col"></th>
            <th scope="col">Product</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          @foreach($orderproducts as $index => $order)
          <tr>
            <td scope="row">
              <figure class="figure">
                <img src="../images/chickenburger.jpg" class="w-50 h-50 figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                <figcaption class="figure-caption">{{ $order->name }}</figcaption>
              </figure>
            </td>
            <th scope="row">{{ $order->name }}</th>
            <td><label id="quantity_{{$index}}">{{ $order->quantity }}</label></td>
            <td><label id="price_{{$index}}" class="price-small"> ${{ $order->price}}</label></td>
            <td id="each_product_total_price_{{$index}}" class="price-small">${{ $order->price * $order->quantity}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @endisset
    </div>
  </div>
</div>
@endsection
