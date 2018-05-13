@extends('layouts.master')

@section('content')
<div class="d-flex p-2 flex-row">
	<div class="container flex-column align-self-start">
		<div class="flex-wrap mr-auto p-3">
			<h2 class="py-3">Sign Up</h2>
			<div id="errdiv"> </div>
			<form onsubmit="return validateFormSignUp()">
				<div class="form-group row">
					<label for="uname_sign_up" class="col-4 col-form-label" align="right"><b>Name:</b></label>
					<div class="col-8">
						<input class="form-control" type="text" placeholder="Enter your name" id="uname_sign_up" required="" pattern="/\A[a-zA-Z\s]+\z/">
					</div>
				</div>
				<div class="form-group row">
					<label for="email_sign_up" class="col-4 col-form-label" align="right"><b>Email:</b></label>
					<div class="col-8">
						<input class="form-control" type="email" placeholder="Enter email address" id="email_sign_up" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
					</div>
				</div>
				<div class="form-group row">
					<label for="uname_sign_up" class="col-4 col-form-label" align="right"><b>Password:</b></label>
					<div class="col-8">
						<input class="form-control" type="password" placeholder="Enter password" id="password_sign_up" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
					</div>
				</div>
				<div class="form-group row">
					<label for="confirm_password_sign_up" class="col-4 col-form-label" align="right"><b>Confirm Password:</b></label>
					<div class="col-8">
						<input class="form-control" type="password" placeholder="Confirm your password" id="confirm_password_sign_up" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
					</div>
				</div>
				<div class="form-group row">
					<label for="phnum_sign_up" class="col-4 col-form-label" align="right"><b>Phone number:</b></label>
					<div class="col-8">
						<input class="form-control" type="tel" placeholder="Enter your phone number" id="phnum_sign_up">
					</div>
				</div>
				<div class="form-group" >
					<input type="submit" class="btn btn-outline-primary"/>
				</div>
			</form>
		</div>
	</div>
	<span class="flex-column border border-light"></span>
	<div class="container flex-column align-self-start">
		<div class="flex-wrap ml-auto p-3">
			<h2 class="py-3">Sign In</h2>
			<div id="errlogindiv"> </div>
			<form onsubmit="return validateFormLogin()">
				<div class="form-group row">
					<label for="email"><b>Email: </b></label>
					<input type="email" class="form-control" id="email" placeholder="Enter email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
				</div>
				<div class="form-group row">
					<label for="pwd"><b>Password:</b></label>
					<input type="password" class="form-control" id="pwd" placeholder="Enter password" required="">
					<p><a href="/forgotpwd" class="text-primary">Forgot Password?</a></p>
				</div>
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
			    	<label class="form-check-label" for="exampleCheck1">Remember me</label>
				</div>
				<div>
				<button type="submit" class="btn btn-outline-primary">Login</button>
                </div>
			</form>
		</div>
	</div>
</div>
@endsection