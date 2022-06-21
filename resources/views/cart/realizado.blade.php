@extends('layouts.template')
@section('title')
   <title>Pedido Realizado - Altamoda & Reyblue</title>
   <meta name="description " content="Pedido Realizado en Altamoda">
   <meta name="keywords" content="pijamas,alta moda,rey blue,gamarra,lima,vestidos,diseños de ropa,diseño de pijama">
   <meta property="og:title" content="Alta Moda & Reyblue  Bienvenido a nuestra Tienda de ropa exclusiva">
   <meta property="og:type" content="website">
   <meta property="og:image" content="https://altamoda.pe/laravel/public/img/alta-moda.png">
   <meta property="og:url" content="https://altamoda.pe/realizado">
   <meta property="og:description"  content="Pedido Realizado en Altamoda">
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
                        <h3 class="mtext-111 cl2 p-b-16 text-center">
                           Ha Sido Realizado  Sastifactoriamente el pedido
                        </h3>
                        <p>Puedes contactarnos a nuestro número de whatsapp para acelerar o coordinar le proceso, dentro de las próximas horas estaremos llamandolo.</p><hr>
                        <a href="{{route('perfil.index')}}" class="flex-c-m stext-101 cl0 size-116 bg3  hov-btn3 p-lr-15 trans-04 pointer">Ver tus pedidos</a><hr>
                        <a href="https://api.whatsapp.com/send?phone={{$data['company']['whatsapp']}}&text=hola, acabo de realizar un pedido a nombre de {{session()->get('cliente_alta_moda')['nombre']}} {{session()->get('cliente_alta_moda')['apellido']}}"  target="_blank"class="flex-c-m stext-101 cl0 size-116 bg3  hov-btn3 p-lr-15 trans-04 pointer">Contáctanos en Whatsapp</a><hr>

                    </div>
                </div>
           </div>
       </div>
    </section>  




@endsection

