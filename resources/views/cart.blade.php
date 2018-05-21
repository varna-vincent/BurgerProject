@extends('layouts.master')

@section('content')
<div class="container d-flex p-3 justify-content-center">
  <div class="d-flex w-100 pt-3 flex-column">
      <div class="text-center">
      <h1 class="pb-2">Shopping Cart</h1> 
      @empty($orderproducts)
      <p class="text-muted">No items in cart</p>
      @endempty
      @isset($orderproducts)
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
          @foreach($orderproducts as $index => $order)
          <tr>
            <td scope="row">
              <figure class="figure">
                <img src="../images/chickenburger.jpg" class="w-50 h-50 figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                <figcaption class="figure-caption">{{ $order->name }}</figcaption>
              </figure>
            </td>
            <th scope="row">{{ $order->name }}</th>
            <td><input type="number" value="{{ $order->quantity }}" min="1" id="quantity_{{$index}}" 
                oninput="computeTotal({{$index}})" /></td>
                <div id="errdiv_quantity"></div>
            <td><label id="price_{{$index}}"> ${{ $order->price}}</label></td>
            <td id="each_product_total_price_{{$index}}">${{ $order->price * $order->quantity}}</td>
            <td><a href="" onclick="deleteProduct({{$order->id}})"><i class="fa fa-trash-o"></i></a></td>
          </tr>
          @endforeach
        </tbody>
        <tfoot class="bg-light">
          <tr>
             <th colspan="4" class="text-right">Total : </th>
             <th colspan="2" id="total_price" class="text-left">${{$total}}</th>
          </tr>
        </tfoot>
      </table>
      </form>
      <div class="d-flex">
        <a href="/products" class="btn btn-outline-primary mr-auto align-self-start m-1"><i class="fa fa-chevron-left"></i> Continue shopping</a>
        <button class="btn btn-outline-primary m-1" onclick="updateBasket({{$orderproducts}})"><i class="fa fa-refresh"></i> Update basket</button>
        <a href="" class="btn btn-outline-primary m-1">Proceed to checkout <i class="fa fa-chevron-right"></i></a>
      </div>
      @endisset
    </div>
  </div>
</div>
<script src="{{ asset('js/cartValidations.js') }}"></script>
@endsection
