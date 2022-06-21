<div class="col-md-3 left_col"> 
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="{{route('adminHome')}}"  class="site_title"><i class="fa fa-gear"></i> <span>Admin Tols</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="{{asset('admin/img/users/user.png')}}" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Bienvenido,</span>
        <h2>{{session()->get('admin_alta_moda')['nombre']}}</h2>
        <p class="text-white">Rol: Administrador</p>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a href="{{route('adminHome')}}"><i class="fa fa-home"></i> Home</a></li>
          <li><a href="{{route('adminPedidos')}}"><i class="fa fa-cubes"></i> Pedidos</a></li>
          <li><a><i class="fa fa-edit"></i> Empresa <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('adminContacto.index')}}">Información de Contacto</a></li>
              <li><a href="{{route('adminRed')}}">Redes Sociales</a></li>
            </ul>
          </li>

          <li><a><i class="fa fa-bar-chart-o"></i> Productos/Servicios <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('adminCategorias.index')}}">Categorías</a></li>
              <li><a href="{{route('adminSubCategorias.index')}}">SubCategorías</a></li>
              <li><a href="{{route('adminProducts.index')}}">Producto/Servicio</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="menu_section">
        <h3>Apariencia</h3>
        <ul class="nav side-menu">
          
          <li><a><i class="fa fa-sitemap"></i> Páginas <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('adminBanner')}}">Inicio</a></li>
                <li><a href="{{route('adminAbout')}}">Nosotros</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu --> 

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Opciones">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Perfil">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Ayuda">
        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Salir" href="#">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>

<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>
      <nav class="nav navbar-nav">
      <ul class=" navbar-right">
        <li class="nav-item dropdown open" style="padding-left: 15px;">
          <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
            <img src="{{asset('admin/img/users/user.png')}}" alt="">{{session()->get('admin_alta_moda')['nombre']}}
          </a>
          <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
             <a class="dropdown-item"  href="{{route('adminLogout')}}"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a>
          </div>
        </li>

 
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->