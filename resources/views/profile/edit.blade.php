@extends('layouts.template')
@section('title')
   <title>Datos de Perfil Altamoda & Reyblue</title>
   <meta name="description " content="Perfil Datos en Altamoda">
   <meta name="keywords" content="pijamas,alta moda,rey blue,gamarra,lima,vestidos,diseños de ropa,diseño de pijama">
   <meta property="og:title" content="Alta Moda & Reyblue  Bienvenido a nuestra Tienda de ropa exclusiva">
   <meta property="og:type" content="website">
   <meta property="og:image" content="https://altamoda.pe/laravel/public/img/alta-moda.png">
   <meta property="og:description"  content="Perfil Datos en Altamoda">
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
                          Modificar Datos Personales
                        </h3>
                        @if(session('alert'))
                            <h1>
                                <span class="btn-warning stext-102" style="padding:.5rem;">{{session('alert')}}</span>
                            </h1>
                            <hr>
                        @endif
                    <form method="post" action="{{route('perfil.update',session()->get('cliente_alta_moda')['nombre'])}}" >
                        @csrf
                        @method('put')
                        <div class="row mb-4">
                            <div class="col-md-6">  
                                <label class="envio-label">Nombres <span class="envio-span">*</span></label>
                                <input type="text" name="nombre" class="form-control" required value="{{session()->get('cliente_alta_moda')['nombre']}}">
                            </div>
                            <div class="col-md-6">  
                                <label class="envio-label">Apellidos <span class="envio-span">*</span></label>
                                <input type="text" name="apellido" value="{{session()->get('cliente_alta_moda')['apellido']}}" class="form-control" required>
                            </div>
                            
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">  
                                <label class="envio-label">Documento de identidad <span class="envio-span">*</span></label>
                                <select name="tipo_documento" class="form-control" required>
                                	<?php if(session()->get('cliente_alta_moda')['nombre']=="CE"){ ?>
                                        <option value="DNI">DNI</option>
                                        <option value="CE" selected>CE</option>
                                    <?php }else{ ?>
                                        <option value="DNI" selected>DNI</option>
                                        <option value="CE">CE</option>
                                       <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-6">  
                                <label class="envio-label">N° de documento<span class="envio-span">*</span></label>
                                <input type="text" name="documento" value="{{session()->get('cliente_alta_moda')['documento']}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">  
                                <label class="envio-label">Dirección de Email <span class="envio-span">*</span></label>
                                <input type="email" name="email" class="form-control" value="{{session()->get('cliente_alta_moda')['email']}}" required>
                            </div>
                            <div class="col-md-6">  
                                <label class="envio-label">Celular<span class="envio-span">*</span></label>
                                <input type="text" name="celular" class="form-control" value="{{session()->get('cliente_alta_moda')['celular']}}" required>
                            </div>
                        </div>
                       
                        <div class="row mb-4">
                            <div class="col-md-12">  
                                <button class="flex-c-m stext-101 cl0 size-116 bg3  hov-btn3 p-lr-15 trans-04 pointer">Modificar</button>
                                <hr>
                                <center>
                                    <a href="{{route('perfil.show','seguridad')}}">¿Quieres cambiar tu contraseña?</a>
                                </center>                            
                            </div>
                        </div>
                        
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