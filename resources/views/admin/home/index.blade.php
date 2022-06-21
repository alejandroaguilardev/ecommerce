@extends('admin.layouts.template')

@section('title')
   <title>Home - Administrador</title>
   <meta name="description " content="Administrador">
   <meta property="og:type" content="website">
   <meta name="author" content="Alta Moda">
   <meta name="robots" content="nofollow,noodp">
@endsection 

@section('content')
    
<!--page content -->
<div class="right_col" role="main">

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="dashboard_graph">

   

          <div class="col-md-6 col-sm-6  ">
            <div class="x_panel">
              <div class="x_title">
                <h2>Instrucciones <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <ul class="list-unstyled timeline">
                  <li>
                    <div class="block">
                      <div class="tags">
                        <a href="javascript:void()" class="tag">
                          <span>Pre N°1</span>
                        </a>
                      </div>
                      <div class="block_content">
                        <h2 class="title">
                          <a>¿Para que me sirve este sistema?</a>
                                    </h2>
                        <div class="byline">
                        </div>
                        <p class="excerpt">Puedes Administrar datos fundamentales a traves de este panel, mediante el panel que se encuentra a tu izquierda de este texto. Por recomendación, esta diseñado para ofrecer una mejor experiencia en un equipo de escritorio</a>.
                        </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block">
                      <div class="tags">
                        <a href="javascript:void()" class="tag">
                          <span>Pre N°2</span>
                        </a>
                      </div>
                      <div class="block_content">
                        <h2 class="title">
                                        <a>¿Que puedo administrar Acá?</a>
                                    </h2>
                        <div class="byline">
                        </div>
                        <p class="excerpt">Puedes administrar secciones como:<br><br>
                          Empresas: información de contacto y redes sociales.<br>
                          Productos/Servicios: Los productos ofrecidos en la web. <br>
                          Seo: metadata como descripción de la página y palabras claves.<br>
                          Usuarios: Que pueden acceder a este administrador.
                        </p>
                      </div>
                    </div>
                  </li>
                
                </ul>

              </div>
            </div>
          </div>
          <div class="bs-example col-sm-6" data-example-id="simple-jumbotron">
              <div class="jumbotron">
              <h1>Buen día, {{session()->get('admin_alta_moda')['nombre']}}!</h1>
                <p>Bienvenido al panel administrativo de la página web, desde este panel tienes el control de editar, agregar y eliminar aspectos importantes del sitio web. Cualquier consulta o problema debera ponerse en contacto con el <a href="mail:alexaguilar281@gmail.com">webmaster</a>.</p>
              </div>
            </div>



    </div>
  </div>
</div>

@endsection