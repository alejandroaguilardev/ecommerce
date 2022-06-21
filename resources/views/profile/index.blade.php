@extends('layouts.template')
@section('title')
   <title>Pedidos - Altamoda & Reyblue</title>
   <meta name="description " content="Perfil mis pedidos en Altamoda">
   <meta name="keywords" content="pijamas,alta moda,rey blue,gamarra,lima,vestidos,diseños de ropa,diseño de pijama">
   <meta property="og:title" content="Alta Moda & Reyblue  Bienvenido a nuestra Tienda de ropa exclusiva">
   <meta property="og:type" content="website">
   <meta property="og:image" content="https://altamoda.pe/laravel/public/img/alta-moda.png">
   <meta property="og:description"  content="Perfil mis pedidos en Altamoda">
   <meta property="og:site_name" content="Alta Moda">
   <meta name="author" content="Alta Moda">
   <meta name="robots" content="nofollow,noodp">
@endsection 
@section('content')
  <!-- Bootstrap -->
  <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <!-- iCheck -->
  <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

 
  <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
 <link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">



  <!-- Content page -->
  <section class="bg0 p-t-75">
      <div class="container p-t-75 ">
          <div class="row p-b-148">
              <div class="col-md-12 col-lg-12">
                  <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                      <h3 class="mtext-111 cl2 p-b-16 text-center">
                        Pedidos Realizados
                      </h3>
                      
                   </div>
                  <div class='card-box table-responsive'>

                      <table id='datatable-buttons' class='table table-striped table-bordered table-full  td-acciones'>
                          <thead>
                            <tr>
                                <th>Departamento</th>
                                <th>Provincia</th>
                                <th>Distrito</th>
                                <th>Referencia</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th>Método</th>
                                <th>Info</th>
                            </tr>
                          </thead>

                        <tbody >
                       @foreach ($data['pedidos'] as $key)
                          <tr>
                                <td ><?php echo $key['departamento']; ?></td>
                                <td ><?php echo $key['provincia']; ?></td>
                                <td ><?php echo $key['distrito']; ?></td>
                                <td ><?php echo $key['referencia']; ?></td>
                                <td ><?php echo $key['created_at']; ?></td>
                                @if($key['status']=="despachado")
                                    <td ><b class="alert alert-success">{{$key['status']}}</b></td>
                                @elseif($key['metodo']=="cancelado")
                                <td ><b class="alert alert-danger">{{$key['status']}}</b></td>

                                @else
                                    <td ><b class="alert alert-warning">{{$key['status']}}</b></td>
                                @endif
                                @if($key['metodo']=="online")
                                  <td class="btn-primary"><a href='#' data-toggle='modal' data-target='.infoC_<?php echo $key['id']; ?>'>
                                          <i class='fa fa-info-circle'  style="color: #fff;width: 100%;height: 100%;text-align: center;">Pago en Línea </i>  
                                        </a>
                                  </td>
                                 @elseif($key['metodo']=="deposito")
                                    <td class="btn-primary" ><a href='#' data-toggle='modal' data-target='.infoC_<?php echo $key['id']; ?>'>
                                          <i class='fa fa-info-circle'  style="color: #fff;width: 100%;height: 100%;text-align: center;"> Depósito</i>  
                                        </a>
                                  </td>
                                  @else 
                                  <td class="btn-primary" ><a href='#' data-toggle='modal' data-target='.infoC_<?php echo $key['id']; ?>'>
                                    <i class='fa fa-info-circle'  style="color: #fff;width: 100%;height: 100%;text-align: center;"> Yape</i>  
                                  </a>
                            </td>
                                 @endif
                                <td  class="btn-info">
                                      <a href='#' data-toggle='modal' data-target='.info_<?php echo $key['id']; ?>'>
                                        <i class='fa  fa-info'  style="color: #fff;width: 100%;height: 100%;text-align: center;"> Info</i> 
                                      </a>
                                  </td>
                            </tr>
                        @endforeach
                        </tbody>
                      </table>
                  </div>
                  </div>
              </div>
         </div>
     </div>
  </section>  
<style>
    @media (max-width:450px){
    .tab-pedidos{

        width:320px;display:block;overflow-x:auto; "
    }
    }
