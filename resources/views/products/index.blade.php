@extends('layouts.template')
@section('description','Catalogo online. Hermosas pijamas para Mujer, buenos precios, envío rápido, nadie te da más. Encuentralas aquí')
@section('keywords','pijamas,alta moda,rey blue,gamarra,lima,vestidos,diseños de ropa,diseño de pijama')
@section('title')
   <title>Los Mejores Vestidos y Pijamas Animadas - Alta Moda & Reyblue'</title>
   <meta name="description " content="Tenemos el producto que necesita ve todo nuestro Catalogo online, Encuentralas aquí">
   <meta name="keywords" content="pijamas,alta moda,rey blue,gamarra,lima,vestidos,diseños de ropa,diseño de pijama">
   <meta property="og:title" content="Alta Moda & Reyblue  Bienvenido a nuestra Tienda de ropa exclusiva">
   <meta property="og:type" content="website">
   <meta property="og:image" content="https://altamoda.pe/laravel/public/img/alta-moda.png">
   <meta property="og:url" content="https://altamoda.pe/todos-los-productos/">
   <meta property="og:description"  content="Tenemos el producto que necesita ve todo nuestro Catalogo online, Encuentralas aquí">
   <meta property="og:site_name" content="Alta Moda">
   <meta name="author" content="Alta Moda">
   <meta name="robots" content="INDEX,FOLLOW">
@endsection 


