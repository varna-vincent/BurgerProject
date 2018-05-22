

window.validateFormAddProduct = function(){
	event.preventDefault();
	var product_name = document.getElementById('name').value;
	var product_type = document.getElementById('type').value;
	var product_price = document.getElementById('price').value;
	var product_description = document.getElementById('description').value;
	var product_image = document.getElementById('image').value;

    var product_name_pattern = /^[a-zA-Z\s]*$/;
    var product_type_pattern = /^[a-zA-Z\s]*$/;
    var product_price_pattern = /^[1-9]\d*(\.\d+)?$/;
	var product_description_pattern = /^[a-zA-Z,\s]*$/;

	if( product_name == "" || product_type == "" || product_description == "" || product_image == "" || product_price == ""){
		$('#error_div_add_product').addClass('alert alert-danger');
		document.getElementById('error_div_add_product').innerHTML = 'Enter all the fields';
	}else if(!product_name.match(product_name_pattern)){
		$('#error_div_add_product').addClass('alert alert-danger');
		document.getElementById('error_div_add_product').innerHTML = 'Product name should contain only alphabets';
	}else if(!product_type.match(product_type_pattern)){
		$('#error_div_add_product').addClass('alert alert-danger');
		document.getElementById('error_div_add_product').innerHTML = 'Product Type should contain only alphabets';
	}else if(!product_price.match( product_price_pattern)){
		$('#error_div_add_product').addClass('alert alert-danger');
		document.getElementById('error_div_add_product').innerHTML = 'Enter correct price';
	}else if(!product_description.match(product_description_pattern)){
		$('#error_div_add_product').addClass('alert alert-danger');
		document.getElementById('error_div_add_product').innerHTML = 'Description should contain only alphabets';
	} else {
		$('#error_div_add_product').removeClass('alert alert-danger');
		document.getElementById('error_div_add_product').innerHTML = " ";
		document.getElementById("addProductForm").submit();
	}
}

window.addToCart = function(product) {

	axios.post('/orders', product)
	  .then(function (response) {
	
	  })
	  .catch(function (error) {
	    console.log(error);
	  });

}