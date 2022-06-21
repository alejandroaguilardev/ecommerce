
<div class='modal fade update' id="agotado<?php echo $key->idproducts; ?>" tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg modal-dialog-centered'>
        <div class='modal-content'>
            <div class='modal-header  delete-modal' style="background: yellow;">
                <h5 class='modal-title' id='exampleModalLongTitle' style="color: #000">Producto Agotado Registro </h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <form method="post"  action="{{route('adminProducts.destroy', $key->idproducts)}}">
                @csrf
                @method('delete')
                <div class='modal-body'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <p>¿Hasta que fecha se encontrará agotado el producto?</p>
                            <p><b id="delete_name"></b></p>
                            <input type="date" name="date" class="form-control" min="<?php echo date('Y-mm-dd') ?>" required>
                        </div>
                    </div>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                    <button type='submit' class='btn btn-warning'>Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>


 
<div class='modal fade update' id="update<?php echo $key->idproducts; ?>" tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg modal-dialog-centered'>
        <div class='modal-content'>
            <div class='modal-header update-modal'>
                <h5 class='modal-title' id='exampleModalLongTitle'>Actualizar Registro </h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <form  method="post"  name="update" role="form" action="{{route('adminProducts.update',$key->idproducts)}}"  enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class='modal-body'>
                <input type="hidden" name="idproducts" id="update_id" value="<?php echo $key->idproducts; ?>">
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='form-group row'>
                                <label class='col-form-label col-md-3 col-sm-3 label-align' for='name'>Nombre<span class="required" >(*)</span></label>
                                <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="update_name" name="name" placeholder="Nombre"  value="<?php echo $key->name; ?>" required>
                                    <span class="fa fa-cube form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <label class='col-form-label col-md-2 col-sm-2 label-align' for='name'>Código<span> (opcional)</span></label>
                                <div class="col-md-2 col-sm-2  form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="update_code" name="code" placeholder="Código" value="<?php echo $key->code; ?>">
                                    <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>

                            <div class='form-group row'>
                                <label class='col-form-label col-md-3 col-sm-3 label-align' for='type'>Tipo <span class="required" >(*)</span></label>
                                <div class="col-md-8 col-sm-9 form-group has-feedback">
                                    <select class='form-control has-feedback-left' name='idtype' id='idtype' required>
                                         <?php foreach ($data['type'] as $type_update ) {
                                            if($key->idtype==$type_update->idtype){ ?>
                                             <option value='<?php echo $type_update->idtype; ?>' selected><?php echo $type_update->name; ?></option>
                                        <?php }else{ ?>
                                            <option value='<?php echo $type_update->idtype; ?>' ><?php echo $type_update->name; ?></option>
                                        <?php }} ?>
                                    </select>
                                    <span class="fa fa-cubes form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>

                            <div class='form-group row'>
                                <label class='col-form-label col-md-3 col-sm-3 label-align' for='type'>Categoría <span class="required" >(*)</span></label>
                                <div class="col-md-8 col-sm-9 form-group has-feedback">
                                    <select class='form-control has-feedback-left' name='idcategory' id='update_category' required>
                                        <?php foreach ($data['category'] as $category_update ) {
                                        	if($key->idcategory==$category_update->idcategory){ ?>
                                           	 <option value='<?php echo $category_update->idcategory; ?>' selected><?php echo $category_update->name; ?></option>
                                        <?php }else{ ?>
                                        	<option value='<?php echo $category_update->idcategory; ?>' ><?php echo $category_update->name; ?></option>
                                        <?php }} ?>

                                    </select>
                                    <span class="fa fa-cubes form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                           <div class='form-group row'>
                                <label class='col-form-label col-md-3 col-sm-3 label-align' for='name'>Precio<span  >(Opcional)</span></label>
                                <div class="col-md-2 col-sm-2 ">
                                    <input type='number' class='form-control form-control-user' name='price' id='update_price'  placeholder='0' value="<?php echo $key->price; ?>">
                                </div>
                                <label class='col-form-label col-md-3 col-sm-3 label-align' for='name'>Descuento<span >(Opcional)</span></label>
                                <div class="col-md-2 col-sm-2 ">
                                    <input type='number' class='form-control form-control-user' name='discount' id='update_discount'  value="<?php echo $key->discount; ?>" placeholder='0'>
                                </div>
                            </div>
                            <div class='row'>
	                       		<div class="col-md-4">
		                            <label class='col-form-label  label-align' for='talla'>Tallas<span  >(*)</span></label>
		                        	<div class="">
		                            	<div class=" form-group has-feedback " id="tag_update_talla">
			                            <input id="tags_4<?php echo $key->idproducts; ?>" type="text" name="tallas" class="tags form-control" value="<?php echo $key->tallas; ?>"  required />
			                        	</div>
		                        	</div>
		                        </div>
	                       		<div class="col-md-4">
		                            <label class='col-form-label label-align' for='name'>Colores<span >(*)</span></label>
		                        	<div class=" ">
		                            	<div class="form-group has-feedback"  id="tag_update_colores">
			                            <input id="tags_5<?php echo $key->idproducts; ?>" type="text" name="colores" class="tags form-control" value="<?php echo $key->colores; ?>"  required />

		                        		</div>
		                        	</div>
		                        </div>
	                       		<div class="col-md-4">
                                    <label class='col-form-label label-align' for='colores'>Genero<span >(*)</span></label>
                                    <div class=" ">
                                        <div class="form-group has-feedback">
                                            <input id="tags_6<?php echo $key->idproducts; ?>" type="text" name="genero" class="tags form-control" value="<?php echo $key->genero; ?>"  required />
                                            <span>Pueden ser (Caballeros,Damas,Unisex, Niños.)</span>

                                        </div>
                                    </div>
                                </div>
	                        </div>
                            <div class='form-group row'>
                                <label class='col-form-label col-md-3 col-sm-3 label-align' for='description'>Descripcion <span  >(Opcional)</span></label>
                                <div class="col-md-8 col-sm-9 ">
                                    <textarea class='form-control form-control-user' name='description' id='update_description_1<?php echo $key->idproducts; ?>'  ><?php echo $key->description; ?></textarea>
                                </div>
                            </div>
                            <div class='form-group row'>
                                <div class="col-md-3 col-sm-2 ">
                            		<div class="img-products" style="height: 12rem;overflow: hidden;">
                            			<img class="img-responsive img-users" id="update_products_img_1" src="{{asset('img/'.$key->img_1.'')}}"><hr>
                            		</div>
	                            	<input type='file' class='form-control form-control-user' name='img_1' value="">
	                            	<span>Imagen 1</span>
	                            </div>
                                <div class="col-md-3 col-sm-2 ">
                            		<div class="img-products" style="height: 12rem;overflow: hidden;">
                            			<img class="img-responsive img-users" id="update_products_img_1" src="{{asset('img/'.$key->img_2.'')}}"><hr>
                            		</div>
	                            	<input type='file' class='form-control form-control-user' name='img_2'value="" >
	                            	<span>Imagen 2</span>
	                            </div>
                                <div class="col-md-3 col-sm-2 ">
                            		<div class="img-products" style="height: 12rem;overflow: hidden;">
                            			<img class="img-responsive img-users" id="update_products_img_1" src="{{asset('img/'.$key->img_3.'')}}"><hr>
                            		</div>
	                            	<input type='file' class='form-control form-control-user' name='img_3' value="" >
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
                    <button type='submit' class='btn btn-success'>Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class='modal fade delete' id="delete<?php echo $key->idproducts  ; ?>" tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg modal-dialog-centered'>
        <div class='modal-content'>
            <div class='modal-header  delete-modal'>
                <h5 class='modal-title' id='exampleModalLongTitle'>Activar/Desactivar Registro </h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
        	<form method="post"  action="{{route('adminProducts.destroy',$key->idproducts  )}}">
                @csrf
                @method('delete')
                <input type="hidden" name="delete_id" id="delete_id" value="<?php echo $key->idproducts  ; ?>" >
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


