<div class="col-md-4 col-sm-12 grid-margin stretch-card">
  <div class="card text-center">
    <div class="card-body">
      @if (Auth::user()->image != null)
      <img src="/chnlsgasplant/images/user/{{Auth::user()->image}}" alt="{{Auth::user()->name}}" class="img-lg rounded-circle mb-2"> 
      @else
      <img src="{{asset('chnlsgasplant/images/user/avatar.png')}}" alt="{{Auth::user()->name}}" class="img-lg rounded-circle mb-2"> 
      @endif
      <h4 >{{Auth::user()->name}}</h4>
      <p class="text-muted">Customer</p>
      <p class="mt-4 card-text">
         {{Auth::user()->address ?? 'N/A'}}
      </p>
      <a href="{{route('profilePage')}}" class="btn btn-warning btn-sm mt-3 mb-4">Verify Account</a>
      <div class="border-top pt-3">
        <div class="row">
          <div class="col-4">
            <h6>city</h6>
            <p>{{Auth::user()->city ?? 'N/A'}}</p>
          </div>
          <div class="col-4">
            <h6>country</h6>
            <p>{{Auth::user()->country ?? 'N/A'}}</p>
          </div>
          <div class="col-4">
            <h6>phone</h6>
            <p>{{Auth::user()->phone ?? 'N/A'}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>