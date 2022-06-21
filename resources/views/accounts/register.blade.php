@extends('layouts.template')
@section('title')
   <title>Registrarse Altamoda & Reyblue</title>
   <meta name="description " content="Inicia Sesión en Altamoda">
   <meta name="keywords" content="pijamas,alta moda,rey blue,gamarra,lima,vestidos,diseños de ropa,diseño de pijama">
   <meta property="og:title" content="Alta Moda & Reyblue  Bienvenido a nuestra Tienda de ropa exclusiva">
   <meta property="og:type" content="website">
   <meta property="og:image" content="http://altamoda.pe/laravel/public/img/alta-moda.png">
   <meta property="og:url" content="https://altamoda.pe/registro">
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
                <div class="col-md-2 col-lg-2"></div>
                <div class="col-md-8 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                           Registrarse
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
                    <form method="post" action="{{route('registro.store')}}" >
                        @csrf
                        <div class="row mb-4">
                            <div class="col-md-6">  
                                <label class="envio-label">Nombres <span class="envio-span">*</span></label>
                                <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}" required>
                            </div>
                            @error('nombre')
                                <span>{{$message}}</span>
                            @enderror
                            <div class="col-md-6">  
                                <label class="envio-label">Apellidos <span class="envio-span">*</span></label>
                                <input type="text" name="apellido"  value="{{old('apellido')}}"class="form-control" required>
                            </div>
                            @error('apellido')
                                <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">  
                                <label class="envio-label">Documento de identidad <span class="envio-span">*</span></label>
                                <select name="tipo_documento" class="form-control" required>
                                        <option value="DNI">DNI</option>
                                        <option value="CE">CE</option>
                                </select>
                            </div>
                            <div class="col-md-6">  
                                <label class="envio-label">N° de documento<span class="envio-span">*</span></label>
                                <input type="text" name="documento"  value="{{old('documento')}}"class="form-control" required>
                            </div>
                        </div>
                        @error('documento')
                                <span>{{$message}}</span>
                        @enderror
                        <div class="row mb-4">
                            <div class="col-md-6">  
                                <label class="envio-label">Dirección de Email <span class="envio-span">*</span></label>
                                <input type="email" name="email"  value="{{old('email')}}" class="form-control" required>
                                @error('email')
                                <span>{{$message}}</span>
                            @enderror
                            </div>
                          
                            <div class="col-md-6">  
                                <label class="envio-label">Celular<span class="envio-span">*</span></label>
                                <input type="text" name="celular"  value="{{old('celular')}}"class="form-control" required>
                                @error('celular')
                                <span>{{$message}}</span>
                            @enderror
                            </div>
                          
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">  
                                <label class="envio-label">Contraseña<span class="envio-span">*</span></label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            @error('password')
                                <span>{{$message}}</span>
                            @enderror
                            <div class="col-md-6">  
                                <label class="envio-label">Repetir Contraseña<span class="envio-span">*</span></label>
                                <input type="password"  id="password2"  onkeyup="passwordRepeat()"  class="form-control" required>
                                <span id="error_password"></span>
                            </div>

                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">  
                                <button class="flex-c-m stext-101 cl0 size-116 bg3  hov-btn3 p-lr-15 trans-04 pointer" disabled="false" id="button">Registrar</button>
                            </div>
                        </div>
                            <hr>
                           <a href="{{route('login.index')}}/">¿Ya dispones de una cuenta? Inicia Sesión</a>
                        </center>
                    </form>
                    </div>
                </div>
           </div>
       </div>
    </section> 
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/sesion.js')}}"></script>
@endsection