@section('content')
	<!-- Product -->
	<div class="bg0  p-b-140">
		<div class="m-t-140 d-none d-sm-block"></div>
		<div class="container">
		<form  method="get" >
			<div class="flex-w flex-sb-m p-b-52">

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filtrar
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Buscar
					</div>
					<?php if(isset($_GET['buscar']) && !empty($_GET['buscar'])){ ?>
						<div>
							<p style="margin-left: 1rem ">Ha Buscado: <?php echo $_GET['buscar'] ?> |</p>
						</div>
					<?php } ?>
					<?php if(isset($_GET['orden']) && !empty($_GET['orden'])){ ?>
						<div>
							<p style="margin-left: 1rem ">Ordenar por : <?php echo $_GET['orden'] ?> |</p>
						</div>
					<?php } ?>
					<?php if(isset($_GET['precio']) && !empty($_GET['precio'])){ ?>
						<div>
							<p style="margin-left: 1rem ">Precio desde : <?php echo $_GET['precio'] ?> |</p>
						</div>
					<?php } ?>
					<?php if(isset($_GET['color']) && !empty($_GET['color'])){ ?>
						<div>
							<p style="margin-left: 1rem ">Color: <?php echo $_GET['color'] ?> |</p>
						</div>
					<?php } ?>
				</div>
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>
							
					<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="buscar" placeholder="Buscar..." minlength="3" value="<?php if(isset($_GET['buscar'])) echo $_GET['buscar'];?>" >
					</div>	
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w  w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Ordernar 
							</div>

							<ul>
								<li class="p-b-6">
									<input type="radio" id="ultimos_agregados" name="orden" value="Últimos Agregados"  style="display: inline;">
									<label for="ultimos_agregados" class="filter-link stext-106 trans-04" style="display: inline;"> Últimos Agregados</label>
								</li>
								<li class="p-b-6">
									<input type="radio" id="menor" name="orden" value="menor"  style="display: inline;">
									<label for="menor" class="filter-link stext-106 trans-04" style="display: inline;"> Precio Menor</label>
								</li>

								<li class="p-b-6">
									<input type="radio" id="mayor" name="orden" value="mayor"  style="display: inline;">
									<label for="mayor" class="filter-link stext-106 trans-04" style="display: inline;"> Precio Mayor</label>
								</li>
							</ul>
						</div>
						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Para 
							</div>

							<ul>
								<li class="p-b-6">
									<input type="radio" id="caballero" name="genero" value="caballero"   style="display: inline;">
									<label for="caballero" class="filter-link stext-106 trans-04" style="display: inline;"> Caballero</label>
								</li>
								<li class="p-b-6">
									<input type="radio" id="dama" name="genero" value="dama"  style="display: inline;">
									<label for="dama" class="filter-link stext-106 trans-04" style="display: inline;"> Dama</label>
								</li>

								<li class="p-b-6">
									<input type="radio" id="boy" name="genero" value="niño"  style="display: inline;">
									<label for="boy" class="filter-link stext-106 trans-04" style="display: inline;"> Niño</label>
								</li>
								<li class="p-b-6">
									<input type="radio" id="girl" name="genero" value="niña"  style="display: inline;">
									<label for="girl" class="filter-link stext-106 trans-04" style="display: inline;"> Niña</label>
								</li>
								<li class="p-b-6">
									<input type="radio" id="unisex" name="genero" value="unisex"  style="display: inline;">
									<label for="unisex" class="filter-link stext-106 trans-04" style="display: inline;"> Unisex</label>
								</li>
							</ul>
						</div>
						
						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Price
							</div>

							<ul>
								<?php foreach ($data['prices'] as $key ) {?>
								<li class="p-b-6">
									<input type="radio" id="<?php echo $key['precio'] ?>" name="precio" value="<?php echo $key['value'] ?>"  style="display: inline;">
									<label for="<?php echo $key['precio'] ?>" class="filter-link stext-106 trans-04" style="display: inline;"> <?php echo $key['precio'] ?></label>
								</li>

								<?php } ?>
							</ul>
						</div>

						<div class="filter-col4 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>

							<ul>
							<?php foreach ($data['colors'] as $key ) {?>
								<li class="p-b-6">
									<input type="radio" id="<?php echo $key['color'] ?>" name="color" value="<?php echo $key['color'] ?>"  style="display: inline;">
									<label for="<?php echo $key['color'] ?>" class="filter-link stext-106 trans-04" style="display: inline;">
										<?php echo $key['color'] ?>
										<span class="fs-15 lh-12 m-r-6" style="color: <?php echo $key['value'] ?>;">
											<i class="zmdi zmdi-circle"></i>
										</span> 
								</label>
									

								</li>
							<?php } ?>

							</ul>
						</div>
					</div>
					<div class="col-12 p-r-15 p-b-27">
							<center><button type="submit" class="btn btn-danger"><i class="fa fa-search"></i> Filtrar Resultados</button></center>
						</div>
				</div>
			</div>
			</form>

			<div class="row isotope-grid">
                <?php foreach ($data['products'] as $key ) {  ?>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0 " >
                            <a href="{{route('product.show',[$key->cslug,$key->slug])}}/"><img src='{{asset("img/$key->img_1")}}' alt="<?php echo $key->name ?>" title="<?php echo $key->name ?>" ></a>

                            <a href="{{route('product.show',[$key->cslug,$key->slug])}}/" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                            Detalles
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                            <?php if($key->idtype==1){?>
                                <img src="{{asset('img/alta-moda2.png')}}" style="height: 1.5rem;margin-bottom: 1rem">
                            <?php }else{?>
                                <img src="{{asset('img/rey-blue2.png')}}" style="height: 1rem;margin-bottom: 1rem">
                            <?php } ?>
                            <a href="{{route('product.show',[$key->cslug,$key->slug])}}/" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                <?php echo $key->name ?>
                                <span style="font-size: .7rem;"> para:| 
                                <?php 
                                    $genero=explode(',', $key->genero );
                                    $count=count($genero);
                                    for ($i=0; $i < $count ; $i++) { 
                                    echo $genero[$i].' | ';
                                    }
                                    
                                ?>
                                
                                </span>
                            </a> 

                            <span class="stext-10 cl3">
							@if($key->status=='agotado' && $key->agotado>date('Y-m-d'))
								<span  style="color: #FF0000 ;"> <i>Producto Agotado</span><br>
							  @endif
							  @php $price=0; @endphp
				
							  @if(!empty($data['subcategorias']))
								@foreach ($data['subcategorias'] as $sub)
								  @php $price=0; @endphp
									@if($sub->idcategory==$key->idcategory)
									  @php $price=$sub->price+$key->price; @endphp
									@endif
								  @php break; @endphp
								@endforeach	
							  @endif
								
							  @if($price===0)				               
								@if($key->discount==0)
								  <span> <i>Desde : </i></span><br><span style="color: #FF0000 ;"><b> S/ <?php echo $key->price?>.00</b></span><br>
								@else
									<span> <i>Desde : </i></span><br><span style="color: #FF0000 ;"><b> S/ <?php echo $key->price?>.00</b></span><br>
									<span style="text-decoration: line-through;opacity: .5 ; margin: 1rem">S/ <?php echo $key->price+$key->discount ?>.00</span>
								@endif
							  @else
								@if($key->discount==0)
								  <span> <i>Desde : </i></span><br><span style="color: #FF0000 ;"><b> S/ <?php echo $price?>.00</b></span><br>
								@else
								  <span> <i>Desde : </i></span><br><span style="color: #FF0000 ;"><b> S/ <?php echo $price?>.00</b></span><br>
								  <span style="text-decoration: line-through;opacity: .5 ; margin: 1rem">S/ <?php echo $price+$key->discount ?>.00</span>
								@endif
							  @endif	

									
                            </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                            
                            </div>
                        </div>
                    </div>
                </div>
                <?php }  ?>
            </div>
            <div>
                {{ $data['products']->links("pagination::bootstrap-4") }}
            </div>
        </div>
	</div> 
@endsection