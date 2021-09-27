@extends('layouts.customerLayout',['title'=>'Channels Gas Plant | Profile'])


@section('content')

<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="container">
          <div class="row">
    
             @include('customer.includes.profileCard')
           
            <div class="col-md-8 grid-margin ">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Profile</h4>
                  <p class="card-description">
                    {{-- Basic form layout --}}
                  </p>
                  <form method="POST" action="{{ route('updateprofile', Auth::user()->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ Auth::user()->name }}" required autocomplete="name" autofocus
                                    placeholder="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ Auth::user()->email }}" required autocomplete="email"
                                    autofocus placeholder="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input id="phone" type="text"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ Auth::user()->phone }}" placeholder="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{-- <textarea class="form-control" name="address" placeholder="Curent home address"> {{Auth::user()->address}}</textarea> --}}
                                <textarea type="email" class="form-control @error('address') is-invalid @enderror"
                                    name="address" placeholder="address">{{ Auth::user()->address ?? '' }}</textarea>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">State</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control @error('state') is-invalid @enderror"
                                    name="state"  placeholder="state"
                                    value="{{ Auth::user()->state ?? '' }}">

                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">City</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control @error('city') is-invalid @enderror"
                                    name="city" value="{{ Auth::user()->city ?? '' }}"  placeholder="city">

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Country</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" placeholder="Country" name="country" value="{{ Auth::user()->country ?? '' }}" class="form-control" />
                            </div>
                        </div>

                        <hr/>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Profile Picture</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image" value="{{ Auth::user()->city ?? '' }}" >

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr>

                        <button class="btn btn-primary btn-md">Update</button>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('customer.includes.footer')
            <!-- partial -->
    </div>
</div>


@endsection
