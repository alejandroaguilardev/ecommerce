	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Tu Carrito
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="fa fa-times"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full" id="header_cart_list">

					@php $total_carrito=0; @endphp
					@if(!empty(session()->has('cart')))
						@foreach (session()->get('cart') as $cart)
							@if($cart['cantidad']>0)
								@php 
									$total_carrito+=$cart['precio']*intval($cart['cantidad']);
									$idcart=$cart['idproducto'].$cart['talla'].$cart['color'].$cart['tela_id'];
								@endphp	
								<li class="header-cart-item flex-w flex-t m-b-12">
									<form action="{{route('cart.destroy',$idcart)}}" method="post">
										@csrf
										@method('delete')
										<button>
											<div class="header-cart-item-img">
												<img src="{{asset('img/'.$cart['img'].'')}}" alt="<?php echo $cart['nombre'] ?>">
											</div>
										</button>
									</form>
									<div class="header-cart-item-txt p-t-8">
										<span style="font-size: .8rem;text-transform: capitalize;">T:<?php echo $cart['talla'] ?> / C:<?php echo $cart['color'] ?> / T: <?php echo $cart['tela'] ?></span>
										<a href="{{route('product.show',[$cart['cslug'],$cart['slug']])}}/" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
											<?php echo $cart['nombre'] ?>
											
										</a>

										<span class="header-cart-item-info">
											<?php echo intval($cart['cantidad']) ?> x s/ <?php echo $cart['precio'] ?>
										</span>
									</div>
								</li>
							@endif
						@endforeach
					@endif
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40 ">
						<span class="ltext-110 cl2">Total:</span>
						<span class="ltext-108 cl2"  id="header_cart_total" style="color:#FF0000">
							s/ {{$total_carrito}}
							@php $subtotal_carrito= round(intval($total_carrito) / ((18/100) + 1),2); @endphp
						</span>
						<a href="{{route('checkout.index')}}/" class="flex-c-m stext-101 cl0 size-107 bg1 bor2 hov-btn1 p-lr-15 trans-04 m-b-10 checkout_btn2">
							CheckOut
						</a><hr><br>
						<div class="text-center">
							<a href="{{route('cart.index')}}/" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10 carrito_btn2">
								Ver Carrito
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
