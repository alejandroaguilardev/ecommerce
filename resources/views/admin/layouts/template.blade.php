<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/ico" />
    @yield('title')

    <!-- Bootstrap -->
    <link href="{{asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('admin/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    {{-- <link href="{{asset('admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet"> --}}
    <!-- JQVMap -->
    <link href="{{asset('admin/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
   <link href="{{asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
     <script src="{{asset('admin/vendors/tinymce/tinymce.min.js')}}"></script>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('admin.layouts.partials.siderbar')
        @yield('content')

        <input type="hidden" id="route_dominio" value="{{route('adminHome')}}/">
        <input type="hidden" id="route_project" value="{{route('home.index')}}/">
        <!-- footer content -->
        <footer>
          <div class="pull-right">
             	<p>©2020 All Rights Reserved. <a href="#" target="_blank" >Terminos y Condiciones</a></p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    @include('admin.layouts.partials.scripts')
    @yield('scripts')

  </body>
</html>