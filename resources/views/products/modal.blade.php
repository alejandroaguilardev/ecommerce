
<div class='modal fade update' id="update{{$key->idsubcategory}}" tabindex='-1' role='dialog' aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class='modal-dialog modal-lg  modal-dialog-centered'>
        <div class='modal-content'>
            <div class='modal-header update-modal' style="background: rgb(34, 34, 34);">
                <h5 class='modal-title' id='exampleModalLongTitle' style="color:#fff"><b><?php echo $key->name ?></b></h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close' style="color:#fff">
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
	        <div class='modal-body'>
	            <div class='row'>
	                <div class='col-md-6 mb-4'>
                 		<img class="img-responsive img-users" id="update_category_img" src="{{asset('img/'.$key->img.'')}}" style="width: 100%">
                 	</div>
                 	<style type="text/css"> .lista li{margin-left:3rem!important;padding: 0!important; list-style: disc!important;}</style>
	                <div class='col-md-6 mb-4 lista' >
                 		<?php echo $key->description ?>
                 	</div>
	            </div>
	        </div>
	        <div class='modal-footer'>
	            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
	        </div>
        </div>
    </div>
</div>