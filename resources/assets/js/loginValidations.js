
window.validateFormSignUp =  function(){
	event.preventDefault();
	var uname_sign_up = document.getElementById('uname_sign_up').value;
	uname_sign_up = uname_sign_up.trim();
	var email_sign_up = document.getElementById('email_sign_up').value;
	email_sign_up = email_sign_up.trim();
	var password_sign_up = document.getElementById('password_sign_up').value;
	password_sign_up = password_sign_up.trim();
	var confirm_password_sign_up = document.getElementById('confirm_password_sign_up').value;
	confirm_password_sign_up = confirm_password_sign_up.trim();
	var phnum_sign_up = document.getElementById('phnum_sign_up').value;
	phnum_sign_up = phnum_sign_up.trim();

	var uname_sign_up_pattern = /^[a-zA-Z\s]*$/;
	var email_sign_up_pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	var password_sign_up_pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/;
	var phnum_sign_up_pattern = /^[0-9]{10}$/;

	
	if( uname_sign_up == "" || email_sign_up == "" || password_sign_up == "" || confirm_password_sign_up == "" || phnum_sign_up == ""){
		$('#errdiv').addClass('alert alert-danger');
		document.getElementById('errdiv').innerHTML = 'Fill in all details!!';
	}
	else if(!uname_sign_up.match(uname_sign_up_pattern)){
		$('#errdiv').addClass('alert alert-danger');
		document.getElementById('errdiv').innerHTML = 'Enter valid Name';
	}else if(!phnum_sign_up.match(phnum_sign_up_pattern)){
		$('#errdiv').addClass('alert alert-danger');
		document.getElementById('errdiv').innerHTML = 'Enter valid phone number';
	}else if(!email_sign_up.match(email_sign_up_pattern)){
		$('#errdiv').addClass('alert alert-danger');
		document.getElementById('errdiv').innerHTML = 'Enter valid email address';
	}else if(!password_sign_up.match(password_sign_up_pattern)){
		$('#errdiv').addClass('alert alert-danger');
		document.getElementById('errdiv').innerHTML = 'Password should contain uppercase, lowerscase,number and special characters and should be 8 characters long';
	}else if(password_sign_up != confirm_password_sign_up){
		$('#errdiv').addClass('alert alert-danger');
		document.getElementById('errdiv').innerHTML = 'Password and Confirm Password not matching';
	} else {
		$('#errdiv').removeClass('alert alert-danger');
		document.getElementById('errdiv').innerHTML = "";
		document.getElementById("signupForm").submit();
	} 
}
window.validateFormLogin = function() {
	event.preventDefault();
	var email_login = document.getElementById('email').value;
	email_login = email_login.trim();
	var password_login = document.getElementById('pwd').value;
	password_login = password_login.trim();

	var email_login_pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	var password_login_pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/;

    if(email_login==""){
    	$('#errlogindiv').addClass('alert alert-danger');
         document.getElementById('errlogindiv').innerHTML = 'Enter email';
    }else if(password_login==""){
    	$('#errlogindiv').addClass('alert alert-danger');
         document.getElementById('errlogindiv').innerHTML = 'Enter password';
    }else if(!email_login.match(email_login_pattern)){
    	$('#errlogindiv').addClass('alert alert-danger');
         document.getElementById('errlogindiv').innerHTML = 'Invalid email';
    }else if(!password_login.match(password_login_pattern)){
    	$('#errlogindiv').addClass('alert alert-danger');
         document.getElementById('errlogindiv').innerHTML = 'Password not correct';
    }else{
    	 $('#errlogindiv').removeClass('alert alert-danger');
         document.getElementById('errlogindiv').innerHTML = "";
		 document.getElementById("signinForm").submit();
    }

}
window.validateFrgtPwd = function(){
	event.preventDefault();
	var email_frgtPwd = document.getElementById('userEmail_FrgtPwd').value;
	email_frgtPwd = email_frgtPwd.trim();
	var email_frgtPwd_pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

	if(email_frgtPwd == ""){
		$('#err_frgtPwd').addClass('alert alert-danger');
		document.getElementById('err_frgtPwd').innerHTML = 'Enter email address';
	}else if(!email_frgtPwd.match(email_frgtPwd_pattern)){
		$('#err_frgtPwd').addClass('alert alert-danger');
		document.getElementById('err_frgtPwd').innerHTML = 'Enter valid email address';
	}else{
		$('#err_frgtPwd').removeClass('alert alert-danger');
		document.getElementById('err_frgtPwd').innerHTML = "";
	}
}
window.validateResetPwd =  function(){

	event.preventDefault();
	var old_pwd =  document.getElementById('oldPwd').value;
	old_pwd = old_pwd.trim();
	var new_pwd =  document.getElementById('newPwd').value;
	new_pwd = new_pwd.trim()
	var password_pattern = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;

	if(old_pwd == new_pwd){
		$('#errDiv_reset').addClass('alert alert-danger');
		document.getElementById('errDiv_reset').innerHTML = 'New Password should not be same as old password';
	}else if(!old_pwd.match(password_pattern)){
		$('#errDiv_reset').addClass('alert alert-danger');
		document.getElementById('errDiv_reset').innerHTML =  'Password should contain uppercase, lowerscase,number and special characters and should be 8 characters long' ;
	}else if(!new_pwd.match(password_pattern)){
		$('#errDiv_reset').addClass('alert alert-danger');
		document.getElementById('errDiv_reset').innerHTML =  'Password should contain uppercase, lowerscase,number and special characters and should be 8 characters long' ;
	}else{
		$('#errDiv_reset').removeClass('alert alert-danger');
		document.getElementById('errDiv_reset').innerHTML = "";
	}
}

