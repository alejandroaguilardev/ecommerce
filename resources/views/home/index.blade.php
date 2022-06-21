@extends('layouts.template')
@section('title')
   <title>Alta Moda & Reyblue  Bienvenido a nuestra Tienda de ropa exclusiva</title>
   <meta name="description " content="Fabricamos nuestras prendas. Catalogo online. Hermosas pijamas para Mujer, buenos precios, envío rápido, nadie te da más. Encuentralas aquí">
   <meta name="keywords" content="pijamas,alta moda,rey blue,gamarra,lima,vestidos,diseños de ropa,diseño de pijama">
   <meta property="og:title" content="Alta Moda & Reyblue  Bienvenido a nuestra Tienda de ropa exclusiva">
   <meta property="og:type" content="website">
   <meta property="og:image" content="https://altamoda.pe/laravel/public/img/alta-moda.png">
   <meta property="og:url" content="https://altamoda.pe/">
   <meta property="og:description" content="Fabricamos nuestras prendas. Catalogo online. Hermosas pijamas para Mujer, buenos precios, envío rápido, nadie te da más. Encuentralas aquí">
   <meta property="og:site_name" content="Alta Moda">
   <meta name="author" content="Alta Moda">
   <meta name="robots" content="INDEX,FOLLOW">
@endsection 

@section('content')

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1 rs2-slick1">
			<div class="slick1">
				<div class="item-slick1 bg-overlay2" style="background-image: url('{{asset('img/slide-05.jpg')}}' );" data-thumb="{{asset('img/slide-05.jpg')}}" data-caption="Pijamas">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2 text_shadown1">
									Tenemos lo que buscas
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1 text_shadown">
									Pijamas
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="{{route('product.show','pijamas')}}/" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
									¡Ver Ahora!
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1 bg-overlay2" style="background-image: url('{{ asset('img/slide-06.jpg')}}');" data-thumb="{{asset('img/slide-06.jpg')}}" data-caption="Vestidos">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2 text_shadown1">
								Tenemos lo que buscas
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1 text_shadown">
									Vestidos
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="{{route('product.show','vestidos')}}/" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
									¡Ver Ahora!
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick1-dots p-lr-10"></div>
		</div>
	</section>



<!-- Banner -->
<div class="sec-banner bg0 p-t-95 p-b-55">
   <div class="container">
      <div class="row">
       <div class="col-12">
         <div class="p-b-10 text-center">
           <h4 class="ltext-106 cl5 d-none d-sm-block"><b> Nuestras </b></h4>
           <div class="row"><div class="col-md-4 "></div><div class="d-none d-sm-block logo_color2 col-md-4"><h4><span style="font-size: 2.5rem;color:#fff">PROMOCIONES</span></h4></div></div>
           <h4 class="ltext-102 cl5 d-block d-sm-none"><b> Nuestras </b></h4>
           <div class="row d-block d-sm-none"><div class="col-md-4"></div><div class="logo_color2 col-md-4"><h4><span style="font-size: 2rem;color:#fff">PROMOCIONES</span></h4></div></div>


        </div>
       </div>
       <div class="col-12">
         <div class="owl-carousel owl-theme owl-loaded owl-drag  p-b-30 m-lr-auto">
              <!-- Block1 -->
              <div class="item">
                <div class="block1 wrap-pic-w">
                   <img src="{{ asset('img/' .$data['home']['banner1'] . '')}}" onerror="errorImg()" style="width:100%" >

                   <a href="{{route('product.show',[$data['product1']->cslug,$data['product1']->slug])}}/" 
                     class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                      <div class="block1-txt-child1 flex-col-l">
                         <span class="block1-name ltext-102 trans-04 p-b-8 p-">
                            {{$data['product1']->name}}
                         </span>

                         <span class="block1-info stext-102 trans-04">
                           <?php echo date('Y') ?>
                         </span>
                      </div>

                      <div class="block1-txt-child2 p-b-4 trans-05">
                         <div class="block1-link stext-101 cl0 trans-09">
                           ¡Ver Ahora!
                         </div>
                      </div>
                   </a>
                </div>
                 <p class="mtext-102 "> {{$data['product1']->name}}</p>
             </div>

             <div class="item">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                   <img src="{{ asset('img/' .$data['home']['banner2'] . '')}}" onerror="errorImg()"style="width:100%" >

                   <a href="{{route('product.show',[$data['product2']->cslug,$data['product2']->slug])}}/" 
                     class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                      <div class="block1-txt-child1 flex-col-l">
                         <span class="block1-name ltext-102 trans-04 p-b-8">
                           {{$data['product2']->name}}
                        </span>

                         <span class="block1-info stext-102 trans-04">
                           <?php echo date('Y') ?>
                         </span>
                      </div>

                      <div class="block1-txt-child2 p-b-4 trans-05">
                         <div class="block1-link stext-101 cl0 trans-09">
                           ¡Ver Ahora!
                         </div>
                      </div>
                   </a>
                </div>
                 <p class="mtext-102 "> {{$data['product2']->name}}</p>

             </div>

             <div class="item">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                   <img src="{{ asset('img/' .$data['home']['banner3'] . '')}}" onerror="errorImg()" style="width:100%">

                   <a href="{{route('product.show',[$data['product3']->cslug, $data['product3']->slug])}}/" 
                     class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                      <div class="block1-txt-child1 flex-col-l">
                         <span class="block1-name ltext-102 trans-04 p-b-8">
                           {{$data['product3']->name}}
                        </span>

                         <span class="block1-info stext-102 trans-04">
                           <?php echo date('Y') ?>
                         </span>
                      </div>

                      <div class="block1-txt-child2 p-b-4 trans-05">
                         <div class="block1-link stext-101 cl0 trans-09">
                           ¡Ver Ahora!
                         </div>
                      </div>
                   </a>
                </div>
                 <p class="mtext-102 "> {{$data['product3']->name}}</p>
             </div>
        </div>
      </div>
   </div>
