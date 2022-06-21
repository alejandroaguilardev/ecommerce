<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Administrador Alta Moda- Login </title>
      <meta name="description " content="Administrador">
      <meta property="og:type" content="website">
      <meta name="author" content="Alta Moda">
      <meta name="robots" content="nofollow,noodp">

    <!-- Bootstrap -->
    <link href="{{asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('admin/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
    <link rel="icon" href="{{asset('admin/img/favicon.ico')}}" type="image/ico" />
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
 
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">


          <form  action="{{route('adminLoguiarse')}}" method="POST">
              @csrf
                <h1>Buen día, Identifícate</h1>

                @if(session('alert2'))
                    <p>
                        <span class="btn-danger" style="padding:.5rem;">{{session('alert2')}}</span>
                    </p>
                    <hr>
                @endif
              <div>
              <input type="email" class="form-control" placeholder="Correo Electrónico" id="email" name="email" value="{{old('email')}}"required="" />
              </div>
              @error('email')
                  <span>{{$message}}</span>
              @enderror
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password"required="" />
              </div>
              @error('password')
                  <span>{{$message}}</span>
              @enderror
              <div>
                <button class="btn btn-success submit" >Iniciar Sesión</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
<!--                   <a href="#signup" class="to_register"> ¿Olvidaste tu Contraseña? </a>
 -->                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-gear"></i>  ¡Administrar tu Sitio!</h1>
                  <p>©2020 All Rights Reserved. Harvisysem. <a href="#" target="_blank" >Terminos y Condiciones</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>

  
      </div>
    </div>
    @include('admin.layouts.partials.scripts')
  </body>
</html>
