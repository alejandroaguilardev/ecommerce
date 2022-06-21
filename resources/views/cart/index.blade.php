@extends('layouts.template')
@section('title')
   <title>Carrito de Compras - Altamoda & Reyblue</title>
   <meta name="description " content="Carrito de compras en Altamoda">
   <meta name="keywords" content="pijamas,alta moda,rey blue,gamarra,lima,vestidos,diseños de ropa,diseño de pijama">
   <meta property="og:title" content="Alta Moda & Reyblue  Bienvenido a nuestra Tienda de ropa exclusiva">
   <meta property="og:type" content="website">
   <meta property="og:image" content="https://altamoda.pe/laravel/public/img/alta-moda.png">
   <meta property="og:url" content="https://altamoda.pe/carrito">
   <meta property="og:description"  content="Carrito de compras en Altamoda">
   <meta property="og:site_name" content="Alta Moda">
   <meta name="author" content="Alta Moda">
   <meta name="robots" content="nofollow,noodp">
@endsection 
@section('content')
	<!-- breadcrumb -->
    <div class="container p-t-100">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="{{route('home.index')}}" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Carrito de Compras
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
	<div class="bg0 p-t-75 p-b-85">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 m-b-50">
					<div class=" ">
						<div class="wrap-table-shopping-cart table-responsive">
							<table class="table-shopping-cart table_carrrito" >
								<tr class="table_head">
									<th class="column-1"></th>
									<th class="column-2">Producto</th>
									<th class="column-3">Precio</th>
									<th class="column-4">Cantidad</th>
									<th class="column-5">Total</th>
									<th class="column-5">Actualizar</th>
                                </tr>
                                @php $total_carrito=0; @endphp
                                @if(!empty(session()->has('cart')))
                                    @foreach (session()->get('cart') as $cart2)
                                        @if($cart2['cantidad']>0)
                                            @php 
                                            $cart_product=$cart2['idproducto']."".$cart2['talla']."".$cart2['color']."".$cart2['tela_id']; 
                                            $total_carrito+=$cart2['precio']*intval($cart2['cantidad']);
                                            @endphp
                                            <tr class="table_row table-bordered">
                                                <td class="column-1">
                                                    <form action="{{route('cart.destroy',$cart_product)}}/" method="post">
                                                        <button>
                                                            <div class="how-itemcart1">
                                                                <img src="{{asset('img/'.$cart2['img'].'')}}" alt="{{$cart2['nombre']}}">
                                                            </div>
                                                        </button>
                                                    </form>
                                                </td>
                                                <td class="column-2 "><a  href="{{route('product.show',$cart_product)}}/" style="color: #222"><?php echo $cart2['nombre'] ?></a></td>
                                                <td class="column-3">s/ <b><?php echo $cart2['precio'] ?></b></td>

                                                <form action="{{route('cart.update',$cart_product)}}" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <td class="column-4" style="width: 1%">
                                                            <input type="number"  class="form-control" name="cantidad" value="{{$cart2['cantidad']}}" style="width: 5rem;">
                                                        
                                                    </td>
                                                    <td class="column-5">
                                                        s/ <b style="color:red"><?php echo intval($cart2['cantidad'])*$cart2['precio'] ?></b>
                                                    </td>
                                                    <td class="column-6">
                                                        <center>
                                                            <button type="submit">
                                                                <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10" style="padding:.1rem;margin: 0.1rem;min-width: 3rem;max-width: 5rem;	">
                                                                    <i class="fa fa-refresh"></i> 
                                                                </div>
                                                            </button>
                                                        </center>
                                                    </td>
                                                </form>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								<!-- <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
									
								<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
									Apply coupon
								</div> -->
							</div>

							
						</div>
					</div>
				</div>

				<div class=" col-md-3  m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40  m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Total en Carrito
						</h4>

						{{-- <div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-109 cl2">
                                    s/ 							
                                    @php $subtotal_carrito= round(intval($total_carrito) / ((18/100) + 1),2); @endphp
                                    {{$subtotal_carrito}}
								</span>
							</div>
						</div> --}}

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="stext-110 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-109 cl2" style="color:red">
									s/ {{$total_carrito}}.00
								</span>
							</div>
						</div>

                        <a href="{{route('checkout.index')}}"class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceder 
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
		
@endsection