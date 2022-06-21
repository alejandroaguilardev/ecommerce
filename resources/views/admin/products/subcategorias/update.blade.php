<div class='modal fade update' id="update<?php echo $key->idsubcategory  ; ?>" tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg modal-dialog-centered'>
        <div class='modal-content'>
            <div class='modal-header update-modal'>
                <h5 class='modal-title' id='exampleModalLongTitle'>Actualizar Registro </h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <form  method="post" action="{{route('adminSubCategorias.update',$key->idsubcategory  )}}"  enctype="multipart/form-data">
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
                                <input type='number' class='form-control form-control-user' name='price' id='new_talla' value="{{$key->price}}" required   placeholder='Precio por Talla'>
                            </div>
                        </div>
                        <div class='form-group row'>
                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='type'>Categoría <span class="required" >(*)</span></label>
                            <div class="col-md-8 col-sm-9 form-group has-feedback">
                                <select class='form-control has-feedback-left' name="idcategory">
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
                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='description'>Descripción <span class="required" >(opcional)</span></label>
                            <div class="col-md-9 col-sm-9 ">
                                <textarea class='form-control form-control-user' rows="6"   name='description' id='update_description_1<?php echo $key->idsubcategory; ?>'    placeholder='Descripción'>{{$key->description}}</textarea>
                            </div>
                        </div>
                        <div class='form-group row'>
                            <label class='col-form-label col-md-3 col-sm-3 label-align' for='img'>Img<span class="required" >(s/)</span></label>
                            <div class="col-md-5 col-sm-6 ">
                                <img src="{{asset('img/'.$key->img.'')}}" alt="" style="width: 90%">
                                <input type='file' class='form-control form-control-user' name='img' id='img'  >
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


<div class='modal fade delete' id="delete<?php echo $key->idsubcategory  ; ?>" tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg modal-dialog-centered'>
        <div class='modal-content'>
            <div class='modal-header  delete-modal'>
                <h5 class='modal-title' id='exampleModalLongTitle'>Activar/Desactivar Registro </h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
        	<form method="post"  action="{{route('adminSubCategorias.destroy',$key->idsubcategory  )}}">
                @csrf
                @method('delete')
                <input type="hidden" name="delete_id" id="delete_id" value="<?php echo $key->idsubcategory  ; ?>" >
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
  selector: 'textarea#update_description_1<?php echo $key->idsubcategory; ?>',
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
</script>