@extends('layouts.customerLayout',['title'=>'Channels Gas Plant | Login'])


@section('content')
<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
      <div class="row flex-grow">
        <div class="col-lg-6 d-flex align-items-center justify-content-center">
          <div class="auth-form-transparent text-left p-3">
            <div class="brand-logo">
              <img src="{{ asset('chnlsgasplant/images/logo.png') }}" alt="logo">
            </div>
            {{-- <h4>Welcome back!</h4> --}}
            {{-- <h6 class="font-weight-light">Happy to see you again!</h6> --}}
            <form class="pt-3" method="POST" action="{{ route('register') }}">
                @csrf
              <div class="form-group">
                <label >Full Name</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="mdi mdi-account-outline text-primary"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control @error('name') is-invalid @enderror form-control-lg border-left-0"  placeholder="Full Name" value="{{ old('name') }}" name="name" required>
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>
               
              </div>
              
              <div class="form-group">
                <label >Email</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="mdi mdi-account-outline text-primary"></i>
                    </span>
                  </div>
                  <input type="email" class="form-control @error('email') is-invalid @enderror form-control-lg border-left-0"  placeholder="Email" value="{{ old('email') }}" name="email" required>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>
               
              </div>

              <div class="form-group">
                <label >Phone</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="mdi mdi-account-outline text-primary"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control @error('phone') is-invalid @enderror form-control-lg border-left-0"  placeholder="Phone Number" value="{{ old('phone') }}" name="phone" required>
                  @error('phone')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>
               
              </div>
              <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="mdi mdi-lock-outline text-primary"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control @error('password') is-invalid @enderror  form-control-lg border-left-0" placeholder="Password" name="password" required>     
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror                   
                </div>

              </div>
              <div class="form-group">
                <label for="exampleInputPassword">Confirm Password</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="mdi mdi-lock-outline text-primary"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror  form-control-lg border-left-0" placeholder="Confirm Password" name="password_confirmation" required>     
                  @error('password_confirmation')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror                   
                </div>

              </div>


             
              <div class="my-3">
                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Register</button>
              </div>
              <div class="mb-2 d-flex">
                <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1" id="home">
                  <i class="mdi mdi-home mr-2"></i>
                  Go Back
                </button>
                <button type="button" class="btn btn-twitter auth-form-btn flex-grow ml-1" id="login">
                  <i class="mdi mdi-key mr-2"></i>Login
                </button>
              </div>
              {{-- <div class="text-center mt-4 font-weight-light">
                Don't have an account? <a href="{{route('register')}}" class="text-primary">Create</a>
              </div> --}}
            </form>
          </div>
        </div>
        <div class="col-lg-6 login-half-bg d-flex flex-row">
          <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; {{Date('Y')}} All rights reserved.</p>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>

  @section('scripts')

  <script>
    $("#home").click(function(){
   location.href="/"
});
    $("#login").click(function(){
   location.href="/login"
});
  </script>
  @endsection
@endsection