<script type="text/javascript">
	tinymce.init({
  selector: 'textarea#update_description_1<?php echo $key->idproducts; ?>',
  menubar: true,
  plugins: [
    "advlist autolink lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen",
    "insertdatetime media table contextmenu paste"
  ],
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  setup: function (editor) {
      editor.on('change', function () {
          tinymce.triggerSave();
      });
  }
});

function init_TagsInput_update<?php echo $key->idproducts;?>() {

    if (typeof $.fn.tagsInput !== 'undefined') {

        $('#tags_4<?php echo $key->idproducts; ?>').tagsInput({
            width: 'auto'
        });

    }

};
function init_TagsInput_update2<?php echo $key->idproducts;?>() {

    if (typeof $.fn.tagsInput !== 'undefined') {

        $('#tags_5<?php echo $key->idproducts; ?>').tagsInput({
            width: 'auto'
        });

    }

};  

function init_TagsInput_update3<?php echo $key->idproducts;?>() {

    if (typeof $.fn.tagsInput !== 'undefined') {

        $('#tags_6<?php echo $key->idproducts; ?>').tagsInput({
            width: 'auto'
        });

    }

};   
init_TagsInput_update<?php echo $key->idproducts;?>();
init_TagsInput_update2<?php echo $key->idproducts;?>();
init_TagsInput_update3<?php echo $key->idproducts;?>();


</script>