<div class='modal fade update' id="update<?php echo $key->idcategory ; ?>" tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg modal-dialog-centered'>
        <div class='modal-content'>
            <div class='modal-header update-modal'>
                <h5 class='modal-title' id='exampleModalLongTitle'>Actualizar Registro </h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <form  method="post" action="{{route('adminCategorias.update',$key->idcategory )}}" >
                @csrf
                @method('put')
                <div class='modal-body'>
                <div class='row'>
                    <div class='col-md-9'>
                        <div class='form-group row'>
                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='name'>Nombre <span class="required" >(*)</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type='text' class='form-control form-control-user' name='name' id='update_name'  value="{{$key->name}}" required   placeholder='Nombre y Apellido '>
                            </div>
                        </div>
                        <div class='form-group row'>
                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='new_talla'>Precio por Talla<span class="required" >(s/)</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type='number' class='form-control form-control-user' name='price_talla' id='new_talla' value="{{$key->price_talla}}" required   placeholder='Precio por Talla'>
                            </div>
                        </div>
                        <div class='form-group row'>
                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='description'>Descripción <span class="required" >(opcional)</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea class='form-control form-control-user' name='description' id='update_description'    placeholder='Descripción'>{{$key->description}}</textarea>
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


<div class='modal fade delete' id="delete<?php echo $key->idcategory ; ?>" tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg modal-dialog-centered'>
        <div class='modal-content'>
            <div class='modal-header  delete-modal'>
                <h5 class='modal-title' id='exampleModalLongTitle'>Activar/Desactivar Registro </h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
        	<form method="post"  action="{{route('adminCategorias.destroy',$key->idcategory )}}">
                @csrf
                @method('delete')
                <input type="hidden" name="delete_id" id="delete_id" value="<?php echo $key->idcategory ; ?>" >
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