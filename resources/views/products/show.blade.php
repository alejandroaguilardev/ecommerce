@extends('layouts.template')

@section('title')
   <title>{{$data['product']->name}} - Alta Moda & Reyblue</title>
   <meta name="description " content="{{$data['product']->name}}, envío rápido, nadie te da más. Encuentralas aquí">
   <meta name="keywords" content="pijamas,alta moda,rey blue,gamarra,lima,vestidos,diseños de ropa,diseño de pijama">
   <meta property="og:title" content="Alta Moda & Reyblue  Bienvenido a nuestra Tienda de ropa exclusiva">
   <meta property="og:type" content="website">
   <meta property="og:image" content="https://altamoda.pe/laravel/public/img/alta-moda.png">
   <meta property="og:description" content="{{$data['product']->name}}, envío rápido, nadie te da más. Encuentralas aquí">
   <meta property="og:site_name" content="Alta Moda">
   <meta name="author" content="Alta Moda">
   <meta name="robots" content="INDEX,FOLLOW">
@endsection 

@section('content')
    <script type="text/javascript">
        let precio_producto=<?php echo $data['product']->price ?>;
        let descuento=<?php echo $data['product']->discount ?>;
        let precio_talla=0;
        let precio_tela=0;
    </script>

    <div class="container p-t-100 d-none d-sm-block">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="{{route('home.index')}}" class="mtext-101 cl8 hov-cl1 trans-04">
               Inicio
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="{{route('product.index')}}/" class="mtext-101 cl8 hov-cl1 trans-04">
              Todos los Productos
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>
            <a href="{{route('product.show',$data['product']->cslug)}}/" class="mtext-101 cl8 hov-cl1 trans-04">
              {{$data['product']->category}}
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="mtext-101 cl4">
              {{$data['product']->name}}
            </span>
        </div>
    </div>
        

    <!-- Product Detail -->
    <section class="sec-product-detail bg0 p-t-65">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                      <div class="d-block d-sm-none">
                            @if($data['product']->idtype==1)
                                    <img src="{{asset('img/alta-moda2.png')}}" style="height: 1rem;margin: 0 .1rem .5rem">
                            @else
                                <img src="{{asset('img/rey-blue2.png')}}" style="height: 1rem;margin: 0 .1rem .5rem">
                            @endif
                            <br>

                            <h4 class=" ltext-107 cl2 js-name-detail p-b-14" style="font-weight: bold">
                                {{$data['product']->name}} 
                                <br><span style="font-size: 1rem;margin-left: 1rem"> para:| 
                                @php
                                        $genero=explode(',', $data['product']->genero );
                                        $count=count($genero);
                                        for ($i=0; $i < $count ; $i++) { 
                                        echo $genero[$i].' | ';
                                        }
                                @endphp
                                </span>
                            </h4>
                            <p>{{$data['product']->code}}</p>
                            <hr>
                           
                        </div>
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                            <div class="slick3 gallery-lb" >
                               @if($data['product']->img_1=="")
                                <div class="item-slick3" data-thumb="{{asset('img/vacio.jpg')}}"  >
                               @else
                                <div class="item-slick3" data-thumb="{{asset('img/'.$data['product']->img_1.'')}}" >
                               @endif
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="{{asset('img/'.$data['product']->img_1.'')}}" alt="{{$data['product']->name}}-1" title="{{$data['product']->name}}" onerror="errorImg()">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('img/'.$data['product']->img_1.'')}}" alt="{{$data['product']->name}}" title="{{$data['product']->name}}" onerror="errorImg()">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>

                                @if($data['product']->img_2=="")
                                <div class="item-slick3" data-thumb="{{asset('img/vacio.jpg')}}"  >
                                @else
                                <div class="item-slick3" data-thumb="{{asset('img/'.$data['product']->img_2.'')}}" >
                                @endif
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="{{asset('img/'.$data['product']->img_2.'')}}" alt="{{$data['product']->name}}-2" title="{{$data['product']->name}}-2" onerror="errorImg';">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('img/'.$data['product']->img_2.'')}}" alt="{{$data['product']->name}}-2" title="{{$data['product']->name}}" onerror="errorImg()">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>

                                @if($data['product']->img_3=="")
                                    <div class="item-slick3" data-thumb="{{asset('img/vacio.jpg')}}"  >
                                @else
                                    <div class="item-slick3" data-thumb="{{asset('img/'.$data['product']->img_3.'')}}" >
                               @endif
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="{{asset('img/'.$data['product']->img_3.'')}}" alt="{{$data['product']->name}}" title="{{$data['product']->name}}" onerror="errorImg()">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('img/'.$data['product']->img_3.'')}}" alt="{{$data['product']->name}}" title="{{$data['product']->name}}" onerror="errorImg()">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <div class="d-none d-sm-block">
                            <h4 class="ltext-107 cl2 js-name-detail p-b-14" style="font-weight: bold">
                                @if($data['product']->idtype==1)
                                  <img src="{{asset('img/alta-moda2.png')}}" style="height: 1rem;margin-bottom: 1rem">
                                @else
                                  <img src="{{asset('img/rey-blue2.png')}}" style="height: 1rem;margin-bottom: 1rem">
                                @endif
                                <br>

                                {{$data['product']->name}}
                                <br> <span style="font-size: 1rem;margin-left: 1rem"> para:| 
                                @php 
                                  $genero=explode(',', $data['product']->genero);
                                  $count=count($genero);
                                  for ($i=0; $i < $count ; $i++) { 
                                    echo $genero[$i].' | ';
                                  }
                                @endphp
                                
                              </span>
                            </h4>
                            <p>{{$data['product']->code}}</p>                        
                        </div>
                        <hr>

                        <span class="ltext-107 cl2">
                            @if($data['product']->status=='agotado' && $data['product']->agotado>date('Y-m-d'))
                                    <span class="ltext-102" style="color: #FF0000 ;"> <i>Producto Agotado</span>
                            @else
                                @if($data['product']->discount==0)
                                    <span style="color: #FF0000 ;"><b id="precio_descuento">S/ <?php echo $data['product']->price ?>.00</b></span>
                                    <span class="d-none" style="text-decoration: line-through;opacity: .5 ; margin: 1rem" id="precio_sin_descuento">S/ <?php echo $data['product']->price + $data['product']->discount ?>.00</span>
                                @else
                                    <!-- <span>A partir de:</span><br> -->
                                    <span style="color: #FF0000 ;"><b id="precio_descuento">S/ <?php echo $data['product']->price ?>.00</b></span>
                                    <span style="text-decoration: line-through;opacity: .5 ; margin: 1rem" id="precio_sin_descuento">S/ <?php echo $data['product']->price + $data['product']->discount ?>.00</span>
                                @endif
                            @endif
                        </span>

                        <p class="stext-102 cl3 p-t-23">
                            <?php echo $data['product']->description; ?>
                            @error('message')
                            {{$message}}
                            @enderror
                        </p>

                        @if($data['product']->status=='agotado' && $data['product']->agotado>date('Y-m-d'))
                        <hr>
                        <p> <b>Nota:</b> Agotado hasta la fecha del <span style="color: #FF0000"><?php echo $data['product']->agotado ?></span>. cualquier inquietud puede contáctarnos por nuestro número de whatsapp o dejarnos en email.</p><br>
                        @else
                        <form  id="cart_product" name="cart_product" action="{{route('cart.store')}}" method="post" >
                            @csrf
                            <input type="hidden" name="id" value="{{$data['product']->idproducts}}">
                            <div class="p-t-33">
                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        Talla
                                    </div>

                                    <div class="size-204 respon6-next">
                                        <div class="rs1-select2 bor8 bg0">
                                            <select class="js-select2" name="talla" onchange="talla_function(this)">
                                                <option disabled>Selecciona una Talla</option>
                                                @php
                                                    $talla_precio=0;
                                                    $tallas=explode(',', $data['product']->tallas);
                                                    $count=count($tallas);
                                                @endphp
                                                @for ($i=0; $i <$count ; $i++) 
                                                    @if(strpos( $tallas[$i],"agotado") !== false))
                                                        <option disabled value="{{$tallas[$i]."_".$talla_precio}}" onchange="talla_function(<?php echo $talla_precio ?>)"><?php echo $tallas[$i]; ?> (Talla agotada)</option>
                                                    @else                                                
                                                        <option value="{{$tallas[$i]."_".$talla_precio}}" onchange="talla_function(<?php echo $talla_precio ?>)"><?php echo $tallas[$i]; ?> </option>
                                                        @php  $talla_precio+=$data['product']->price_talla; @endphp
                                                    @endif
                                                @endfor
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        Color
                                    </div>

                                    <div class="size-204 respon6-next">
                                        <div class="rs1-select2 bor8 bg0">
                                            <select class="js-select2" name="color">
                                                <option disabled>Selecciona un color</option>
                                                <?php
                                                    $colores=explode(',', $data['product']->colores);
                                                    $count=count($colores);
                                                 for ($i=0; $i <$count ; $i++) { ?>
                                                    <option value="<?php echo $colores[$i]; ?>"><?php echo $colores[$i]; ?></option>
                                                <?php } ?>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        Tipo de Tela
                                    </div>

                                    <div class="size-204 respon6-next">
                                        <div class="row">
                                            @php
                                                $num=0;
                                                $value_tel="";
                                                $price_tel="";
                                            @endphp

                                            @if(!empty($data['subcategoria']))
                                                @foreach ($data['subcategoria'] as $key)
                                                    @if($num==0)
                                                        @php $value_tel=$key->idsubcategory;$price_tel=$key->price;$num+=1; @endphp
                                                    @endif
                                            
                                                    <div class="col-6 col-sm-4  mt-3" style="margin: 0;padding:0 .3rem">
                                                        <div class="tela" id="tela{{$key->idsubcategory}}">
                                                            <img src="{{asset('img/'.$key->img.'')}}" style="width: 100%;cursor: pointer;" onclick="tela_function(<?php echo $key->idsubcategory ?>,<?php echo $key->price ?>)">
                                                        <a href='#' data-toggle='modal' data-target='#update<?php echo $key->idsubcategory; ?>' class='btn btn-info'style="width: 100%;border-radius: 0;color: #fff"><i class="fa fa-info-circle"></i> Ver </a>
                                                        <center><p style="font-size: .7rem"><b><?php echo $key->name ?></b></p></center>

                                                        
                                                        </div>
                                                    </div>
                                                    @include('products.modal')
                                                @endforeach
                                            @else
                                                <div class="d-none col-6 col-sm-6  mt-3">
                                                    <div class="tela" id="tela0">
                                                        <img  onclick="tela_function(0,0)">
                                                    </div>
                                                </div>
                                            @endif
                                            <input type="hidden" name="tela" id="tela" value="">
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden"  name="cantidad"  value="0" id="cantidad_cart">

                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-204 flex-w flex-m respon6-next">
                                        <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 fa fa-minus"></i>
                                            </div>

                                            <input class="mtext-104 cl3 txt-center num-product" type="number" value="1">

                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 fa fa-plus"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" type="submit" style="display: none" id="cart_button_disabled">
                                                Agregar al Carrito
                                            </button>
                                            <a class="flex-c-m stext-101 cl0 size-101 bg3 bor1 hov-btn2 p-lr-15 trans-04 " href ="https://api.whatsapp.com/send?phone={{$data['company']['whatsapp']}}&text=Buen día, estoy interesado" title="Whatsapp " target="_blank">
                                                Consultar Stock
                                            </a>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </form>
                        <!--  -->
                        <div class="stext-109 ">
                            <hr>
                            <p>El envío de los pedidos se <b>coordinará con el cliente</b> y se realizará en un plazo de <b>2 a 15 días</b> (a excepción de los fines de semana y feriados) de acuerdo a las condiciones del pedido podrán ser más.</p><br>
                        <!--     <p>El envío de los pedidos <b>para provincia</b> se <b>coordinará con el cliente</b> y se realizará en un plazo de <b>5 a 20 días</b> (a excepción de los fines de semana y feriados) de acuerdo a las condiciones del pedido podrán ser más, además dependerá del proveedor utlilizado.</p><br> -->
                        </div>
                   
                    @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-relate-product bg0 p-t-45 ">
        <div class="container d-none d-sm-block">
            <div class="p-b-45">
                <h3 class="ltext-106 cl5 txt-center">
                   Productos Relacionados
                </h3>
            </div>

             <div class="row isotope-grid ">
                @foreach ($data['product_related'] as $key)
                    @include('layouts.partials.product')
                @endforeach
            </div>
        </div>

        <div class="container d-block d-sm-none">
         <div class="p-b-10 text-center">
            <h4 class="ltext-106 cl5 "><b>Productos Relacionados</b></h4><hr>
         </div>
         
          <div class="row">
            <div class="col-12">
              <div class="owl-carousel owl-theme owl-loaded owl-drag">
                @foreach ($data['product_related'] as $key)
                    @include('layouts.partials.product-responsive')
                @endforeach
              </div>
            </div>
         </div>
      </div>
    </section>

@endsection

@section('scripts')
    <script>
        tela_function(0,0);
    </script>
    @if(!empty($data['subcategoria']))
        @if($data['product']->status=='agotado' && $data['product']->agotado>date('Y-m-d'))
        @else 
            <script>
                tela_function(<?php echo $value_tel; ?>,<?php echo $price_tel; ?>);
            </script>
        @endif
    @endif

@endsection