</div>
</div>

<!-- Product -->
<section class="bg0 p-t-23 p-b-100 ">
   <div class="container d-none d-sm-block">
      <div class="p-b-10 text-center">
         <h4 class="ltext-106 cl5 "><b>Lo Último en</b></h4>
           <div class="row"><div class="col-md-4"></div><div class="logo_color1 col-md-4"><img src="{{asset('img/alta-moda.png')}}" style="height: 2.8rem;"></div></div>
        
      </div>
      <div class="row isotope-grid ">
        @foreach ($data['altamoda'] as $key)
            @include('layouts.partials.product')
        @endforeach
      </div>
   </div>

    <div class="container d-block d-sm-none">
      <div class="p-b-10 text-center">
         <h4 class="ltext-102 cl5 "><b>Lo Último en</b></h4>
           <div class="row"><div class="col-md-4"></div><div class="logo_color1 col-md-4"><img src="{{asset('img/alta-moda.png')}}" style="height: 2.3rem;"></div></div>
      </div>

      <div class="row">
         <div class="col-12">
           <div class="owl-carousel owl-theme owl-loaded owl-drag">
            @foreach ($data['altamoda'] as $key)
              @include('layouts.partials.product-responsive')
            @endforeach
           </div>
         </div>
      </div>
   </div>
</section>

<!-- Product -->
<section class="bg0 p-t-23 p-b-100 ">
   <div class="container d-none d-sm-block">
      <div class="p-b-10 text-center">
         <h4 class="ltext-106 cl5 "><b>Lo Último en</b></h4>
           <div class="row"><div class="col-md-4"></div><div class="logo_color col-md-4"><img src="{{asset('img/rey-blue.png')}}" style="height: 2.3rem;"></div></div>
        
      </div>
      <div class="row isotope-grid ">
        @foreach ($data['reyblue'] as $key)
          @include('layouts.partials.product')
        @endforeach
      </div>
   </div>

   <div class="container d-block d-sm-none">
      <div class="p-b-10 text-center">
         <h4 class="ltext-102 cl5 "><b>Lo Último en</b></h4>
           <div class="row"><div class="col-md-4"></div><div class="logo_color col-md-4"><img src="{{asset('img/rey-blue.png')}}" style="height: 1.8rem;"></div></div>
        
      </div>
       <div class="row">
         <div class="col-12">
           <div class="owl-carousel owl-theme owl-loaded owl-drag">
            @foreach ($data['reyblue'] as $key)
              @include('layouts.partials.product-responsive')
            @endforeach
           </div>
         </div>
      </div>
   </div>
</section>
@endsection