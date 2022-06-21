@extends('admin.layouts.template')
@section('title')
   <title>Pedidos - Administrador</title>
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
            <h3>Pedidos</h3>
          </div>
      </div>
      <div class='clearfix'></div>
      <div class='row'>
            <div class='col-md-12 col-sm-12 ' >
                <div class='x_panel'>
                    <div class='x_title'>
                      <h2>Información de la Pedidos <small> Sección</small></h2>
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
                                          <td >                                              
                                            <a href='#' data-toggle='modal' data-target='.info_editar<?php echo $key['id']; ?>'>
                                            <b class="alert alert-success"> {{$key['status']}}</b>
                                            </a>
                                          </td>
                                        @elseif($key['status']=="cancelado")
                                        <td >                                              
                                          <a href='#' data-toggle='modal' data-target='.info_editar<?php echo $key['id']; ?>'>
                                          <b class="alert alert-danger">{{$key['status']}}</b>
                                          </a>
                                        </td>
                                        @else
                                        <td >                                              
                                          <a href='#' data-toggle='modal' data-target='.info_editar<?php echo $key['id']; ?>'>
                                          <b class="alert alert-warning">{{$key['status']}}</b>
                                          </a>
                                        </td>
                                      </td>
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
          </div>
      </div>
  </div>
</div>


<?php foreach ($data['pedidos'] as $key ) {?>
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
                    <table id='datatable-buttons' class='table table-striped table-bordered table-full  td-acciones'>
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
      
    </div>
</div>
</div>


<div class='modal fade info_editar<?php echo $key['id']; ?>' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
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
                    <form  method="post" action="{{route('adminPedidosPost',$key->id )}}" >
                      @csrf
                      @method('put')
                      <div class='modal-body'>
                        <div class='row'>
                            <div class='col-md-9'>
                              <div class='form-group row'>
                                  <label class='col-form-label col-md-3 col-sm-3 label-align'>Estado del Pedido <span class="required" ></span></label>
                                    <div class="col-md-8 col-sm-9 form-group has-feedback">
                                    <select class='form-control has-feedback-left' name='status'  required>
                                      @php 
                                        $estados[0]=['value'=>'despachado'];
                                        $estados[1]=['value'=>'pendiente']; 
                                        $estados[2]=['value'=>'cancelado']; 
                                        $estados[3]=['value'=>'por despachar']; 
                                      @endphp
                                      @foreach ($estados as $estado )
                                        @if($key->status==$estado['value'])
                                          <option value='{{$estado['value']}}' selected>{{$estado['value']}}</option>
                                        @else
                                          <option value='{{$estado['value']}}'>{{$estado['value']}}</option>
                                        @endif
                                      @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class='form-group row'>
                                    <label class='col-form-label col-md-3 col-sm-3 label-align' >Descripción del Pedido<span class="required" ></span></label>
                                    <div class="col-md-8 col-sm-9 ">
                                        <textarea class='form-control form-control-user' name='description'   placeholder='Descripción'>{{$key->description}}</textarea>
                                    </div>
                                </div>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                                  <button type='submit' class='btn btn-success'>Actualizar</button>
                              </div>
                            </div>
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
          </div>
        
      </div>
  </div>
  </div>
  <?php } ?>


<?php foreach ($data['clientes'] as $key ) {?>
<div class='modal fade infoCliente_<?php echo $key->id; ?>' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
<div class='modal-dialog modal-lg modal-dialog-centered'>
    <div class='modal-content'>
        <div class='modal-header  delete-modal' style="background: #7BBEEA">
            <center>
              <h5 class='modal-title text-white' id='exampleModalLongTitle' style="font-weight: bold">Cliente N°<?php echo $key->id; ?></h5>
            </center>
            <button type='button' class='close text-white' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        <div class='modal-body'>
            <div class='row'>
                <div class='col-md-12 modal_description'>
                  <div class='card-box table-responsive'>
                      <table id='datatable-buttons' class='table table-striped table-bordered table-full  td-acciones'>
                          <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Celular</th>
                                <th>Email</th>
                                <th>Documento</th>
                            </tr>
                          </thead>

                        <tbody >
                          <tr>
                                <td ><?php echo $key->nombre; ?></td>
                                <td ><?php echo $key->apellido; ?></td>
                                <td ><?php echo $key->celular; ?></td>
                                <td ><?php echo $key->email; ?></td>
                                <td ><?php echo $key->tipo_documento.": ".  $key->documento?></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
</div>

<?php } ?>

@endsection
