@extends('layouts.master')

@section('content')
  <div class="d-flex w-75 p-4 flex-column">
    	<div class="text-left">
    		<h2 class="py-3">Payment Details</h2>
			<div id="errdiv"> </div>
        	<form id="signupForm" method="POST" onsubmit="return checkoutValidation()">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="card_holder_name"><b>Card Holder name</b></label>
                    <input id="card_holder_name" class="form-control" type="text" placeholder="Enter card holder name" pattern="^[a-zA-Z\s]*$" name="name"  required autofocus>
                </div>

                <div class="form-group">
                    <label for="credit_card_number"><b>Credit Card number</b></label>
                    <input id="credit_card_number" class="form-control" type="text" pattern="[0-9]{16}" placeholder="Enter credit card number" required>
                </div>

                <div class="form-group">
                    <label for="cvv"><b>CVV</b></label>
                    <input id="cvv" type="password" class="form-control" placeholder="Enter CVV" pattern="[0-9]{3}" required>
                </div>
                <div class="form-group">
                    <label for="expiry_date"><b>Expiry date</b></label>
                    <input id="expiry_date" type="date" pattern="^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$"  class="form-control" placeholder="Enter Expiry date"  required>
                </div>
				<div class="form-group" >
					<input type="submit" class="btn btn-outline-primary"/>
				</div>
            </form>
        </div>
    </div>
<script src="{{ asset('js/payment.js') }}"></script>
@endsection