</style>
@foreach ($data['pedidos'] as $key )
<div class='modal fade info_<?php echo $key['id']; ?>' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
<div class='modal-dialog modal-lg modal-dialog-centered'>
    <div class='modal-content'>
        <div class='modal-header  delete-modal' style="background: #7BBEEA">
            <center>
              <h5 class='modal-title text-white' id='exampleModalLongTitle' style="font-weight: bold">Pedido N°<?php echo $key['id']; ?></h5>
            </center>
            <button type='button' class='close text-white' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        <div class='modal-body'>
            <div class='row'>
                <div class='col-md-12 modal_description'>
                  <div class='card-box table-responsive'>
                      <table class='table table-striped table-bordered table-full  td-acciones tab-pedidos' >
                          <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Color</th>
                                <th>Precio</th>
                                <th>Talla</th>
                                <th>Tela</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody >
                            @php $total=0; @endphp
                            @foreach ($data['producto_pedidos'] as $key1 )
                                @if($key1->idcomprobante==$key['id'])
                                    <tr>
                                        <td ><?php echo $key1->nombre; ?></td>
                                        <td ><?php echo $key1->color; ?></td>
                                        <td ><?php echo $key1->precio; ?></td>
                                        <td ><?php echo $key1->talla;?></td>
                                        <td ><?php echo $key1->tela;?></td>
                                        <td ><?php echo $key1->cantidad; ?></td>

                                        <td ><?php echo $key1->precio*$key1->cantidad; ?></td>
                                    </tr>
                                    @php $total+=$key1->precio*$key1->cantidad; @endphp
                                @endif
                        @endforeach
                         <tr>
                              <td></td><td></td><td></td><td></td><td></td>
                                <td >Pedido:</td>
                                <td ><b><?php echo $total; ?></b></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
            </div>
        </div>
        <div class='modal-footer'>
            <a href="https://api.whatsapp.com/send?phone={{$data['company']['whatsapp']}}&text=hola, acabo de realizar un pedido a nombre de {{session()->get('cliente_alta_moda')['nombre']}} {{session()->get('cliente_alta_moda')['apellido']}}"  target="_blank"class="flex-c-m stext-101 cl0 size-116 bg3  hov-btn3 p-lr-15 trans-04 pointer">Contáctanos en Whatsapp</a><hr>
        </div>
    </div>
</div>
</div>

<div class='modal fade infoC_<?php echo $key['id']; ?>' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
<div class='modal-dialog modal-lg modal-dialog-centered'>
    <div class='modal-content'>
        <div class='modal-header  delete-modal' style="background: #7BBEEA">
            <center>
              <h5 class='modal-title text-white' id='exampleModalLongTitle' style="font-weight: bold">Pedido N°<?php echo $key['id']; ?></h5>
            </center>
            <button type='button' class='close text-white' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        <div class='modal-body'>
            <div class='row'>
                <div class='col-md-12 modal_description'>
                    @if($key['metodo']=="online")
                        <h5>Token del Pedido:</h5><hr>
                        <p><b><?php echo $key['token'] ?></b></p>
                    @elseif($key['metodo']=="deposito")
                        <img src="{{asset('img/'.$key['comprobante'].'')}}" onerror="this.alt='No inlcuyo el deposito'" class="img-responsive img-fluid" style="width: 100%">
                    @else
                      <img src="{{asset('img/'.$key['comprobante'].'')}}" onerror="this.alt='No inlcuyo el deposito'" class="img-responsive img-fluid" style="width: 100%">
                    @endif
                </div>
            </div>
        </div>
        <div class='modal-footer'>
            <a href="https://api.whatsapp.com/send?phone={{$data['company']['whatsapp']}}&text=hola, acabo de realizar un pedido a nombre de {{session()->get('cliente_alta_moda')['nombre']}} {{session()->get('cliente_alta_moda')['apellido']}}"  target="_blank"class="flex-c-m stext-101 cl0 size-116 bg3  hov-btn3 p-lr-15 trans-04 pointer">Contáctanos en Whatsapp</a><hr>
        </div>
    </div>
</div>
</div>
@endforeach

@endsection

@section('scripts')
   
  <!-- datatables -->
<script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('vendors/custom.js')}}"></script>

@endsection