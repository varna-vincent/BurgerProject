@extends('layouts.master')

@section('content')
<div class="container d-flex p-3 justify-content-center">
  <div class="d-flex w-100 pt-4 flex-column">
    <div class="text-center">
      <h1 class="pb-2">Our Selection</h1> 
    </div>
    <div class="container">
      <div class="row">
        @foreach($products as $product)
        <div class="col-sm-6 my-3">
            <div class="card">
                <img src="images/items/bacon-cheeseburger.jpg" class="w-100 h-100 figure-img img-fluid rounded" alt="{{ $product->name }}">
                <div class="card-block">
                    <h4 class="card-title pl-2 pr-2">{{ $product->name }} 
                    @if($product->type == 'Veg')
                    <button class="align-self-end btn btn-outline-success btn-sm ml-1"><i class="fa fa-leaf"></i></button>
                    @endif</h4>
                    <p class="card-text pl-2 pr-2">{{ $product->description }}</p>
                    <h6 class="card-subtitle mb-2 text-muted"><blockquote class="blockquote price">${{ $product->price }}</blockquote>
                      <button class="btn btn-outline-primary btn-sm mb-1" onclick="addToCart({{$product}})"><i class="fa fa-cart-plus"></i> Add to Cart</button>
                    </h6>
                </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('js/productValidations.js') }}"></script>
@endsection