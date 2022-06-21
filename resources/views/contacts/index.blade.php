@extends('layouts.template')
@section('title')
   <title>Contáctanos - Alta Moda & Reyblue</title>
   <meta name="description " content="Catalogo online. Hermosas pijamas para Mujer, buenos precios, envío rápido, nadie te da más. Encuentralas aquí">
   <meta name="keywords" content="pijamas,alta moda,rey blue,gamarra,lima,vestidos,diseños de ropa,diseño de pijama">
   <meta property="og:title" content="Alta Moda & Reyblue  Bienvenido a nuestra Tienda de ropa exclusiva">
   <meta property="og:type" content="website">
   <meta property="og:image" content="https://altamoda.pe/laravel/public/img/alta-moda.png">
   <meta property="og:url" content="https://altamoda.pe/contactanos">
   <meta property="og:description" content="Catalogo online. Hermosas pijamas para Mujer, buenos precios, envío rápido, nadie te da más. Encuentralas aquí">
   <meta property="og:site_name" content="Alta Moda">
   <meta name="author" content="Alta Moda">
   <meta name="robots" content="INDEX,FOLLOW">
@endsection 

@section('content')

	<!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92 p-t-140" style="background-image: url('{{asset('img/bg-01.jpg')}}');">
		<h2 class="ltext-105 cl0 txt-center">
			Contáctanos
		</h2>
	</section>	
 
	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class=" bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg">
						<form action="{{route('contact.store')}}" method="post">
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
						<?php echo $data['company']['email'] ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4 class="mtext-105 cl2 txt-center p-b-30">
						Nuestras Sedes
					</h4>
				</div>
				@foreach($data['sedes'] as $sedes)
					<div class="col-md-6">
						<div class=" bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg ">
							<div class="flex-w p-b-42">
								<span class="fs-18 cl5 txt-center size-211">
									<span class="lnr lnr-map-marker"></span>
								</span>

								<div class="size-212 p-t-2">
									<span class="mtext-110 cl2">
										Dirección
									</span>

									<p class="stext-115 cl6 size-213 p-t-18">
										<?php echo $sedes['direction'] ?>
									</p>
								</div>
							</div>

							<div class="flex-w w-full p-b-42">
								<span class="fs-18 cl5 txt-center size-211">
									<span class="lnr lnr-phone-handset"></span>
								</span>

								<div class="size-212 p-t-2">
									<span class="mtext-110 cl2">
										Escríbenos
									</span>

									<p class="stext-115 cl1 size-213 p-t-18">
										<?php echo $sedes['mobile'] ?>
									</p>
								</div>
							</div>

							<div class="flex-w w-full">
								<span class="fs-18 cl5 txt-center size-211">
									<span class="lnr lnr-envelope"></span>
								</span>

								<div class="size-212 p-t-2">
									<span class="mtext-110 cl2">
										Sale Support
									</span>

									<p class="stext-115 cl1 size-213 p-t-18">
										<?php echo $sedes['email'] ?>
									</p>
								</div>
							</div><hr>
							<?php echo $sedes['url_direction'] ?> 
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>	
	
	
	<!-- Map -->
	<div >
	</div>





@endsection