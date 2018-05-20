function validateFormAddProduct(){
	event.preventDefault();
	var product_name = document.getElementById('name').value;
	var product_type = document.getElementById('type').value;
	var product_price = document.getElementById('price').value;
	var product_description = document.getElementById('description').value;
	var product_image = document.getElementById('image').value;

	var name_pattern = /^[a-zA-Z\s]*$/;
	var price_pattern = ^[1-9]\d*(\.\d+)?$;
	var description_pattern =/^[a-z0-9]+$/i;

	if( product_name == "" || product_type == "" || product_description == "" || product_image == "" || product_price == ""){
		echo 'Please fill in all the details';
	}
	else if(!product_name.match(name_pattern)){
		//$('#errdiv').addClass('alert alert-danger');
		//document.getElementById('errdiv').innerHTML = 'Enter valid Name';
		echo 'Enter a valid name';
	}else if(!product_type.match(name_pattern)){
		//$('#errdiv').addClass('alert alert-danger');
		//document.getElementById('errdiv').innerHTML = 'Enter valid phone number';
		echo 'Enter a valid type';
	}else if(!product_price.match(price_pattern)){
		//$('#errdiv').addClass('alert alert-danger');
		//document.getElementById('errdiv').innerHTML = 'Enter valid email address';
		echo 'Enter a valid price';
	}else if(!product_description.match(password_sign_up_pattern)){
		//$('#errdiv').addClass('alert alert-danger');
		//document.getElementById('errdiv').innerHTML = 'Password should contain uppercase, lowerscase,number and special characters and should be 8 characters long';
		echo 'Enter a valid description';
	} else {
		//$('#errdiv').removeClass('alert alert-danger');
		//document.getElementById('errdiv').innerHTML = "";
		document.getElementById("addProductForm").submit();
	}

}