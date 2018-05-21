@extends('layouts.master')

@section('content')
<div class="container">
<div class="table-responsive">
  <table class="table table-striped table-hover table-condensed">
    <thead>
      <tr>
        <th><strong>User Id</strong></th>
        <th><strong>Status</strong></th>
        <th><strong>Ordered on </strong></th>
        <th><strong>Created at</strong></th>
        <th><strong>Updated at</strong></th>
        <th><strong>Deleted at</strong></th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>
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

