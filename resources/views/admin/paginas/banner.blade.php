@extends('admin.layouts.template')

@section('title')
   <title>Banner de Inicio - Administrador</title>
   <meta name="description " content="Administrador">
   <meta property="og:type" content="website">
   <meta name="author" content="Alta Moda">
   <meta name="robots" content="nofollow,noodp">
@endsection 

@section('content')
<link href="{{asset('admin/vendors/bootstrap/dist/css/select.css')}}" rel="stylesheet">

<div class='right_col' role='main'>
  <div>
    <div class='page-title'>
        <div class='title_left'>
          <h3>Banner Inicio </h3>
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
            <div class="row">
            <form  method="post" role="form" action="{{route('adminBannerPost')}}" enctype="multipart/form-data">
              @csrf  
              <div class="col-md-12">
                </div>
                <div class="col-md-4 col-sm-4">
                  <img class="img-responsive img-users" src="{{ asset('img/' .$data['home']['banner1'] . '')}}" >
                    <input type="file" id="banner1" name="banner1"  class="form-control" ><br>
                    <label>Producto 1</label>
                    <select class="form-control selectpicker" name="producto1" data-live-search="true" required>
                      <?php foreach ($data['products'] as $key ) {
                        if($key->idproducts==$data['product1']->idproducts){?>
                          <option value='<?php echo $key->idproducts; ?>_<?php echo $key->name; ?>' selected><?php echo $key->name; ?></option>
                        <?php }else{ ?>
                          <option value='<?php echo $key->idproducts; ?>_<?php echo $key->name; ?>'><?php echo $key->name; ?></option>
                      <?php } } ?>
                    </select>
                </div>
                <div class="col-md-4 col-sm-4 ">
                  <img class="img-responsive img-users" src="{{ asset('img/' .$data['home']['banner2'] . '')}}">
                    <input type="file" id="banner2" name="banner2"  class="form-control" ><br>
                    <label>Producto 1</label>
                    <select class="form-control selectpicker" name="producto2" data-live-search="true" required>
                      <?php foreach ($data['products'] as $key ) {
                        if($key->idproducts==$data['product2']->idproducts){?>
                          <option value='<?php echo $key->idproducts; ?>_<?php echo $key->name; ?>' selected><?php echo $key->name; ?></option>
                        <?php }else{ ?>
                          <option value='<?php echo $key->idproducts; ?>_<?php echo $key->name; ?>'><?php echo $key->name; ?></option>
                      <?php } } ?>
                    </select>
                </div>
                <div class="col-md-4 col-sm-4 ">
                  <img class="img-responsive img-users" src="{{ asset('img/' .$data['home']['banner3'] . '')}}">
                    <input type="file" id="banner3" name="banner3"  class="form-control" ><br>
                    <label>Producto 1</label>
                    <select class="form-control selectpicker" name="producto3" data-live-search="true" required>
                      <?php foreach ($data['products'] as $key ) {
                        if($key->idproducts==$data['product3']->idproducts){?>
                          <option value='<?php echo $key->idproducts; ?>_<?php echo $key->name; ?>' selected><?php echo $key->name; ?></option>
                        <?php }else{ ?>
                          <option value='<?php echo $key->idproducts; ?>_<?php echo $key->name; ?>'><?php echo $key->name; ?></option>
                      <?php } } ?>
                    </select>
                </div>

         
                 <div class="col-md-12 col-sm-12 ">
                  <hr>
                  <center><button type='submit' class='btn btn-success'>Guardar</button></center>
                </div>
              </form>
              </div>
          </div>       	
        </div>
      </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
@endsection