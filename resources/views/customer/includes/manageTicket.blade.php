<div class="col-md-12 col-sm-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-4">Manage Tickets</h5>
        <div class="fluid-container">
    
          @if ($tickets->isNotEmpty())
          @foreach ($tickets as $ticket)
          <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
            <div class="col-md-1">
              {{-- <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces/face3.jpg" alt="profile image"> --}}
              @if (Auth::user()->image != null)
              <img src="/chnlsgasplant/images/user/{{Auth::user()->image}}" alt="{{Auth::user()->name}}" class="img-sm rounded-circle mb-4 mb-md-0">
              @else
              <img src="{{asset('chnlsgasplant/images/user/avatar.png')}}" alt="{{Auth::user()->name}}" class="img-sm rounded-circle mb-4 mb-md-0"> 
              @endif
            </div>
            <div class="ticket-details col-md-9">
              <div class="d-flex">
                <p class="text-dark font-weight-bold mr-2 mb-0 no-wrap">{{$ticket->department}} :</p>
                <p class="font-weight-medium mr-1 mb-0">[{{ $ticket->ticket_ref }}]</p>
                <p class="font-weight-semibold mb-0 ellipsis">{{$ticket->subject}} 
              </p>
              </div>
              {{-- <p class="text-small text-gray mb-2">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Lorem ipsum dolor sit amet.</p> --}}
              <div class="row text-gray d-md-flex d-none">
                <div class="col-4 d-flex">
                  <p class="mb-0 mr-2 text-muted">Created :</p>
                  <p class="Last-responded mr-2 mb-0 text-muted"> {{ \Carbon\Carbon::parse($ticket->created_at)->toFormattedDateString() }}</p>
                </div>
                {{-- <div class="col-4 d-flex">
                  <p class="mb-0 mr-2 text-muted">Status:</p>
                  <p >
                    @if ($ticket->status)
                    <span class="badge badge-success text-small">{{ 'closed' }}</span>
                @else
                    <span class="badge badge-warning text-small">{{ 'pending' }}</span>
                @endif 
                  </p>
                </div> --}}
              </div>
            </div>
            <div class="ticket-actions col-md-2">
              <div class="btn-group dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Manage
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>View</a>
                  <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>
                     @if ($ticket->status)
                    <span class="badge badge-success text-small">{{ 'closed' }}</span>
                @else
                    <span class="badge badge-warning text-small">{{ 'pending' }}</span>
                @endif </a>
                  {{-- <div class="dropdown-divider"></div> --}}
                 
                  
                </div>
              </div>
            </div>
          </div>
          @endforeach

          <div class="d-flex">
            {!! $tickets->links() !!}
        </div>

          @else
          <div class="alert alert-info" role="alert">
              <h6> {{ 'You have no pending tickets' }} </h6>
          </div>
          
      @endif
        </div>
      </div>
    </div>
  </div>