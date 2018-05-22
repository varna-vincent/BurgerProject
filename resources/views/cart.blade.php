@extends('layouts.master')

@section('content')
<script src="{{ asset('js/cartValidations.js') }}"></script>
<div class="container d-flex p-3 justify-content-center">
  <div class="d-flex w-100 pt-3 flex-column">
      <div class="text-center">
      <h1 class="pb-2">Shopping Cart</h1> 
      @empty($orderproducts)
      <p class="text-muted">No items in cart</p>
      @endempty
      @isset($orders)
      @foreach($orders as $order)
        @isset($order->orderproducts)
        <form method="POST">
        <table class="mt-3 table border">
          <thead class="thead-light">
            <tr>
              <th scope="col"></th>
              <th scope="col">Product</th>
              <th scope="col">Quantity</th>
              <th scope="col">Price</th>
              <th scope="col">Total</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($order->orderproducts as $index => $item)
            <tr id="row_{{$index}}">
              <td scope="row">
                <figure class="figure">
                  <img src="../images/chickenburger.jpg" class="w-50 h-50 figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                  <figcaption class="figure-caption">{{ $item->name }}</figcaption>
                </figure>
              </td>
              <th scope="row">{{ $item->name }}</th>
              <td><input type="number" value="{{ $item->quantity }}" min="1" max="20" id="quantity_{{$index}}" 
                  oninput="computeTotal({{$index}})" /></td>
                  <div id="errdiv_quantity"></div>
              <td><label id="price_{{$index}}" class="price-small"> ${{ $item->price}}</label></td>
              <td id="each_product_total_price_{{$index}}" class="price-small">${{ $item->price * $item->quantity}}</td>
              <td><button class="btn btn-outline-primary" onclick="deleteProduct({{$item->id}},{{$index}})"><i class="fa fa-trash-o"></i></button></td>
            </tr>
            @endforeach
          </tbody>
          <tfoot class="bg-light">
            <tr>
               <th colspan="4" class="text-right price-small">Total : </th>
               <th colspan="2" id="total_price" class="text-left price-small">${{$total}}</th>
            </tr>
          </tfoot>
        </table>
        </form>
        <div class="d-flex">
          <a href="/products" class="btn btn-outline-primary mr-auto align-self-start m-1"><i class="fa fa-chevron-left"></i> Continue shopping</a>
          <button class="btn btn-outline-primary m-1" onclick="updateBasket({{$order->orderproducts}},{{$order}})"><i class="fa fa-refresh"></i> Update basket</button>
          <button class="btn btn-outline-primary m-1" onclick="placeOrder({{$order->orderproducts}},{{$order}})">Place order <i class="fa fa-chevron-right"></i></button>
        </div>
        @endisset
      @endforeach
      @endisset
    </div>
  </div>
</div>
@endsection
