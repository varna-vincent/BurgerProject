@extends('layouts.master')

@section('content')
<div class="container d-flex p-3 justify-content-center">
  <div class="d-flex w-100 pt-3 flex-column">
      <div class="text-center">
      <h1 class="pb-2">My Orders</h1> 
      @empty($orders)
      <p class="text-muted">You have no orders</p>
      @endempty
      @isset($orders)
      @foreach($orders as $order)
      <div class="d-flex flex-column">
      <h2 class="price">{{ Carbon\Carbon::parse($order->ordered_on)->toDayDateTimeString() }}</h2>
        @isset($order->orderproducts)
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
            @foreach($order->orderproducts as $index => $item)
            <tr>
              <td class="w-25">
                  <img src="../images/items/bacon-cheeseburger.jpg" class="w-100 h-25 figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
              </td>
              <th scope="row">{{ $item->name }}</th>
              <td><label id="quantity_{{$index}}">{{ $item->quantity }}</label></td>
              <td><label id="price_{{$index}}" class="price-small"> ${{ $item->price}}</label></td>
              <td id="each_product_total_price_{{$index}}" class="price-small">${{ $item->price * $item->quantity}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @endisset
        <hr/>
      </div>
      @endforeach
      @endisset
    </div>
  </div>
</div>
<script src="{{ asset('js/cartValidations.js') }}"></script>
@endsection


