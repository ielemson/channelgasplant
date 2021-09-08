@extends('layouts.app',['title'=>'Channels Gas Plant | Register'])


<!--====== INCLUDE HEADER PART STARTS======-->
@section('header')
    @include('partials.headerPart')
@endsection
<!--====== INCLUDE HEADER PART ENDS======-->

<!--====== INCLUDE BANNER PART STARTS======-->
@section('slider')
    @include('partials.pageBanner',['bannerContent'=>'Register','bannerImg'=>'gas-banner.png'])
@endsection
<!--====== INCLUDE BANNER PART ENDS======-->



@section('content')

    <!--====== LOGIN FORM STARTS ======-->
    <!--====== LOGIN FORM ENDS ======-->
    <div id="login-part" class="pb-80">
    <div class="container">
        <div class="login-form text-center mt-5">
            <div class="logo mb-50">
                {{-- <a href="#"><img src="{{ asset('/chnlsgasplant/images/logo.png') }}" alt="Logo"></a> --}}
                <p class="d-inline-block font-weight-bold">
                    To register, simply enter your details below and click "Register".
                    If you are already registered simply click the "Login" button.
                </p>
            </div>
            <form  method="POST" action="{{route('register')}}">
                @csrf
                
                <div class="form-row">
                  <div class="form-group col-md-4 mt-3">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Full Name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group col-md-4 mt-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email" autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group col-md-4 mt-3">
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required placeholder="Phone Number" autocomplete="phone">

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6 mt-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                  </div>
                  <div class="form-group col-md-6 mt-3">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password" autocomplete="confirm-password">
                  </div>

                  <div class="btn-group mt-3">
                    <button type="submit" class="btn btn-success ">Register</button>
                    &nbsp;
                    <a href="{{route('login')}}"  class="btn btn-primary">Login</a>
                </div>
                </div>
               
                
               
               
              </form>
        </div>
    </div>
</div>
  

@endsection
