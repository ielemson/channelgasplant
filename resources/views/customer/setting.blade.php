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
                <h4 class="card-title">Update Password</h4>
                <p class="card-description">
                  {{-- Basic form layout --}}
                </p>
              
                <form method="POST" action="{{ route('postsetting', Auth::user()->id) }}">
                  @csrf
                  @method('PATCH')
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Current Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <input type="password" placeholder="Enter current password" name="curpass" required  class="form-control  @error('curpass') is-invalid @enderror"/>
                 
                 @error('curpass')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
                    </div>
                  </div>

                  <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">New Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input  type="password" placeholder="Enter new password" name="password" required  class="form-control @error('password') is-invalid @enderror"/>
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                  </div>
                <hr>

                
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Confirm Password</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input  type="password" placeholder="Confirm password" name="password_confirmation" required  class="form-control"/>
                  </div>
                </div>
                <hr> 

                <button class="btn btn-warning btn-md" type="submit">Change Password</button>

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
