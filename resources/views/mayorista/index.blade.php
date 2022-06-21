@extends('layouts.template')
@section('title')
   <title>Para Mayoristas - Altamoda & Reyblue</title>
   <meta name="description " content="Para Mayoristas conoce los privilegios que obtienes si te vueleves un proveedor en Alta Moda">
   <meta name="keywords" content="pijamas,alta moda,rey blue,gamarra,lima,vestidos,diseños de ropa,diseño de pijama">
   <meta property="og:title" content="Alta Moda & Reyblue  Bienvenido a nuestra Tienda de ropa exclusiva">
   <meta property="og:type" content="website">
   <meta property="og:image" content="https://altamoda.pe/laravel/public/img/alta-moda.png">
   <meta property="og:url" content="https://altamoda.pe/mayorista">
   <meta property="og:description" content="Para Mayoristas conoce los privilegios que obtienes si te vueleves un proveedor en Alta Moda">
   <meta property="og:site_name" content="Alta Moda">
   <meta name="author" content="Alta Moda">
   <meta name="robots" content="INDEX,FOLLOW">
@endsection 
@section('content')
	
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92 p-t-140" style="background-image: url('{{asset('img/bg-02.jpg')}}');">
        <h2 class="ltext-105 cl0 txt-center">
            Para Mayoristas
        </h2>
    </section>  

    <!-- Content page -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-148">
                <div class="col-md-6 col-lg-6">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                           VENTA PARA MAYORISTAS
                        </h3>
                        <hr>
                        <p>
                            Si cuentas con un emprendimiento o empresa propia,
                             y quieres potenciar tus ventas con nuestros productos,
                             <strong> Somos Fabricantes</strong>
                              mediante la compra de altos volúmenes de productos de
                               manera periódica, no solo obtendrás 
                                descuentos, sino también puedes adquirir productos personalizados
                                con tu marca, contáctanos a través del correo electronico o nuestro
                                número de Whatsapp.
                        </p>
                        <hr>
                        <a href="tel:{{$data['company']['whatsapp']}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                             Llámanos {{$data['company']['whatsapp']}}
                        </a>   
                    </div>
                </div>

                <div class="col-11 col-md-6 col-lg-4 m-lr-auto">
                    <div class="how-bor1 ">
                        <div class="hov-img0">
                            <img src="{{ asset('img/fabricante-3.jpg')}}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="order-md-2 col-md-6 col-lg-6 p-b-30">
                    <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                           ¿QUÉ BENEFICIOS  OBTENDRÍA?
                        </h3>
                        <ul class="beneficios">
                        <li><i class="fa fa-check-circle"></i> Somos Fabricantes, realizamos el diseño de tu preferencia.</li>
                        <li><i class="fa fa-check-circle"></i> Tener la posibilidad de obtener descuentos y privilegios
                         de dscto sobre precio de etiqueta.</li>
                        <li><i class="fa fa-check-circle"></i> Realizar sus pedidos desde la comodidad de su casa o
                         trabajo, recoger sus productos en alguna de nuestras tiendas
                          o recepcionarla en cualquier parte de Perú.</li>
                        <li><i class="fa fa-check-circle"></i> Poder utilizar el método de pago que prefieras (efectivo, depósito,
                         transferencia o tarjeta).</li>
                        <li><i class="fa fa-check-circle"></i> Serás el (la) primero(a) en enterarte de las ofertas y descuentos
                         especiales que esperan por ti.</li>

                    </div>
                    <div class="row">
                        <div class="order-md-2 col-md-12 col-lg-12 p-b-30">
                            <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                                <hr>
                                <h3 class="mtext-111 cl2 p-b-16">
                                PARA MÁS INFORMACIÓN 
                                </h3>
                                <p>
                                   Contáctanos a través de nuestros números de contacto o envíanos un
                                   correo electrónico
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-md-1 col-11 col-md-6 col-lg-6 m-lr-auto p-b-30">
                    <div class="how-bor2">
                        <div class="hov-img0">
                            <img src="{{ asset('img/fabricante-2.jpg')}}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-t-73">
                <div class=" m-lr-auto col-md-8">
                    <form action="{{route('mayorista.store')}}" method="post">
                            @csrf
                            <h4 class="mtext-105 cl2 txt-center p-b-30">
                                Mándanos un mensaje
                            </h4>
                            @error('email')
                                <span class="stext-111 cl1">{{$message}}</span>
                            @enderror
                            <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email" value="{{old('email')}}" placeholder="Tu correo Electrónico" required>
                                <img class="how-pos4 pointer-none" src="{{asset('img/icons/icon-email.png')}}" alt="ICON">
                            </div>
                            @error('name')
                                <span class="stext-111 cl1">{{$message}}</span>
                            @enderror
                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name" value="{{old('name')}}" placeholder="Tu nombre" required>
                                <img class="how-pos4 pointer-none" src="{{asset('img/icons/icon-heart-01.png')}}" alt="ICON">
                            </div>
                            @error('phone')
                                <span class="stext-111 cl1">{{$message}}</span>
                            @enderror
                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="phone" value="{{old('phone')}}" placeholder="Tu Teléfono" required>
                                <img class="how-pos4 pointer-none" src="{{asset('img/icons/icon-heart-01.png')}}" alt="ICON">
                            </div>
                            @error('message')
                                <span class="stext-111 cl1">{{$message}}</span>
                            @enderror
                            <div class="bor8 m-b-30">
                                <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="messages" placeholder="¿Como podemos Ayudarte?" required>{{old('messages')}}</textarea>
                            </div>
                            <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                                Enviar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </section>  

@endsection