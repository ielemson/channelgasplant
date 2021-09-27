<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ $title ?? 'Channels Gas Plant | LPG Gas Refill and Delivery Services' }}</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/customer/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="/customer/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/customer/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/customer/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="/customer/vendors/feather/feather.css">
  <link rel="stylesheet" href="/customer/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/customer/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="/customer/vendors/jquery-toast-plugin/jquery.toast.min.css">
  {{-- <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> --}}

{{-- CALENDAR  --}}

{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/materia/bootstrap.min.css"> --}}
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="customer/calendar/css/calendar.css">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment-with-locales.min.js"></script>
<script src="customer/calendar/js/calendar.js"></script>

{{-- CALENDAR  --}}

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/customer/css/horizontal-layout/style.css">
  <!-- endinject -->
   <!--====== Favicon Icon ======-->
   <link rel="shortcut icon" href="{{ asset('chnlsgasplant/images/favicon.png') }}" type="image/png">
</head>

<body>
  <div class="container-scroller">
    <div class="container-scroller">
      <!-- partial:partials/_horizontal-navbar.html -->
     @include('customer.includes.navbar')

      <!-- partial -->
    @yield('content')
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	

  <script src="/customer/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="/customer/js/off-canvas.js"></script>
  <script src="/customer/js/template.js"></script>
  <script src="/customer/js/settings.js"></script>
  <script src="/customer/js/todolist.js"></script>
  <script src="/customer/js/data-table.js"></script>
  <script src="/customer/js/hoverable-collapse.js"></script>
  <script src="/customer/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="/customer/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="/customer/vendors/jquery-toast-plugin/jquery.toast.min.js"></script>
  <script src="/customer/js/toastDemo.js"></script>
	{{-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> --}}
        {{-- <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script> --}}
         {{-- {!! Toastr::message() !!} --}}
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
  @yield('scripts')
 
  <script>

    @if(Session::has('success'))
  $.toast({
    heading: 'Success',
      text: "{{session('success')}}",
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#f96868',
      position: 'top-right'
})
  @endif

    @if(Session::has('error'))
  $.toast({
    heading: 'Danger',
      text: "{{session('error')}}",
      showHideTransition: 'slide',
      icon: 'danger',
      loaderBg: '#f96868',
      position: 'top-right'
})
  @endif

    @if(Session::has('info'))
  $.toast({
    heading: 'Info',
      text: "{{session('info')}}",
      showHideTransition: 'slide',
      icon: 'info',
      loaderBg: '#f96868',
      position: 'top-right'
})
  @endif


    @if(Session::has('warning'))
  $.toast({
    heading: 'Warning',
      text: "{{session('warning')}}",
      showHideTransition: 'slide',
      icon: 'warning',
      loaderBg: '#f96868',
      position: 'top-right'
})
  @endif

  </script>
</body>

</html>
