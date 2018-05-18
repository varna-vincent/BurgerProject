@extends('layouts.master')

@section('content')
<script src="{{ asset('js/loginValidations.js') }}"></script>
<div class="col-4">
			<div align="left">
				<h2 class="py-3">Reset Password</h2>
				
				<form onsubmit="return validateResetPwd()">
					<div id="errDiv_reset"></div>
					<div>
						<label for="oldPwd"><b>Old Password: </b></label>
						<input type="password" class="form-control" id="oldPwd" placeholder="Enter old Password" required="" 
						pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
					</div>
					<div class="form-group">
						<label for="newPwd"><b>New Password:</b></label>
						<input type="password" class="form-control" id="newPwd" placeholder="Enter new password" required="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
					</div>
					<div>
					<input type="submit" value="Reset Password" class="btn btn-outline-primary"/>
                    </div>
				</form>
			</div>
		</div>
	</div>
@endsection