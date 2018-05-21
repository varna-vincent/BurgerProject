window.checkoutValidation = function(index) {
	var card_holder_name = document.getElementById(card_holder_name).value;
	card_holder_name = card_holder_name.trim();
	var credit_card_number = document.getElementById(credit_card_number).innerHTML;
	credit_card_number = credit_card_number.trim();
	var cvv = document.getElementById(cvv).value;
	cvv.trim();
	var expiry_date = document.getElementById(expiry_date).value;
	expiry_date.trim();

	var card_holder_name_pattern = /^[a-zA-Z\s]*$/;
	var credit_card_number_pattern = /[0-9]{16}/;
	var cvv_pattern = /[0-9]{3}/;
	var expiry_date_pattern = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/;

	if(card_holder_name ==""  || credit_card_number==""  || cvv=="" || expiry_date=="" ){
		$('#errdiv').addClass('alert alert-danger');
		document.getElementById('errdiv').innerHTML = 'Fill in all details!!';

	}else if(!card_holder_name.match(card_holder_name_pattern)){

		$('#errdiv').addClass('alert alert-danger');
		document.getElementById('errdiv').innerHTML = 'Enter correct name!!';
	}else if(!credit_card_number.match(credit_card_number_pattern)){
		$('#errdiv').addClass('alert alert-danger');
		document.getElementById('errdiv').innerHTML = 'Enter correct number!!';
	}else if(!cvv.match(cvv_pattern)){
		$('#errdiv').addClass('alert alert-danger');
		document.getElementById('errdiv').innerHTML = 'Enter correct CVV!!';
	}else if(!expiry_date.match(expiry_date_pattern)){
		$('#errdiv').addClass('alert alert-danger');
		document.getElementById('errdiv').innerHTML = 'Enter correct date!!';
	}

}