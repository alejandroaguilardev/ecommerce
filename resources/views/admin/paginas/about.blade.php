@extends('admin.layouts.template')
@section('title')

   <title>Nosotros - Administrador</title>
   <meta name="description " content="Administrador">
   <meta property="og:type" content="website">
   <meta name="author" content="Alta Moda">
   <meta name="robots" content="nofollow,noodp">
@endsection 

@section('content')

<div class='right_col' role='main'>
  <div>
    <div class='page-title'>
        <div class='title_left'>
          <h3><?php echo $data['routeTitle'] ?> </h3>
        </div>
    </div>
    <div class='clearfix'></div>
    <div class='row'>
      <div class='col-md-12 col-sm-12 '>
        <div class='x_panel'>
          <div class='x_title'>
            <h2>Sección: <small> Editar</small></h2>
            <ul class='nav navbar-right panel_toolbox'>
              <li><a class='collapse-link'><i class='fa fa-chevron-up'></i></a>
              </li>
              <li><a class='close-link'><i class='fa fa-close'></i></a>
              </li>
            </ul>
            <div class='clearfix'></div>
          </div>
          <div class='x_content'>
            <form  method="post" name="about" role="form" action="{{route('adminAboutPost')}}">
              @csrf
                <div class="row mb-4">
                  <div class="col-md-6">
                    <h4>Nosotros</h4>
	                    <textarea class='form-control form-control-user' name='nosotros' id="new_description" ><?php echo $data['nosotros'] ?></textarea>
                  </div>
                  <div class="col-md-6">
                    <h4>Misión</h4>
                      <textarea class='form-control form-control-user' name='mision' id="update_description" ><?php echo $data['mision'] ?></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12"><hr></div>

                  <div class="col-md-6">
                    <h4>Terminos</h4>
	                    <textarea class='form-control form-control-user' rows="6" name='terminos' id="new_description1" style="height: 30rem;"><?php echo $data['terminos'] ?></textarea>
                  </div>
                  <div class="col-md-6">
                    <h4>Politicas de Privacidad</h4>
	                    <textarea class='form-control form-control-user' rows="6" name='politicas' id="update_description1" style="height: 30rem;"><?php echo $data['politicas'] ?></textarea>
                  </div>
                </div>
                <hr>

                <div class="row">
                  <div class="col-md-12"><hr></div>

                  <div class="col-md-6">
                    <h4>Envios</h4>
                      <textarea class='form-control form-control-user' rows="6" name='forma_envio' id="new_description2" style="height: 30rem;"><?php echo $data['forma_envio'] ?></textarea>
                  </div>
                  <div class="col-md-6">
                    <h4>Devoluciones</h4>
                      <textarea class='form-control form-control-user' rows="6" name='devoluciones' id="update_description2" style="height: 30rem;"><?php echo $data['devoluciones'] ?></textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12"><hr></div>

                  <div class="col-md-12">
                    <h4>Preguntas</h4>
                      <textarea class='form-control form-control-user' rows="6" name='preguntas' id="new_description3" style="height: 30rem;"><?php echo $data['preguntas'] ?></textarea>
                  </div>
                </div>
                <hr>
                <center><button type='submit' class='btn btn-success'>Guardar</button></center>
            </form>
          </div>       	
        </div>

      </div>
    </div>
</div>
    <!-- /page content -->


@endsection

@section('scripts')
<script src="{{asset('admin/vendors/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('admin/js/edit.js')}}"></script>    
@endsection