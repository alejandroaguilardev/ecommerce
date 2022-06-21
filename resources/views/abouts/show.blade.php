@extends('layouts.template')
@section('title')
   <title>Sobre Nuestra Compañia Altamoda & Reyblue</title>
   <meta name="description " content="Conoce sobre nosotros nuestra empresa Alta Moda, nuestra historia, terminos y política ">
   <meta name="keywords" content="pijamas,alta moda,rey blue,gamarra,lima,vestidos,diseños de ropa,diseño de pijama">
   <meta property="og:title" content="Alta Moda & Reyblue  Bienvenido a nuestra Tienda de ropa exclusiva">
   <meta property="og:type" content="website">
   <meta property="og:image" content="https://altamoda.pe/laravel/public/img/alta-moda.png">
   <meta property="og:description" content="Conoce sobre nosotros nuestra empresa Alta Moda, nuestra historia, terminos y política ">
   <meta property="og:site_name" content="Alta Moda">
   <meta name="author" content="Alta Moda">
   <meta name="robots" content="INDEX,FOLLOW">
@endsection 
@section('content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92 p-t-140" style="background-image: url('{{asset('img/bg-01.jpg')}}');">
        <h2 class="ltext-105 cl0 txt-center">
           @switch($data['page'])
               @case('cambio-y-devoluciones')
                  Devoluciones
                   @break
               @case('terminos-y-condiciones')
                    Términos y Condiciones
                   @break
                @case('politica-de-privacidad')
                    Políticas de Privacidad
                  @break
                @case('forma-de-envio')
                    Formas de Envío
                 @break
                @case('nuestras-tiendas')
                    Nuestras tiendas
                 @break
                 
               @default
                   Preguntas Frecuentes
           @endswitch
        </h2>
    </section>  


    <!-- Content page -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-148">
                <div class="col-md-12 col-lg-12">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h2 class="mtext-111 cl2 p-b-16 txt-center">
                            @switch($data['page'])
                            @case('cambio-y-devoluciones')
                               Devoluciones
                                @break
                            @case('terminos-y-condiciones')
                                 Términos y Condiciones
                                @break
                             @case('politica-de-privacidad')
                                 Políticas de Privacidad
                               @break
                             @case('formas-de-envio')
                                 Formas de Envío
                              @break
                              
                            @default
                                Preguntas Frecuentes
                        @endswitch
                        </h2>


                        @switch($data['page'])
                            @case('cambio-y-devoluciones')
                                    <?php echo $data['company']['devoluciones'] ?>
                                @break
                            @case('terminos-y-condiciones')
                                    <?php echo $data['company']['terminos'] ?>
                                @break
                                @case('politica-de-privacidad')
                                    <?php echo $data['company']['politicas'] ?>
                                @break
                                @case('formas-de-envio')
                                    <?php echo $data['company']['forma_envio'] ?>
                                @break
                               
                                
                            @default
                                <?php echo $data['company']['preguntas'] ?>
                        @endswitch
                        
                    </div>
                </div>
            </div>
            

        </div>
    </section>  


@endsection