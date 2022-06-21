<div class='modal fade new' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>  
    <div class='modal-dialog modal-lg modal-dialog-centered'>
        <div class='modal-content'>
            <div class='modal-header new-modal'>
                <h5 class='modal-title' id='exampleModalLongTitle'>Nuevo Registro </h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
        	<form method="post"  name="new" role="form" action="{{route('adminProducts.store')}}" enctype="multipart/form-data">
				@csrf
				<div class='modal-body'>
		            <div class='row'>
		                <div class='col-md-12'>
					        <div class='form-group row'>
	                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='name'>Nombre<span class="required" >(*)</span></label>
	                        	<div class="col-md-4 col-sm-4  form-group has-feedback">
			                        <input type="text" class="form-control has-feedback-left" id="new_name" name="name" placeholder="Nombre" required>
			                        <span class="fa fa-cube form-control-feedback left" aria-hidden="true"></span>
			                    </div>
	                            <label class='col-form-label col-md-2 col-sm-2 label-align' for='name'>Código<span> (opcional)</span></label>
	                        	<div class="col-md-2 col-sm-2  form-group has-feedback">
			                        <input type="text" class="form-control has-feedback-left" id="new_code" name="code" placeholder="Código">
			                        <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
			                    </div>
	                        </div>

	                        <div class='form-group row'>
	                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='type'>Tipo <span class="required" >(*)</span></label>
	                        	<div class="col-md-8 col-sm-9 form-group has-feedback">
	                            	<select class='form-control has-feedback-left' name='idtype' id='idtype' required>
					                    <?php foreach ($data['type'] as $key ) {?>
	                                        <option value='<?php echo $key->idtype; ?>'><?php echo $key->name; ?></option>
					                    <?php } ?>
	                            	</select>
			                        <span class="fa fa-cubes form-control-feedback left" aria-hidden="true"></span>
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
	                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='name'>Precio<span  >(Opcional)</span></label>
	                        	<div class="col-md-2 col-sm-2 ">
	                            	<input type='number' class='form-control form-control-user' name='price' id='new_price'    placeholder='0'>
	                        	</div>
	                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='name'>Descuento<span >(Opcional)</span></label>
	                        	<div class="col-md-2 col-sm-2 ">
	                            	<input type='number' class='form-control form-control-user' name='discount' id='new_discount'   placeholder='0'>
	                        	</div>
	                        </div><hr>
	                       	<div class='row'>
	                       		<div class="col-md-4">
		                            <label class='col-form-label  label-align' for='tallas'>Tallas<span  >(*)</span></label>
		                        	<div class="">
		                            	<div class=" form-group has-feedback">
			                            <input id="tags_1" type="text" name="tallas" class="tags form-control" value=""  required />
			                        	</div>
		                        	</div>
		                        </div>
	                       		<div class="col-md-4">
		                            <label class='col-form-label label-align' for='colores'>Colores<span >(*)</span></label>
		                        	<div class=" ">
		                            	<div class="form-group has-feedback">
			                            	<input id="tags_2" type="text" name="colores" class="tags form-control" value=""  required />

		                        		</div>
		                        	</div>
		                        </div>
		                        <div class="col-md-4">
		                            <label class='col-form-label label-align' for='colores'>Genero<span >(*)</span></label>
		                        	<div class=" ">
		                            	<div class="form-group has-feedback">
			                            	<input id="tags_3" type="text" name="genero" class="tags form-control" value=""  required />
			                            	<span>Pueden ser (Caballeros,Damas,Unisex, Niños.)</span>

		                        		</div>
		                        	</div>
		                        </div>
	                       		
	                        </div>

	                        <div class='form-group row'>
	                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='description'>Descripcion <span  >(Opcional)</span></label>
	                        	<div class="col-md-8 col-sm-9 ">
	                            	<textarea class='form-control form-control-user' name='description' id='new_description'></textarea>
	                        	</div>
	                        </div>
	                        <div class='form-group row'>
	                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='img'>Imagen <span  >(opcional)</span></label>
	                        	<div class="col-md-4 col-sm-4 ">
	                            	<input type='file' class='form-control form-control-user' name='img_1'>
	                            	<span>Imagen 1</span>
	                            	<input type='file' class='form-control form-control-user' name='img_2' >
	                            	<span>Imagen 2</span>
	                            </div>
	                        	<div class="col-md-4 col-sm-4 ">
	                            	<input type='file' class='form-control form-control-user' name='img_3' >
	                            	<span>Imagen 3</span>
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
 