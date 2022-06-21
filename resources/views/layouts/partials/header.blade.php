<!-- Header -->
<header class="header-v3">
    <!-- Header desktop -->
    <div class="container-menu-desktop trans-03" style="background: #222">
      <div class="wrap-menu-desktop" style="background: #222">
        <nav class="limiter-menu-desktop p-l-45">
          
          <!-- Logo desktop -->   
            <a href="{{route('home.index')}}/" class="logo">
              <img src="{{ asset('img/alta-moda.svg')}}" alt="Altamoda logo">
            </a>

          <!-- Menu desktop -->
          <div class="menu-desktop">
            <ul class="main-menu">
              <li>
              <a href="{{route('product.altamoda')}}/" class="{{request()->routeis('product.altamoda')? 'active':''}}">Altamoda</a>

              </li>

              <li>
                <a href="{{route('product.reyblue')}}/" class="{{request()->routeis('product.reyblue')? 'active':''}}">Rey Blue</a>
    
              </li>
               <li>
                <a href="javascript:void()" class="{{request()->routeis('product.show')? 'active':''}}">Categorías</a>
                <ul class="sub-menu">
                  @foreach ($data['categories'] as $key)
                    <li><a href="{{route('product.show',$key)}}/" style="text-transform: uppercase;">{{$key->name}}</a></li>
                  @endforeach
                </ul> 
              </li>
              <li>
                <a href="javascript:void()" class="{{request()->routeis('product.index')? 'active':''}}">Para</a>
                <ul class="sub-menu">
                    <li><a href="{{route('product.index')}}?query=&genero=caballero" style="text-transform: uppercase;">Caballeros</a></li>
                    <li><a href="{{route('product.index')}}?query=&genero=dama" style="text-transform: uppercase;">Damas</a></li>
                    <li><a href="{{route('product.index')}}?query=&genero=niño" style="text-transform: uppercase;">Niños</a></li>
                    <li><a href="{{route('product.index')}}?query=&genero=niña" style="text-transform: uppercase;">Niñas</a></li>
                    <li><a href="{{route('product.index')}}?query=&genero=unise" style="text-transform: uppercase;">Unisex</a></li>
                </ul> 
              </li>
              <li>
                <a href="{{route('contact.index')}}/" class="{{request()->routeis('contact.index')? 'active':''}}">Contacto</a>
              </li>
            </ul>
          </div>  

          <!-- Icon header -->
          <div class="wrap-icon-header flex-w flex-r-m h-full">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 ">
              <a href="{{route('mayorista.index')}}/" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                ¿Eres Mayorista?
              </a>
            </div>      
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
              <i class="fa fa-search" style="color: #fff"></i>
            </div>         
            <div class="flex-c-m h-full p-r-25 bor6">
              <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" id="header_cart_count" data-notify="
                  @php 
                  $count=0; 
                  if(!empty(session()->get('cart'))){
                    foreach (session()->get('cart') as $key) { if($key['cantidad']>0){$count+=1;}}
                    echo $count; 
                  }else{
                    echo '0';
                  } 
                  @endphp
                ">
                <i class="fa fa-shopping-cart "></i>
              </div>
            </div>
              
            <div class="flex-c-m h-full p-lr-19">
              <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </div> 
            </div>
          </div>
        </nav>
      </div>  
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
      <!-- Logo moblie -->    
      <a href="{{route('home.index')}}" class="logo">
            <img src="{{ asset('img/alta-moda-1.svg')}}" alt="Altamoda logo Movil">
      </a>

      <!-- Icon header -->
      <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15" >
        <div class="flex-c-m h-full p-r-5">
          <div id="header_cart_count_mobile" class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="
              @php 
              $count=0; 
              if(!empty(session()->get('cart'))){
                foreach (session()->get('cart') as $key) { if($key['cantidad']>0){$count+=1;}}
                echo $count; 
              }else{
                echo '0';
              } 
              @endphp
              ">

            <i class="fa fa-shopping-cart "></i>
          </div>
        </div>
      </div>

      <!-- Button show menu -->
      <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
        <span class="hamburger-box">
          <i class="fa fa-bars" aria-hidden="true" style="font-size:2.2rem "></i>
        </span>
      </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
      <ul class="main-menu-m">
        <li>
          <a href="{{route('product.altamoda')}}/">Alta moda</a>
        </li>
        <li>
          <a href="{{route('product.reyblue')}}/">Rey Blue</a>
        </li>
        <li>
          <span class="arrow-main-menu-m"  aria-hidden="true">
            Categorías
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>

         <ul class="sub-menu-m">
          <?php foreach ($data['categories'] as $key) { ?>
            <li><a href="{{route('product.show',$key)}}/" style="text-transform: uppercase;"><?php echo $key['name'] ?></a></li>
          <?php } ?>
        </ul> 
        </li>
        <li>
          <span class="arrow-main-menu-m"  aria-hidden="true">
            Para
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
         <ul class="sub-menu-m">
            <li><a href="{{route('product.index')}}/?query=&genero=caballero" style="text-transform: uppercase;">Caballeros</a></li>
                    <li><a href="{{route('product.index')}}/?query=&genero=dama" style="text-transform: uppercase;">Damas</a></li>
                    <li><a href="{{route('product.index')}}/?query=&genero=niño" style="text-transform: uppercase;">Niños</a></li>
                    <li><a href="{{route('product.index')}}/?query=&genero=niña" style="text-transform: uppercase;">Niñas</a></li>
                    <li><a href="{{route('product.index')}}/?query=&genero=unise" style="text-transform: uppercase;">Unisex</a></li>
        </ul> 
          
        </li>
        <li>
          <a href="{{route('contact.index')}}/">Contacto</a>
        </li>
        @if(session()->has('cliente_alta_moda'))
        <div  id="iniciar_sesion_info" class="sidebar-content w-full p-lr-65 js-pscroll text-white">
          <span>Bienvenido, {{session()->get('cliente_alta_moda')['nombre']}}</span><br><br>
        </div>
        <li><a href="{{route('perfil.index')}}/">Pedidos</a></li>
        <li><a href="{{route('perfil.edit',session()->get('cliente_alta_moda')['nombre'])}}/">Perfil</a></li>
        <li><a href="{{route('perfil.show',session()->get('cliente_alta_moda')['nombre'])}}/">Seguridad</a></li>
        <form action="{{route('login.destroy', session()->get('cliente_alta_moda')['id'])}}/" method="post">
              @csrf
              @method('delete')
              <button class="btn btn-link">
                  Cerrar Sesión
              </button>
            </form>
       @else
       <li><a href="{{route('login.index')}}/">Click para Iniciar Sesión</a></li>
        <li><a href="{{route('registro.index')}}/">Click para Registrarse</a></li>
        
       @endif
      </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
      <button class="flex-c-m btn-hide-modal-search trans-04">
        <i class="fa fa-close"></i>
      </button>

      <form class="container-search-header" action="{{route('product.index')}}/" method="get">
        <div class="wrap-search-header" style="display: flex;">
          <input class="plh0" type="text" name="buscar" placeholder="Buscar...">
          <button class="flex-c-m trans-04">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </form>
    </div>
  </header>




  

  <!-- Sidebar -->
  <aside class="wrap-sidebar js-sidebar">
   <div class="s-full js-hide-sidebar"></div>
 
    <div class="sidebar flex-col-l p-t-22 p-b-25">
       <div class="flex-r w-full p-b-30 p-r-27">
        <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
          <i class="fa fa-close"></i>
        </div>
      </div>
      @if(session()->has('cliente_alta_moda'))
      <div  id="iniciar_sesion_info" class="sidebar-content w-full p-lr-65 js-pscroll">
        <span>Bienvenido, {{session()->get('cliente_alta_moda')['nombre']}}</span><br><br>
          <a href="{{route('perfil.index')}}/">
              <span class="mtext-101 cl5">Pedidos</span>
            </a><hr>
          <a href="{{route('perfil.edit',session()->get('cliente_alta_moda')['nombre'])}}/">
             <span class="mtext-101 cl5">Perfil</span>
            </a><hr>
            <a href="{{route('perfil.show',session()->get('cliente_alta_moda')['nombre'])}}/">
              <span class="mtext-101 cl5">Seguridad</span>
             </a><hr>
            <form action="{{route('login.destroy', session()->get('cliente_alta_moda')['id'])}}/" method="post">
              @csrf
              @method('delete')
              <button class="btn btn-link">
                  <span class="mtext-101 cl5">Cerrar Sesión</span>
              </button>
            </form>
        </div>
      @else
          <div  id="iniciar_sesion_info" class="sidebar-content w-full p-lr-65 js-pscroll">
            <a href="{{route('login.index')}}/">
              <span class="mtext-101 cl5">Click para Iniciar Sesión</span>
            </a><hr>
            <a href="{{route('registro.index')}}/">
              <span class="mtext-101 cl5">Click para Registrarse</span>
            </a>
          </div>
        @endif
    </div> 
  </aside>

@include('layouts/partials/cart')
<div class="d-block d-sm-none">
  <a href="{{route('mayorista.index')}}/" 
  class=" flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04 ">
    ¿Eres Mayorista?
  </a>
</div>