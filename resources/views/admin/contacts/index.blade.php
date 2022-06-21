@extends('admin.layouts.template')
@section('title', 'Contacto - Administrador')
@section('title')
   <title>Contacto - Administrador</title>
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
            <h3>Direcciones </h3>
        </div>
    </div>
    <div class='clearfix'></div>
    <div class='row'>
        <div class='col-md-12 col-sm-12 ' >
          <div class='x_panel'>
            <div class='x_title'>
              <h2>Formulario: <small> Sección</small></h2>
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
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Celular</th>
                                    <th>Dirección</th>
                                    <th>Acciones</th>
                                </tr>
                              </thead>

                            <tbody >
                            <?php foreach ($data['model'] as $key ) {?>
                                    <td ><?php echo $key->email; ?></td>
                                    <td ><?php echo $key->phone; ?></td>
                                    <td ><?php echo $key->mobile; ?></td>
                                    <td ><?php echo $key->direction; ?></td>
                                    <td>
                                      <a href='#' data-toggle='modal' data-target='#update<?php echo $key->id; ?>' class='btn btn-info'><i class='fa  fa-edit'></i> </a>
                                      <a href='#' data-toggle='modal' data-target='#delete<?php echo $key->id; ?>' class='btn btn-danger'><i class='fa  fa-minus-square'></i> </a>
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
@include('admin/contacts/modal')

@foreach ($data['model'] as $key)  
@include('admin/contacts/update')
@endforeach

@endsection

@section('scripts')
<script src="{{asset('admin/js/route/products.js')}}"></script>
<script src="{{asset('admin/vendors/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('admin/js/edit.js')}}"></script>    
@endsection
