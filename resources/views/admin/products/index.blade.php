@extends('admin.layouts.template')

@section('title')
   <title>Productos - Administrador</title>
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
            <h3>Información de la Sub Categorías </h3>
        </div>
    </div>
    <div class='clearfix'></div>
    <div class='row'>
        <div class='col-md-12 col-sm-12 ' >
          <div class='x_panel'>
            <div class='x_title'>
              <h2>Lista de productos:<small> Visualiza las Productos activas y desactivadas del sitio.</small></h2>
              <ul class='nav navbar-right panel_toolbox'>
                  <li><a class='collapse-link'><i class='fa fa-chevron-up'></i></a>
                  </li>
                  <li><a class='close-link'><i class='fa fa-close'></i></a></li>
              </ul>
              <div class='clearfix'></div>
            </div>
            <div class='x_content'>
                     <div class='row'>
                          <div class='col-sm-12'>
                            <div id="alert"></div>    
                            <div class='card-box table-responsive'>
                           <div class='text-right mx-4'>
                  <a href='#' data-toggle='modal' data-target='.new' class='btn btn-primary'><i class='fa  fa-edit'></i> Agregar</a>
                </div>
                          <table id='datatable-buttons' class='table table-striped table-bordered table-full  td-acciones'>
                              <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Marca</th>
                                    <th>Precio</th>
                                    <th>Estado</th> 
                                    <th>Acciones</th>
                                </tr>
                              </thead>

                            <tbody >
                            <?php foreach ($data['model'] as $key ) {?>
                                  <td ><?php echo $key->name; ?></td>
                                  <td ><?php echo $key->category; ?></td>
                                  <td ><?php echo $key->type; ?></td>
                                  <td ><?php echo $key->price; ?></td>
                                  <?php if($key->status=='active'){ ?>
                                    <td class="alert alert-success"><b >ACTIVO</b></td>
                                    <?php }elseif($key->status=='agotado'){ ?>
                                    <td  class="alert alert-warning"><b>AGOTADO HASTA:<br><?php echo $key->agotado ?></b></td>
                                    <?php }else{ ?>
                                    <td class="alert alert-danger"><b >DESACTIVADO</b></td>
                                  <?php } ?>
                                    <td>
                                      <a href='#' data-toggle='modal' data-target='#update<?php echo $key->idproducts ; ?>' class='btn btn-info'><i class='fa  fa-edit'></i> </a>
                                      <a href='#' data-toggle='modal' data-target='#agotado<?php echo $key->idproducts; ?>' class='btn btn-warning'><i class='fa  fa-cubes'></i> </a>
                                      <a href='#' data-toggle='modal' data-target='#delete<?php echo $key->idproducts ; ?>' class='btn btn-danger'><i class='fa  fa-minus-square'></i> </a>
                                      </td>
                                </tr>

                            <?php } ?>
                            </tbody>
                          </table>
                      </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>



@include('admin.products.modal')
@endsection

@section('scripts')
<script src="{{asset('admin/vendors/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('admin/js/edit.js')}}"></script>    

@foreach ($data['model'] as $key)  
@include('admin.products.update')
@endforeach
@endsection
