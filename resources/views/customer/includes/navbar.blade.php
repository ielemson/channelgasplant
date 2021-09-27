<nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
    <div class="container d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top">
        <a class="navbar-brand brand-logo" href="{{url('/')}}"><img src="{{asset('chnlsgasplant/images/logo.png')}}" alt="logo" width="100%"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{url('/')}}"><img src="{{asset('chnlsgasplant/images/logo.png')}}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <form class="search-field ml-auto" action="#">
          <div class="form-group mb-0">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="mdi mdi-magnify"></i></span>
              </div>
              <input type="text" class="form-control">
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-nav-right mr-0">
   
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              {{-- <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image"> --}}

              @if (Auth::user()->image != null)
              <img src="/chnlsgasplant/images/user/{{Auth::user()->image}}" alt="{{Auth::user()->name}}" class="rounded-circle img-xs">
              @else
              <img src="{{asset('chnlsgasplant/images/user/avatar.png')}}" alt="{{Auth::user()->name}}" class="rounded-circle img-xs"> 
              @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom w-100">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center flex-grow-1"><i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i></div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right flex-grow-1"><i class="mdi mdi-account-outline mr-0 text-gray"></i></div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center flex-grow-1"><i class="mdi mdi-alarm-check mr-0 text-gray"></i></div>
                </div>
              </a>
              <a class="dropdown-item mt-2" href="{{route('profilePage')}}">
                Manage Accounts
              </a>
              <a class="dropdown-item" href="{{route('setting')}}">
                Change Password
              </a>
          
              <a class="dropdown-item" href="#" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                Sign Out
              </a>

                {{-- LOGOUT FORM --}}
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              </form>
             {{-- LOGOUT FORM --}}

            </div>
          </li>
        </ul>
        <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </div>
    <div class="nav-bottom">
      <div class="container">
        <ul class="nav page-navigation">

          <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link"><i class="link-icon mdi mdi-apple-safari"></i><span class="menu-title">Home</span></a>
          </li>

          <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
            <a href="{{url('/home')}}" class="nav-link"><i class="link-icon mdi mdi-television"></i><span class="menu-title">DASHBOARD</span></a>
          </li>
  
          <li class="nav-item {{ request()->is('home/create-ticket') ? 'active' : '' }}">
            <a href="{{route('createTicket')}}" class="nav-link"><i class="link-icon mdi mdi-atom"></i><span class="menu-title">Ticket</span><i class="menu-arrow"></i></a>
           
          </li>
          <li class="nav-item">
            <a href="{{route('products')}}" class="nav-link"><i class="link-icon mdi mdi-flag-outline"></i><span class="menu-title">Shop</span><i class="menu-arrow"></i></a>
          
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="link-icon mdi mdi-android-studio"></i><span class="menu-title">Testimonial</span><i class="menu-arrow"></i></a>
           
          </li>
          <li class="nav-item {{ request()->is('home/orders') ? 'active' : '' }}">
            <a href="{{route('customerOrders')}}" class="nav-link"><i class="link-icon mdi mdi-asterisk"></i><span class="menu-title">Orders</span><i class="menu-arrow"></i></a>
          
          </li>
        </ul>
      </div>
    </div>
  </nav>
