

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
@yield('js')