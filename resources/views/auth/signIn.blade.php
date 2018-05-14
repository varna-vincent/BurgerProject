@extends('layouts.master')

@section('content')
<script src="{{ asset('js/validateForm.js') }}"></script>
<div class="container">
	<div class="row">
		<div class="col-8">
			<div>
				<h2 class="py-3">Sign Up</h2>
				<div id="errdiv"> </div>
				<form onsubmit="return validateFormSignUp()">
					<div class="form-group row">
						<label for="uname_sign_up" class="col-4 col-form-label" align="right"><b>Name:</b></label>
						<div class="col-8">
							<input class="form-control" type="text" placeholder="Enter your name" id="uname_sign_up">
						</div>
					</div>
					<div class="form-group row">
						<label for="email_sign_up" class="col-4 col-form-label" align="right"><b>Email:</b></label>
						<div class="col-8">
							<input class="form-control" type="email" placeholder="Enter email address" id="email_sign_up">
						</div>
					</div>
					<div class="form-group row">
						<label for="uname_sign_up" class="col-4 col-form-label" align="right"><b>Password:</b></label>
						<div class="col-8">
							<input class="form-control" type="password" placeholder="Enter password" id="password_sign_up">
						</div>
					</div>
					<div class="form-group row">
						<label for="confirm_password_sign_up" class="col-4 col-form-label" align="right"><b>Confirm Password:</b></label>
						<div class="col-8">
							<input class="form-control" type="password" placeholder="Confirm your password" id="confirm_password_sign_up">
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
		<div class="col-4 border-left">
			<div align="left">
				<h2 class="py-3">Sign In</h2>
				<div id="errlogindiv"> </div>
				<form onsubmit="return validateFormLogin()" >
					<div class="form-group">
						<label for="username"><b>Username: </b></label>
						<input type="username" class="form-control" id="username" placeholder="Enter username">
					</div>
					<div class="form-group">
						<label for="pwd"><b>Password:</b></label>
						<input type="password" class="form-control" id="pwd" placeholder="Enter password">
						<p><a href="/forgotpwd" class="text-primary">Forgot Password?</a></p>
					</div>
					<div class="checkbox">
						<label><input type="checkbox"> Remember me</label>
					</div>
					<div>
					<input type="submit" value="Login" class="btn btn-outline-primary"/>
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection