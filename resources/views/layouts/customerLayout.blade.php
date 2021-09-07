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
    @yield('content')
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="/customer/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="/customer/js/off-canvas.js"></script>
  <script src="/customer/js/hoverable-collapse.js"></script>
  <script src="/customer/js/template.js"></script>
  <script src="/customer/js/settings.js"></script>
  <script src="/customer/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->

  @yield('scripts')
</body>

</html>
