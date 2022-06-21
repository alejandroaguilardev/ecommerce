<div class='modal fade new' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>  
    <div class='modal-dialog modal-lg modal-dialog-centered'>
        <div class='modal-content'>
            <div class='modal-header new-modal'>
                <h5 class='modal-title' id='exampleModalLongTitle'>Nuevo Registro </h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
        	<form method="post"  name="new" role="form" action="{{route('adminSubCategorias.store')}}" enctype="multipart/form-data">
				@csrf
				<div class='modal-body'>
					<div class='row'>
		                <div class='col-md-12'>
					        <div class='form-group row'>
	                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='name'>Nombre<span class="required" >(*)</span></label>
	                        	<div class="col-md-6 col-sm-6 ">
	                            	<input type='text' class='form-control form-control-user' name='name' id='new_name' required   placeholder='Nombre'>
	                        	</div>
							</div>
							<div class='form-group row'>
	                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='new_talla'>Precio por Tela <span class="required" >s/</span></label>
	                        	<div class="col-md-6 col-sm-6 ">
	                            	<input type='number' class='form-control form-control-user' name='price' id='new_talla' required   placeholder='Precio por Talla'>
	                        	</div>
							</div>
							<div class='form-group row'>
	                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='type'>Categoría <span class="required" >(*)</span></label>
	                        	<div class="col-md-8 col-sm-9 form-group has-feedback">
	                            	<select class='form-control has-feedback-left' name='idcategory' id='new_category' required>
					                    <?php foreach ($data['category'] as $key ) {?>
	                                        <option value='<?php echo $key->idcategory; ?>'><?php echo $key->name; ?></option>
					                    <?php } ?>
	                            	</select>
			                        <span class="fa fa-cubes form-control-feedback left" aria-hidden="true"></span>
	                        	</div>
	                        </div>
	                        <div class='form-group row'>
	                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='description'>Descripcion <span class="required" >(opcional)</span></label>
	                        	<div class="col-md-6 col-sm-6 ">
	                            	<textarea class='form-control form-control-user' name='description' id='new_description'    placeholder='Descripción'></textarea>
	                        	</div>
	                        </div>
	                        <div class='form-group row'>
	                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='img'>Imagen <span class="required" >(opcional)</span></label>
	                        	<div class="col-md-6 col-sm-6 ">
	                            	<input type='file' class='form-control form-control-user' name='img' id='img'>
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
		            <button type='submit' class='btn btn-success'>Guardar</button>
		        </div>
		    </form>
        </div>
    </div>
</div>