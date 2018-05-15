@extends('layouts.master')

@section('content')

<div class="container d-flex p-2">
    <div class="d-flex w-75 p-4 flex-column">
    	<div class="text-left">
    		<h2 class="py-3">Sign Up</h2>
			<div id="errdiv"> </div>
        	<form method="POST" onsubmit="return validateFormSignUp()" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name"><b>Name</b></label>
                    <input id="uname_sign_up" type="text" pattern="^[a-zA-Z ]{2,30}$" placeholder="Enter name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email"><b>E-Mail Address</b></label>
                    <input id="email_sign_up" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password"><b>Password</b></label>
                    <input id="password_sign_up" type="password" class="form-control"  placeholder="Enter password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password-confirm"><b>Confirm Password</b></label>
                    <input id="confirm_password_sign_up" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required>
                </div>
                <div class="form-group">
					<label for="phnum_sign_up"><b>Phone number:</b></label>
					<input class="form-control" type="tel" name="phone" pattern="^[0-9]{10}$" placeholder="Enter your phone number" id="phnum_sign_up">
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
					<input type="password" class="form-control" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter password" required="">
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
<script src="{{ asset('js/validateForm.js') }}"></script>
@endsection