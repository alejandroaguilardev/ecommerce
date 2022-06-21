@extends('layouts.template')
@section('title')
   <title>Recuperar Altamoda & Reyblue</title>
   <meta name="description " content="Recuperar en Altamoda">
   <meta name="keywords" content="pijamas,alta moda,rey blue,gamarra,lima,vestidos,diseños de ropa,diseño de pijama">
   <meta property="og:title" content="Alta Moda & Reyblue  Bienvenido a nuestra Tienda de ropa exclusiva">
   <meta property="og:type" content="website">
   <meta property="og:image" content="http://altamoda.pe/laravel/public/img/alta-moda.png">
   <meta property="og:description" content="Recuperar en Altamoda">
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
                           Recuperar
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
                    <form method="post" action="{{route('login.update',$data['token'])}}">
                        @csrf
                        @method('put')
                       <div class="row mb-4">
                           <div class="col-md-6">  
                               <label class="envio-label">Contraseña Nueva<span class="envio-span">*</span></label>
                               <input type="password" name="password" id="password" class="form-control" required>
                           </div>
                             <div class="col-md-6">  
                               <label class="envio-label">Repetir Contraseña<span class="envio-span">*</span></label>
                               <input type="password"  id="password2"  onkeyup="passwordRepeat()"  class="form-control" required>
                               <span id="error_password"></span>
                           </div>
                       </div>
                       @error('password')
                        <span style="color:red">{{$message}}</span><hr>
                       @enderror
                       <div class="row mb-4">
                           <div class="col-md-12">  
                               <button class="flex-c-m stext-101 cl0 size-116 bg3  hov-btn3 p-lr-15 trans-04 pointer" disabled="false" id="button">Modificar</button>
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