@extends('admin.layouts.template')

@section('title')
   <title>Categorias - Administrador</title>
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
            <h3>Información de la Categorías </h3>
        </div>
    </div>
    <div class='clearfix'></div>
    <div class='row'>
        <div class='col-md-12 col-sm-12 ' >
          <div class='x_panel'>
            <div class='x_title'>
              <h2>Lista de Categorías:<small> Visualiza las categorías activas y desactivadas del sitio.</small></h2>
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
                                    <th>Precio x Talla</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                              </thead>

                            <tbody >
                            <?php foreach ($data['model'] as $key ) {?>
                                    <td ><?php echo $key->name; ?></td>
                                    <td >S/ <?php echo $key->price_talla; ?></td>
                                    <?php if($key->status=='active'){ ?>
                                      <td ><b class="alert alert-success">ACTIVO</b></td>
                                      <?php }else{ ?>
                                      <td ><b class="alert alert-danger">DESACTIVADO</b></td>
                                  <?php } ?>
                                    <td>
                                      <a href='#' data-toggle='modal' data-target='#update<?php echo $key->idcategory; ?>' class='btn btn-info'><i class='fa  fa-edit'></i> </a>
                                      <a href='#' data-toggle='modal' data-target='#delete<?php echo $key->idcategory; ?>' class='btn btn-danger'><i class='fa  fa-minus-square'></i> </a>
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
@include('admin.products.categorias.modal')

@foreach ($data['model'] as $key)  
@include('admin.products.categorias.update')
@endforeach

@endsection


