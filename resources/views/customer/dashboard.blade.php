@extends('layouts.customerLayout',['title'=>'Channels Gas Plant | Dashboard'])


@section('content')

<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="container">

         @include('customer.includes.notificationCard')

          <div class="row">
           @include('customer.includes.card')
           
           @include('customer.includes.calendar')
          
           {{-- @include('customer.includes.manageTicket') --}}
           
           {{-- @include('customer.includes.orders') --}}
          </div>
          <div class="row">
           {{-- @include('customer.includes.card') --}}

           {{-- @include('customer.includes.calendar') --}}
          
           @include('customer.includes.manageTicket')
           
           @include('customer.includes.orders')
          </div>
         
        </div>
      </div> 
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      @include('customer.includes.footer')
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>

@endsection


@section('scripts')
<script>
	$(document).ready(function(e){
		calendar = new CalendarYvv("#calendar", moment().format("Y-M-D"), "Monday");
		calendar.funcPer = function(ev){
			console.log(ev)
		};
		calendar.diasResal = [4,15,26]
		calendar.createCalendar();
	});
</script>
@endsection