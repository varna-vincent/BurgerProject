@extends('layouts.master')

@section('content')


<div class="container d-flex p-3 justify-content-center">
	<div class="d-flex w-75 pt-4 flex-column">
		<div class="text-center">
			<h1 class="pb-2">Add Product</h1> 
			<div class="d-flex mt-3 flex-column align-items-center">

				<form id="addProductForm" method="POST" action="/products" enctype=”multipart/form-data” onsubmit="return validateFormAddProduct()">
					    {{ csrf_field() }}
					<div class="form-group">
						<label for="exampleInputEmail1">Name</label>
						<input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Product Name" pattern="^[a-zA-Z\s]*$" required="true">

						 @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    	@endif

					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Type</label>
						<input type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" id="type" aria-describedby="emailHelp" placeholder="Enter Product Type" pattern="^[a-zA-Z\s]*$" name="type" required="true">
						 @if ($errors->has('type'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('type') }}</strong>
                        </span>
                   		 @endif
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Price</label>
						<input type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" id="price" aria-describedby="emailHelp" placeholder="Enter Product Price" pattern="^[1-9]\d*(\.\d+)?$" name="price" required="true">
						 @if ($errors->has('price'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    	@endif
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Description</label>
						<input type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" aria-describedby="emailHelp" placeholder="Enter Product Description" name="description" required="true">
						 @if ($errors->has('description'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    	@endif
					</div>
					<div class="form-group">
						<label for="exampleFormControlFile1">Choose an image for the product</label>
						<input type="file" class="form-control form-control-file" accept="image/*" id="image" name="image" required="true">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form></div>
			</div>
		</div>
	</div>

<script src="{{ asset('js/productValidation.js') }}"></script>
	@endsection