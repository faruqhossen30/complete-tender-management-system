@extends('auth.master')

@section('content')
<div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1">REGISTER</a>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
          <div class="input-group mb-3">
            <input id="name" type="text" class="form-control" name="name" placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="mobile" type="number" class="form-control" placeholder="Mobile" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="address" type="text" class="form-control " name="address" value="{{ old('address') }}" placeholder="Address" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-home"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <select name="user_country" id="userCountryID" class="custom-select" value="{{ old('user_country') }}" required >
                <option value="" selected>Select Country</option>
                <option value="Afganistan">Afganistal</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Canada">Canada </option>
                <option value="Denmark">Denmark </option>
            </select>            
            
          </div>
          <div class="input-group mb-3">
            <select name="vendor" id="vendorID" class="custom-select" value="{{ old('vendor') }}" required>
                <option value="" selected>Select Customer Type </option>
                <option value="local vendor">Local Vendor </option>
                <option value="foreign vendor">Foreign Vendor </option>
                <option value="manufacturer">Manufacturer </option>
                <option value="supplier">Supplier </option>
            </select>           
            
          </div>
          <div class="input-group mb-3">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            
            
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
  
        <a href="{{route('login')}}" class="text-center">Sign in?</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->
@endsection