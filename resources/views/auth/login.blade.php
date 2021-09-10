@extends('layouts.app',['title'=>'Channels Gas Plant | Login'])


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
            {{-- INCLUDE USER ALERT MESSAGE --}}

            <div class="login-form text-center mt-5">
            
                <div class="logo mb-50">
                    {{-- <a href="#"><img src="{{ asset('/chnlsgasplant/images/logo.png') }}" alt="Logo"></a> --}}
                    <p class="d-inline-block font-weight-bold">
                        To login, simply enter your details below and click "Login".
                        If you are not registered simply click the "Register" button.
                    </p>
                    
                </div>

            

                <form method="POST" action="{{ route('login') }}">
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
                    <div class="form-group">
                        <div class="input-group mb-3">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="btn-group">
                        <button type="submit" class="btn btn-success ">Login</button>
                        &nbsp;
                        <a href="{{route('register')}}"  class="btn btn-primary">Register</a>
                    </div>
                    <div class="singel-form pt-25">
                        <ul class="remember">
                            <li>
                                <input type="checkbox" name="checkbox" id="checkbox"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label for="checkbox"><span></span>Remember Me</label>
                            </li>
                            <li>
                                <p>Forgot <a href="{{ route('password.request') }}">password?</a></p>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<!--====== LOGIN FORM ENDS ======-->

@endsection
