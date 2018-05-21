

function validateFormAddProduct(){
	event.preventDefault();
	var product_name = document.getElementById('name').value;
	var product_type = document.getElementById('type').value;
	var product_price = document.getElementById('price').value;
	var product_description = document.getElementById('description').value;
	var product_image = document.getElementById('image').value;

	if( product_name == "" || product_type == "" || product_description == "" || product_image == "" || product_price == ""){
		//echo 'Please fill in all the details';
	}
	else if(!product_name.match('/^[a-zA-Z\s]*$/')){
		//$('#errdiv').addClass('alert alert-danger');
		//document.getElementById('errdiv').innerHTML = 'Enter valid Name';
		//echo 'Enter a valid name';
	}else if(!product_type.match('/^[a-zA-Z\s]*$/')){
		//$('#errdiv').addClass('alert alert-danger');
		//document.getElementById('errdiv').innerHTML = 'Enter valid phone number';
		//echo 'Enter a valid type';
	}else if(!product_price.match('^[1-9]\d*(\.\d+)?$')){
		//$('#errdiv').addClass('alert alert-danger');
		//document.getElementById('errdiv').innerHTML = 'Enter valid email address';
		//echo 'Enter a valid price';
	}else if(!product_description.match('/^[a-z0-9]+$/i')){
		//$('#errdiv').addClass('alert alert-danger');
		//document.getElementById('errdiv').innerHTML = 'Password should contain uppercase, lowerscase,number and special characters and should be 8 characters long';
		//echo 'Enter a valid description';
	} else {
		//$('#errdiv').removeClass('alert alert-danger');
		//document.getElementById('errdiv').innerHTML = "";
		document.getElementById("addProductForm").submit();
	}
}
window.addToCart = function(product) {

	console.log(product);
	axios.post('/orders', product)
	  .then(function (response) {
	    console.log(response);
	  })
	  .catch(function (error) {
	    console.log(error);
	  });

}