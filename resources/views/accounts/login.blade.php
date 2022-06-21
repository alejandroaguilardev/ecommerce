@extends('layouts.template')
@section('title')
   <title>Login Altamoda & Reyblue</title>
   <meta name="description " content="Inicia Sesión en Altamoda">
   <meta name="keywords" content="pijamas,alta moda,rey blue,gamarra,lima,vestidos,diseños de ropa,diseño de pijama">
   <meta property="og:title" content="Alta Moda & Reyblue  Bienvenido a nuestra Tienda de ropa exclusiva">
   <meta property="og:type" content="website">
   <meta property="og:image" content="http://altamoda.pe/laravel/public/img/alta-moda.png">
   <meta property="og:url" content="https://altamoda.pe/login">
   <meta property="og:description" content="Inicia Sesión en Altamoda">
   <meta property="og:site_name" content="Alta Moda">
   <meta name="author" content="Alta Moda">
   <meta name="robots" content="nofollow,noodp">
@endsection 

@section('content')


    <!-- Content page -->
    <section class="bg0 p-t-75">
        <div class="container p-t-75 ">
            <div class="row p-b-148">
                <div class="col-md-3 col-lg-3"></div>
                <div class="col-md-6 col-lg-6">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                           Iniciar Sesión
                        </h3>
                        @if(session('alert'))
                            <h1>
                                <span class="btn-success stext-102" style="padding:.5rem;">{{session('alert')}}</span>
                            </h1>
                            <hr>
                        @endif
                        @if(session('alert2'))
                            <h1>
                                <span class="btn-danger stext-102" style="padding:.5rem;">{{session('alert2')}}</span>
                            </h1>
                            <hr>
                        @endif
                        <form method="post" action="{{route('login.store')}}" >
                            @csrf
                           <input type="email" class="form-control p-t-10 p-b-10 " name="email" value="" placeholder="email"><br>
                            @error('email')
                                <span>{{$message}}}</span>
                            @enderror
                           <input type="password" class="form-control p-t-10 p-b-10 " name="password"  placeholder="Contraseña"><br>
                            @error('password')
                                <span>{{$message}}</span>
                            @enderror
                            <button class="flex-c-m stext-101 cl0 size-116 bg3  hov-btn3 p-lr-15 trans-04 pointer">Continuar</button><hr>
                           <center><a href='#' data-toggle='modal' data-target='.recuperar'>¿Olvidaste Tu Contraseña?</a><br>
                            <hr>
                           <a href="{{route('registro.index')}}/">¿Aún no dispones de cuenta? Registrate</a></center>
                       </form>
                    </div>
                </div>
           </div>
       </div>
    </section>  

    <div class='modal fade recuperar' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-lg modal-dialog-centered'>
            <div class='modal-content'>
                <div class='modal-header  delete-modal' style="background: #7BBEEA">
                    <center>
                      <h5 class='modal-title text-white' id='exampleModalLongTitle' style="font-weight: bold">Recuperar Contraseña (Se le enviará un Email)</h5>
                    </center>
                    <button type='button' class='close text-white' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <form action="{{route('login.update','recuperar')}}" method="post">
                    @csrf
                    @method('put')
                    <div class='modal-body'>
                        <div class='row'>
                            <div class='col-md-12 modal_description'>
                                <input type="email" class="form-control p-t-10 p-b-10 " name="email" value="" placeholder="email"><br>
                            </div>
                        </div>
                    </div>
                    <div class='modal-footer'>
                        <button class="flex-c-m stext-101 cl0 size-116 bg3  hov-btn3 p-lr-15 trans-04 pointer">Recuperar</button><hr>
                </div>
            </div>
        </div>
        </div>








@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/sesion.js')}}"></script>
@endsection