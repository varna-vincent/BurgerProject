
  @extends('layouts.master')

@section('content')
<script src="{{ asset('js/validateForm.js') }}"></script>
<div class="container">
    <form onsubmit="return validateFrgtPwd()" >
      <div class="form-group  p-5 px-md-5">
        <div id="err_frgtPwd"> </div>
        <label  for="userEmail_FrgtPwd"><b>Enter your email address : </b></label>
          <input type="text" class="form-control" id="userEmail_FrgtPwd" placeholder="Enter your email address"/>
          <div class="py-3">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
          </div>
          </form>
        </div>
@endsection
  
