 <!DOCTYPE html>
 <html lang="es">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   @yield('title')
   <link rel="icon" type="image/png" href="{{ asset('img/icons/favicon.png') }}"/>
   <link rel="shortcut icon" href="{{ asset('img/icons/favicon.png') }}" type="image/x-icon">
   
   <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
   {{-- <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}"> --}}
   {{-- <link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons-v1.0.0/icon-font.min.css') }}"> --}}
   {{-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}"> --}}
   {{-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}"> --}}
   <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
   {{-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">   --}}
   {{-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}"> --}}
   <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('vendor/MagnificPopup/magnific-popup.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('vendor/owl/owl.carousel.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('vendor/owl/owl.theme.default.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">  

 </head>
 
<body class="animsition">
    @include('layouts/partials/header')
    @yield('content')
 
    @include('layouts/partials/footer')
    <input type="hidden" id='route_dominio' value="{{ URL::to('/') }}/">
    <input type="hidden" id='token_cr' value="{{ csrf_token() }}">

	  <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/slick-custom.js') }}"></script>
    <script src="{{ asset('vendor/parallax100/parallax100.js') }}"></script>
    <script src="{{ asset('vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/cart.js') }}"></script>
    <script src="{{ asset('vendor/owl/owl.carousel.min.js') }}"></script>
    <script   src="{{ asset('vendor/select2/select2.min.js') }}"></script>

    <script src="{{ asset('js/custom.js') }}"></script>
    
    @yield('scripts')


</body>
</html>