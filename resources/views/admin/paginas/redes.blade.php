@extends('admin.layouts.template')

@section('title')
   <title>Redes Sociales - Administrador</title>
   <meta name="description " content="Administrador">
   <meta property="og:type" content="website">
   <meta name="author" content="Alta Moda">
   <meta name="robots" content="nofollow,noodp">
@endsection 

@section('content')

<div class='right_col' role='main'>
    <div >
      <div class='page-title'>
          <div class='title_left'>
            <h3>Redes Sociales</h3>
          </div>
      </div>
      <div class='clearfix'></div>
      <div class='row'>
        <div class='col-md-12 col-sm-12 '>
            <div class='x_panel'>
                <div class='x_title'>
                    <h2>Sección: <small> Editar</small></h2>
                    <ul class='nav navbar-right panel_toolbox'>
                    <li><a class='collapse-link'><i class='fa fa-chevron-up'></i></a>
                    </li>
                    <li><a class='close-link'><i class='fa fa-close'></i></a>
                    </li>
                  </ul>
                  <div class='clearfix'></div>
                </div>
                <div class='x_content'>
                  <form  method="post"  role="form" action="{{route('adminRedPost')}}">
                    @csrf
                    <p>Copie y Pegue la URL  (Ejemplo:https://www.facebook.com/exampleCompany) de las redes de su compañia.</p>
                    <div class='field item form-group'>
                      <label class='col-form-label col-md-3 col-sm-3  label-align' form='facebook'>Facebook Alta Moda<span
                          ></span></label>
                      <div class='col-md-6 col-sm-6'>
                        <input class='form-control' id="facebook" name="facebook" value="<?php echo $data['model']['facebook'];?>" placeholder='https://www.facebook.com/'  />
                      </div>
                    </div>
                    <div class='field item form-group'>
                      <label class='col-form-label col-md-3 col-sm-3  label-align' for='instagram'>Instagram<span
                          ></span></label>
                      <div class='col-md-6 col-sm-6'>
                        <input class='form-control'  id="instagram" name="instagram" value="<?php echo $data['model']['instagram'];?>" placeholder='https://www.instagram.com/'  />
                      </div>
                    </div>
                    <div class='field item form-group'>
                      <label class='col-form-label col-md-3 col-sm-3  label-align' for='instagram'>Facebook Rey Blue<span
                          ></span></label>
                      <div class='col-md-6 col-sm-6'>
                        <input class='form-control'  id="facebook_2" name="facebook_2" value="<?php echo $data['model']['youtube'];?>" placeholder='https://www.instagram.com/'  />
                      </div>
                    </div>
                    <div class='field item form-group d-none'>
                      <label class='col-form-label col-md-3 col-sm-3  label-align'>Youtube <span
                          ></span></label>
                      <div class='col-md-6 col-sm-6'>
                        <input class='form-control' id="youtube" name="youtube" value="<?php echo $data['model']['youtube'];?>" placeholder='https://www.youtube.com/'  />
                      </div>
                    </div>
 
                    <div class="separator my-4"></div>
                    <p>El Siguiente correo  será el utilizado para enviar todos los mensajes referente al sitio web. De la misma manera, el número escrito en está sección será enlazado al botón del whatsapp.</p>
                    <div class='field item form-group'>
                      <label class='col-form-label col-md-3 col-sm-3  label-align'>Email<span
                          ></span></label>
                      <div class='col-md-6 col-sm-6'>
                        <input type="email"  class='form-control'id="email" name="email"  value="<?php echo $data['model']['email'];?>" placeholder='example@email.com'  />
                        <span>(Es el correo donde serán enviado todos los mensaje del sitio)</span>
                      </div>
                    </div>
                    <div class='field item form-group'>
                      <label class='col-form-label col-md-3 col-sm-3  label-align'>Whatsapp<span
                          ></span></label>
                      <div class='col-md-6 col-sm-6'>
                        <input type="number"  class='form-control'id="whatsapp" name="whatsapp"  value="<?php echo $data['model']['whatsapp'];?>" placeholder='51923844025'  />
                        <span>(Es el Número que estará enlazado al boton de whatsapp)</span>
                      </div>
                    </div>
                    <div class='ln_solid'>
                      <div class='form-group'>
                        <div class='col-md-6 offset-md-3 text-right'>
                          <button type='submit' class='btn btn-primary'>Guardar</button>
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
      <!-- /page content -->
@endsection
