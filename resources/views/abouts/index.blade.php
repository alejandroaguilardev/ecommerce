@extends('layouts.template')
@section('title')
   <title>Sobre Nuestra Compañia Altamoda & Reyblue</title>
   <meta name="description " content="Conoce sobre nosotros nuestra empresa Alta Moda, nuestra historia, terminos y política ">
   <meta name="keywords" content="pijamas,alta moda,rey blue,gamarra,lima,vestidos,diseños de ropa,diseño de pijama">
   <meta property="og:title" content="Alta Moda & Reyblue  Bienvenido a nuestra Tienda de ropa exclusiva">
   <meta property="og:type" content="website">
   <meta property="og:image" content="https://altamoda.pe/laravel/public/img/alta-moda.png">
   <meta property="og:url" content="https://altamoda.pe/nosotros">
   <meta property="og:description" content="Conoce sobre nosotros nuestra empresa Alta Moda, nuestra historia, terminos y política ">
   <meta property="og:site_name" content="Alta Moda">
   <meta name="author" content="Alta Moda">
   <meta name="robots" content="INDEX,FOLLOW">
@endsection 


@section('content')
	
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92 p-t-140" style="background-image: url('{{asset('img/bg-01.jpg')}}');">
        <h2 class="ltext-105 cl0 txt-center">
            Nosotros
        </h2>
    </section>  

    <!-- Content page -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-148">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                           ¿Quiénes Somos?
                        </h3>
                        <?php echo $data['company']['nosotros'];?>
                    </div>
                </div>

                <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                    <div class="how-bor1 ">
                        <div class="hov-img0">
                            <img src="{{ asset('img/nosotros.png')}}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                    <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Nuestros Valores
                        </h3>
                        <?php echo $data['company']['mision'] ?>               

                    </div>
                </div>

                <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                    <div class="how-bor2">
                        <div class="hov-img0">
                            <img src="{{ asset('img/fabricante-1.jpg')}}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

@endsection