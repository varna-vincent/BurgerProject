@extends('layouts.master')

@section('content')


<div class="container d-flex p-3 justify-content-center">
	<div class="d-flex w-75 pt-4 flex-column">
		<div class="text-center">
			<h1 class="pb-2">Add Product</h1> 
			<div class="d-flex mt-3 flex-column align-items-center">

				<form id="addProductForm" method="POST" action="/products" onsubmit="return validateFormAddProduct()" >
					   {{ csrf_field() }}
					<div id="err_div_product"></div>
					<div class="form-group">
						<label for="exampleInputEmail1">Name</label>
						<input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Product Name" pattern="^[a-zA-Z\s]*$" required="true">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Type</label>
						<input type="text" class="form-control" id="type" aria-describedby="emailHelp" placeholder="Enter Product Type" pattern="^[a-zA-Z\s]*$" required="true">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Price</label>
						<input type="text" class="form-control" id="price" aria-describedby="emailHelp" placeholder="Enter Product Price" pattern="^[1-9]\d*(\.\d+)?$" required="true">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Description</label>
						<input type="text" class="form-control" id="description" aria-describedby="emailHelp" placeholder="Enter Product Description"  required="true" pattern="^[a-zA-Z0-9\s]*$"/>
					</div>
					<div class="form-group">
						<label for="exampleFormControlFile1">Choose an image for the product</label>
						<input type="file" class="form-control-file" id="image" required="true">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form></div>
			</div>
		</div>
	</div>

<script src="{{ asset('js/productValidation.js') }}"></script>
	@endsection