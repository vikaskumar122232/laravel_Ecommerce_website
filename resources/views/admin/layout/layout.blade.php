<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>I shop</title>

    <!-- Bootstrap -->
    <link href="{{asset('admin_pannel/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin_pannel/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin_pannel/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    {{--  <link href="{{asset('admin_pannel/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">  --}}

    <!-- bootstrap-progressbar -->
    <link href="{{asset('admin_pannel/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    {{--  <link href="{{asset('admin_pannel/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>  --}}
    <!-- bootstrap-daterangepicker -->
    {{--  <link href="{{asset('admin_pannel/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">  --}}

    <!-- Custom Theme Style -->
    <link href="{{asset('admin_pannel/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
       @include('admin.layout.sidebar')

        <!-- top navigation -->
        @include('admin.layout.header')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
@yield('content')
          <!-- /top tiles -->







        <!-- /page content -->

        <!-- footer content -->
        <footer>

          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
 <!-- jQuery -->
 <script src="{{asset('admin_pannel/vendors/jquery/dist/jquery.min.js')}}"></script>
 <!-- Bootstrap -->
 <script src="{{asset('admin_pannel/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
 <!-- FastClick -->
 {{--  <script src="{{asset('admin_pannel/vendors/fastclick/lib/fastclick.js')}}"></script>  --}}
 <!-- NProgress -->
 <script src="{{asset('admin_pannel/vendors/nprogress/nprogress.js')}}"></script>
 <!-- Chart.js -->
 {{--  <script src="{{asset('admin_pannel/vendors/Chart.js/dist/Chart.min.js')}}"></script>  --}}
 <!-- gauge.js -->
 {{--  <script src="{{asset('admin_pannel/vendors/gauge.js/dist/gauge.min.js')}}"></script>  --}}
 <!-- bootstrap-progressbar -->
 {{--  <script src="{{asset('admin_pannel/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>  --}}
 <!-- iCheck -->
 {{--  <script src="{{asset('admin_pannel/vendors/iCheck/icheck.min.js')}}"></script>  --}}
 <!-- Skycons -->
 {{--  <script src="{{asset('admin_pannel/vendors/skycons/skycons.js')}}"></script>  --}}
 <!-- Flot -->
 {{--  <script src="{{asset('admin_pannel/vendors/Flot/jquery.flot.js')}}"></script>  --}}
 {{--  <script src="{{asset('admin_pannel/vendors/Flot/jquery.flot.pie.js')}}"></script>  --}}
 {{--  <script src="{{asset('admin_pannel/vendors/Flot/jquery.flot.time.js')}}"></script>  --}}
 {{--  <script src="{{asset('admin_pannel/vendors/Flot/jquery.flot.stack.js')}}"></script>  --}}
 {{--  <script src="{{asset('admin_pannel/vendors/Flot/jquery.flot.resize.js')}}"></script>  --}}
 <!-- Flot plugins -->
 {{--  <script src="{{asset('admin_pannel/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>  --}}
 {{--  <script src="{{asset('admin_pannel/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>  --}}
 {{--  <script src="{{asset('admin_pannel/vendors/flot.curvedlines/curvedLines.js')}}"></script>  --}}
 <!-- DateJS -->
 {{--  <script src="{{asset('admin_pannel/vendors/DateJS/build/date.js')}}"></script>  --}}
 <!-- JQVMap -->
 {{--  <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>  --}}
 {{--  <script src="{{asset('admin_pannel/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>  --}}
 {{--  <script src="{{asset('admin_pannel/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>  --}}
 <!-- bootstrap-daterangepicker -->
 {{--  <script src="{{asset('admin_pannel/vendors/moment/min/moment.min.js')}}"></script>  --}}
 {{--  <script src="{{asset('admin_pannel/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>  --}}

 <!-- Custom Theme Scripts -->
 <script src="{{asset('admin_pannel/build/js/custom.min.js')}}"></script>
    <!-- jQuery -->



  </body>
</html>
