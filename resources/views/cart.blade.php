@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container d-flex flex-row p-2">
    <div class="col-md-9" id="basket">
       <div class="box">
          <div class="pull-left">
             <H1>Shopping cart</H1>
             <p class="text-muted">You currently have 0 item(s) in your cart.</p>
         </div>
         <div class="table-responsive">
             <form method="POST" @submit.prevent="onSubmit" @keydown="form.errors.clear()">
                <table class="table table-white border table-hover">
                   <thead class="bg-light">  
                      <tr>
                         <th scope="col">Product</th>
                         <th scope="col">Quantity</th>
                         <th scope="col">Unit Price</th>
                         <th scope="col">Total</th>
                         <th></th>
                     </tr>
                 </thead>
                 <tbody>

                  @foreach($orderproducts as $order)
                  <tr>
                     <td>
                        <a><img src="images/chickenburger.jpg" alt="chicken burger" height="100" width="100"></a><br>
                        <p class="text-dark"><b>{{ $order->name }}</b></p>
                    </td>
                    <td><input type=number value="{{ $order->quantity }}" min="1" max="10" />
                    </td>
                    <td>{{ $order->price }}</td>
                    <td>$10</td>
                    <td><a href=#><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="bg-light">
              <tr>
                 <th colspan="3" style="text-align:right;">Total :</th>
                 <th>$10</th>
                 <th></th>
             </tr>
         </tfoot>
     </table>

     <div class="box-footer">
       <div class="pull-left">
          <router-link to="/shop" class="btn btn-outline-primary"><i class="fa fa-chevron-left"></i> Continue shopping</router-link>
      </div>
      <div class="pull-right">
          <button class="btn btn-outline-primary" @click="updateCart()"><i class="fa fa-refresh"></i> Update basket</button>
          <router-link class="btn btn-outline-primary">Proceed to checkout <i class="fa fa-chevron-right"></i>
          </router-link>
      </div>
  </div>
</form>
</div>
</div>
</div>
<div class="col-md-3">
	<div  id="order-summary">
        <div class="box py-5">
          <div class="box-header"> 
             <h3>Order summary</h3>
         </div>
         <div class="box-body py-1">
          <div class="table-responsive">
             <table class="table table-white table-striped table-bordered">
                <tbody>
                   <tr>
                      <td>Order subtotal</td>
                      <th>10</th>
                  </tr>
                  <tr>
                      <td>Tax</td>
                      <th>$2.00</th>
                  </tr>
                  <tr class="total">
                      <td>Total</td>
                      <th>$12</th>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>
</div>
</div>
</div>

@endsection