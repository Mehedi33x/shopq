
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ShopQ</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url('/backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{url('/backend/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url('/backend/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{url('/backend/assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('/backend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{url('/backend/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{url('/backend/assets/images/favicon.png')}}">
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">

            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/connect-plus-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      @include('backend.fixed.header')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <div>
            @include('backend.fixed.sidebar')
        </div>
        @yield('content')

        {{-- body --}}
        <div>
            {{-- @yield('content') --}}
        </div>

        <div>
            {{-- @include('backend.fixed.footer') --}}
        </div>
        {{-- @include('backend.fixed.footer') --}}
      </div>

      <!-- page-body-wrapper ends -->
    </div>
    <div>
        {{-- @include('backend.fixed.footer') --}}
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{url('/backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{url('/backend/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('/backend/assets/vendors/jquery-circle-progress/js/circle-progress.min.js')}}"></script>
    <script src="{{url('/backend/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{url('/backend/assets/js/off-canvas.js')}}"></script>
    <script src="{{url('/backend/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{url('/backend/assets/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{url('/backend/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>
