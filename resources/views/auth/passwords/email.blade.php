@extends('layouts.app',['title'=>'Channels Gas Plant | Reset Password'])


<!--====== INCLUDE HEADER PART STARTS======-->
@section('header')
    @include('partials.headerPart')
@endsection
<!--====== INCLUDE HEADER PART ENDS======-->

<!--====== INCLUDE BANNER PART STARTS======-->
@section('slider')
@include('partials.pageBanner',['bannerContent'=>'Login','bannerImg'=>'gas-banner.png'])
@endsection
<!--====== INCLUDE BANNER PART ENDS======-->


@section('content')

    <!--====== LOGIN FORM STARTS ======-->
    <div id="login-part" class="pb-80">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                  

                    {{-- INCLUDE USER ALERT MESSAGE --}}
                    {{-- @include('partials._alerts') --}}
                    <div class="login-form text-center mt-5">
                        <div class="logo mb-3">
                            <p class=" d-inline-block font-weight-bold">
                               Enter your registered email address to reset your password.
                            </p>
                        </div>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group">
                    
                                <div class="input-group mb-3">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Email">
            
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  </div>
            
                                </div>
                            <div class="btn-group">
                                <button type="submit" class="btn btn-success ">Request Password Reset</button>
                                &nbsp;
                                <a href="{{route('login')}}"  class="btn btn-primary">Login</a>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== LOGIN FORM ENDS ======-->


@endsection
