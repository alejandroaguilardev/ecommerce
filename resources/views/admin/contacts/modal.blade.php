<div class='modal fade new' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>  
    <div class='modal-dialog modal-lg modal-dialog-centered'>
        <div class='modal-content'>
            <div class='modal-header new-modal'>
                <h5 class='modal-title' id='exampleModalLongTitle'>Nuevo Registro </h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
        	<form method="post"  name="new" role="form" action="{{route('adminContacto.store')}}">
				@csrf
				<div class='modal-body'>
		            <div class='row'>
		                <div class='col-md-12'>
					        <div class='form-group row'>
	                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='email'>Email<span class="required" >(*)</span></label>
	                        	<div class="col-md-8 col-sm-9  form-group has-feedback">
			                        <input type="text" class="form-control has-feedback-left" name="email" placeholder="email" required>
			                        <span class="fa fa-cube form-control-feedback left" aria-hidden="true"></span>
			                    </div>
	                        </div>

	     
	                       <div class='form-group row'>
	                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='name'>Teléfono<span  >(*)</span></label>
	                        	<div class="col-md-2 col-sm-2 ">
	                            	<input type='text' class='form-control form-control-user' name='phone' id='new_price'    placeholder='telefono'>
	                        	</div>
	                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='name'>Celular<span >(*)</span></label>
	                        	<div class="col-md-2 col-sm-2 ">
	                            	<input type='text' class='form-control form-control-user' name='mobile' id='new_discount'   placeholder='celular'>
	                        	</div>
	                        </div><hr>
	                       	
	                        <div class='form-group row'>
	                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='description'>Dirección <span  >(*)</span></label>
	                        	<div class="col-md-8 col-sm-9 ">
	                            	<textarea class='form-control form-control-user' name='direction' ></textarea>
	                        	</div>
							</div>
							
							<div class='form-group row'>
	                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='description'>URL Dirección <span  >(*)</span></label>
	                        	<div class="col-md-8 col-sm-9 ">
	                            	<textarea class='form-control form-control-user' name='urldirection' ></textarea>
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