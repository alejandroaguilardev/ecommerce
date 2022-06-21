<div class='modal fade update' id="update<?php echo $key->id; ?>" tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg modal-dialog-centered'>
        <div class='modal-content'>
            <div class='modal-header update-modal'>
                <h5 class='modal-title' id='exampleModalLongTitle'>Actualizar Registro </h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <form  method="post" action="{{route('adminContacto.update',$key->id)}}" >
                @csrf
                @method('put')
                <div class='modal-body'>
                <input type="hidden" name="id" id="update_id" value="<?php echo $key->id; ?>">
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='form-group row'>
                                <label class='col-form-label col-md-3 col-sm-3 label-align' for='name'>Email<span class="required" >(*)</span></label>
                                <div class="col-md-8 col-sm-9  form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="update_name" name="email" placeholder="Email"  value="<?php echo $key->email; ?>" required>
                                    <span class="fa fa-cube form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>


                           <div class='form-group row'>
                                <label class='col-form-label col-md-3 col-sm-3 label-align' for='phone'>Teléfono<span>(*)</span></label>
                                <div class="col-md-8 col-sm-9 ">
                                    <input type='text' class='form-control form-control-user' name='phone'   placeholder='Teléfono' value="<?php echo $key->phone; ?>">
                                </div><br>
                                <label class='col-form-label col-md-3 col-sm-3 label-align' for='mobile'>Celular<span>(*)</span></label>
                                <div class="col-md-8 col-sm-9 ">
                                    <input type='text' class='form-control form-control-user' name='mobile' value="<?php echo $key->mobile; ?>" placeholder='Celular'>
                                </div>
                            </div>
                            <div class='form-group row'>
                                <label class='col-form-label col-md-3 col-sm-3 label-align' for='name'>Dirección <span class="required" >(*)</span></label>
                                <div class="col-md-8 col-sm-9  form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="update_name" name="direction" placeholder="Nombre"  value="<?php echo $key->direction; ?>" required>
                                    <span class="fa fa-cube form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class='form-group row'>
                                <label class='col-form-label col-md-3 col-sm-3 label-align' for='description'>URL Dirección <span  >(*)</span></label>
                                <div class="col-md-8 col-sm-9 ">
                                    <textarea class='form-control form-control-user' name='url_direction'  ><?php echo $key->url_direction; ?></textarea>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                 	<div class="text-center">
		           		<hr>
		           		<p class="text-danger">(*) Campo Obligatorio
			           		<br><span class="text-danger">(Opcional) Estos campos puedes dejarlos vacios</span>
			           		<hr><span class="text-info">(Nota) Solo se visualizan las imagenes seleccionadas no es necesario subirlas todas pero si en orden</span>
		           		</p>
		           </div>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                    <button type='submit' class='btn btn-success'>Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class='modal fade delete' id="delete<?php echo $key->id; ?>" tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg modal-dialog-centered'>
        <div class='modal-content'>
            <div class='modal-header  delete-modal'>
                <h5 class='modal-title' id='exampleModalLongTitle'>Activar/Desactivar Registro </h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
        	<form method="post"  action="{{route('adminContacto.destroy',$key->id)}}">
                @csrf
                @method('delete')
                <input type="hidden" name="delete_id" id="delete_id" value="<?php echo $key->id; ?>" >
		        <div class='modal-body'>
		            <div class='row'>
		                <div class='col-md-12'>
					        <p>¿Esta Seguro de Activar/Desactivar el siguiente registro?</p>
					        <p><b id="delete_name"></b></p>
		                </div>
		            </div>
		        </div>
		        <div class='modal-footer'>
		            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
		            <button type='submit' class='btn btn-danger'>Activar/Desactivar</button>
		        </div>
		    </form>
        </div>
    </div>
</div>