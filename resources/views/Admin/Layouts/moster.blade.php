<!DOCTYPE html>
<html lang="en">

@include('Admin.Layouts.head')

<body>
@include('sweetalert::alert' )

  <!-- BEGIN LOADER -->
  <div id="load_screen">
    <div class="loader">
      <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
      </div>
    </div>
  </div>
  <!--  END LOADER -->

  <!--  BEGIN NAVBAR  -->
  @include('Admin.Layouts.navbar_first')
  <!--  END NAVBAR  -->

  <!--  BEGIN NAVBAR  -->
  @include('Admin.Layouts.navbar_second')
  <!--  END NAVBAR  -->

  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    @include('Admin.Layouts.sidebar')
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
      <div class="layout-px-spacing">

       @yield('content')

      </div>
      @include('Admin.layouts.footer')
    </div>
    <!--  END CONTENT AREA  -->

  </div>
  <!-- END MAIN CONTAINER -->

  <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
  <script src="{{ asset('adminAssest/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
  <script src="{{ asset('adminAssest/bootstrap/js/popper.min.js')}}"></script>
  <script src="{{ asset('adminAssest/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('adminAssest/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('adminAssest/assets/js/app.js')}}"></script>
  <script>
    $(document).ready(function() {
      App.init();
    });
  </script>
  <script src="{{ asset('adminAssest/assets/js/custom.js')}}"></script>
  <!-- END GLOBAL MANDATORY SCRIPTS -->

  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
  <script src="{{ asset('adminAssest/plugins/apex/apexcharts.min.js')}}"></script>
  <script src="{{ asset('adminAssest/assets/js/dashboard/dash_1.js')}}"></script>
  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
 
  @include('sweetalert::alert' )
</body>

</html>