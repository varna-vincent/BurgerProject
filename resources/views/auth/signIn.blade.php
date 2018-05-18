@extends('layouts.master')

@section('content')
<div class="container d-flex p-2">
    <div class="d-flex w-75 p-4 flex-column">
    	<div class="text-left">
    		<h2 class="py-3">Sign Up</h2>
			<div id="errdiv"> </div>
        	<form id="signupForm" method="POST" onsubmit="return validateFormSignUp()" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name"><b>Name</b></label>
                    <input id="uname_sign_up" type="text" placeholder="Enter name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" pattern="^[a-zA-Z\s]*$" name="name" value="{{ old('name') }}"  required autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="email"><b>E-Mail Address</b></label>
                    <input id="email_sign_up" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password"><b>Password</b></label>
                    <input id="password_sign_up" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  placeholder="Enter password" name="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}" required>
                    <small id="passwordHelp" class="form-text text-muted">Password must contain atleast 8 characters, 1 upper, 1 lower, 1 number and 1 special character</small>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password-confirm"><b>Confirm Password</b></label>
                    <input id="confirm_password_sign_up" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}" class="form-control" placeholder="Confirm password" name="password_confirmation" required>
                </div>
                <div class="form-group">
					<label for="phnum_sign_up"><b>Phone number:</b></label>
					<input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" type="tel" name="phone" placeholder="eg. 4081234567" id="phnum_sign_up">
					<small id="phoneHelp" class="form-text text-muted">Phone number should only contain numbers</small>

					@if ($errors->has('phone'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
				</div>
				<div class="form-group" >
					<input type="submit" class="btn btn-outline-primary"/>
				</div>
            </form>
        </div>
    </div>
    <span class="border border-light"></span>
    <div class="d-flex w-75 flex-column p-4">
		<div class="text-left">
			<h2 class="py-3">Sign In</h2>
			<div id="errlogindiv"> </div>
			<form onsubmit="return validateFormLogin()" >
				<div class="form-group">
					<label for="email"><b>Email: </b></label>
					<input type="email" class="form-control" id="email" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="">
				</div>
				<div class="form-group">
					<label for="pwd"><b>Password:</b></label>
					<input type="password" class="form-control" id="pwd" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}" placeholder="Enter password" required="">
					<p><a href="/forgotpwd" class="text-primary">Forgot Password?</a></p>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" class="form-check"> Remember me</label>
				</div>
				<div>
				<input type="submit" value="Login" class="btn btn-outline-primary"/>
                </div>
			</form>
		</div>
	</div>
</div>
<script src="{{ asset('js/validateForm.js') }}"></script>
@endsection