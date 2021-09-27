<div class="col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card text-center">
      <div class="card-body">
        @if (Auth::user()->image != null)
        <img src="/chnlsgasplant/images/user/{{Auth::user()->image}}" alt="{{Auth::user()->name}}" class="img-thumbnail" style="width: 80%"> 
        @else
        <img src="{{asset('chnlsgasplant/images/user/avatar.png')}}" alt="{{Auth::user()->name}}" class="img-thumbnail"> 
        @endif
        <h4 class="mt-5">{{Auth::user()->name}}</h4>
        <p class="text-muted">Customer</p>
        <p class="mt-4 card-text">
           {{Auth::user()->address}}
        </p>
        <a href="{{route('profilePage')}}" class="btn btn-warning btn-sm mt-3 mb-4">Verify Account</a>
        <div class="border-top pt-3">
          <div class="row">
            <div class="col-4">
              <h6>city</h6>
              <p>{{Auth::user()->city}}</p>
            </div>
            <div class="col-4">
              <h6>country</h6>
              <p>{{Auth::user()->country}}</p>
            </div>
            <div class="col-4">
              <h6>phone</h6>
              <p>{{Auth::user()->phone}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>