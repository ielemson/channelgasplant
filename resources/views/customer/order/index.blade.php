@extends('layouts.customerLayout',['title'=>'Channels Gas Plant | Order'])




@section('content')


    <!--====== DASHBOARD ENDS HERE ======-->
  
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="container">
              <div class="row">
        
    
                <div class="col-md-12 grid-margin ">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">orders</h4>
                  
             {{-- INCLUDE ORDER TABLE --}}
            @include('customer.includes.orderTable')
            {{-- INCLUDE ORDER TABLE --}}
                      
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


