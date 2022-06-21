@extends('layouts.template')
@section('title')
   <title>Checkout - Altamoda & Reyblue</title>
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <meta name="description " content="Checkout en Altamoda">
   <meta name="keywords" content="pijamas,alta moda,rey blue,gamarra,lima,vestidos,diseños de ropa,diseño de pijama">
   <meta property="og:title" content="Alta Moda & Reyblue  Bienvenido a nuestra Tienda de ropa exclusiva">
   <meta property="og:type" content="website">
   <meta property="og:image" content="https://altamoda.pe/laravel/public/img/alta-moda.png">
   <meta property="og:url" content="https://altamoda.pe/checkout">
   <meta property="og:description"  content="Checkout en Altamoda">
   <meta property="og:site_name" content="Alta Moda">
   <meta name="author" content="Alta Moda">
   <meta name="robots" content="nofollow,noodp">
@endsection
@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">  
@endsection
@section('content')
    @php 
    $total_carrito=0;
    $description=""; 
    @endphp
    @if(!empty(session()->has('cart')))
        @foreach (session()->get('cart') as $cart)
            @if($cart['cantidad']>0)
                @php 
                    $total_carrito+=$cart['precio']*intval($cart['cantidad']);
                    $idcart=$cart['idproducto'].$cart['talla'].$cart['color'].$cart['tela'];
                    $description.=$cart['nombre']. " | ";
                @endphp	
            @endif
        @endforeach
    @php  
    function encrypt_decrypt($action, $string) 
    {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'total_carrito';
        $secret_iv = 'cWrBtayv7UN';
        // hash
        $key = hash('sha256', $secret_key);    
        // iv - encrypt method AES-256-CBC expects 16 bytes 
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        if ( $action == 'encrypt' ) {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if( $action == 'decrypt' ) {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }
        return $output;
    }
    $total_hash= encrypt_decrypt("encrypt",$total_carrito);
    
    @endphp
    @endif
	  <!-- breadcrumb -->
      <div class="container p-t-100">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="{{route('home.index')}}/" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="{{route('cart.index')}}/" class="stext-109 cl8 hov-cl1 trans-04">
               Carrito
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>
            <span class="stext-109 cl4">
               Checkout
            </span>
        </div>
    </div>
        

    <!-- Shoping Cart -->
    <div class="bg0 p-t-75 p-b-85">
        <div class="container">
            <div class="row">
               <div class="col-sm-8 col-md-8 col-xl-8  m-b-50">
                    <form id="myForm"  method="post"  action="{{route('checkout.store')}}" enctype="multipart/form-data">
                        @csrf   
                        <div  id="token_id"></div>
                            <div class="bor10 p-lr-40 p-t-30 p-b-40 ">
                            <h4 class="mtext-109 cl2 p-b-30 envio-h4">
                             <span class="envio-number">1</span> DIRECCIÓN DE ENVÍO:
                              <hr>
                            </h4>
                            <div class="row mb-4">
                                <div class="col-md-6">  
                                    <label class="envio-label">Departamento <span class="envio-span">*</span></label>
                                    <select name="departamentos" id="departamentos"  onchange="provinces(this)" class="form-control" required >
                                            <option disabled value="0">Seleccione un Departamento</option>
                                            @foreach ($data['departamentos'] as $key)
                                            <option value="{{$key['departament']}}"  >{{$key['name']}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                        
                            <div class="row mb-4">
                                <div class="col-md-6">  
                                    <label class="envio-label">Provincia <span class="envio-span">*</span></label>
                                    <select name="provincias" id="provincias"  onchange="districts(this)"  class="form-control" required>
                                            <option disabled>Seleccione una Provincia</option>
                                    </select>

                                </div>
                                <div class="col-md-6">  
                                    <label class="envio-label">Distrito <span class="envio-span">*</span></label>
                                    <select name="distritos" id="distritos" class="form-control" required>
                                            <option disabled>Seleccione una Distrito</option>
                                    </select>

                                </div>
                            </div>
                             <div class="row mb-4">
                                <div class="col-md-6">  
                                    <label class="envio-label">Dirección <span class="envio-span">*</span></label>
                                    <input type="text" name="direccion" id="direccion" class="form-control" required minlength="5">

                                </div>
                                <div class="col-md-6">  
                                    <label class="envio-label">Referencia</label>
                                    <input type="text" name="referencia" class="form-control" >
                                </div>
                            </div>
                           
                         </div>
                         <div class="bor10 p-lr-40 p-t-30 p-b-40 ">
                            <h4 class="mtext-109 cl2 p-b-30 envio-h4">
                             <span class="envio-number">2</span> Método de Envío:
                              <hr>
                            </h4>
                            
                             <div class="row mb-4">
                                <div class="col-md-12">  
                                    <label class="envio-label">Envío <span class="envio-span">*</span></label>
                                    <input type="radio" name="envio" value="Recojo en Tienda"checked  style="display: inline;"><b> Recojo En tienda</b> <br>
                                    <span>Tendremos su pedido listo  hora de Recojo 12 pm - 5 pm (Comunicar día de recojo)</span><br><br>
                                    <input type="radio" name="envio" value="Delivery"  style="display: inline;"><b> Delivery</b> <br>
                                    <span>El delivery tendrá un costo adicional dependiendo del lugar y la agencia, le estaremos llamando para indicarle el monto</span>

                                </div>
                               
                            </div>
                         </div>
                          <div class="bor10 p-lr-40 p-t-30 p-b-40 ">
                            <h4 class="mtext-109 cl2 p-b-30 envio-h4">
                             <span class="envio-number">3</span> Método de Pago:
                              <hr>
                            </h4>
                            <div class="mb-4">
                                <hr>                                 
                                <label class="envio-label">
                                    <input type="radio" onchange="div(1)" name="opciones" style="display: inline;"> 
                                    Pagar Con Tarjetas <span class="envio-span"></span>
                                </label><hr>
                                                                   
                                <label class="envio-label"> 
                                    <input type="radio" onchange="div(2)"  name="opciones" value="2" style="display: inline;"> Yapear <span class="envio-span"></span>
                                </label><hr>

                                <label class="envio-label"> 
                                    <input type="radio" onchange="div(3)"  name="opciones" value="2" style="display: inline;"> Transferencias <span class="envio-span"></span>
                                </label><hr>
                            </div>

                             <div class="row mb-4" id="comprobante_div1" style="display: none"  >
                                <div class="col-md-12">
                                    <label class="envio-label" style="text-align: center">
                                        PAGAR CON TARJETA DE DEVITO Y CREDITO<span class="envio-span"></span>
                                    </label>  <hr>
                                     <div class="flex-c-m flex-w p-b-18">
                                          <a href="javascript:void()" class="m-all-1">
                                            <img src="{{asset('img/icons/icon-pay-01.png')}}" alt="ICON-PAY">
                                          </a>

                                          <a href="javascript:void()" class="m-all-1">
                                            <img src="{{asset('img/icons/icon-pay-02.png')}}" alt="ICON-PAY">
                                          </a>

                                          <a href="javascript:void()" class="m-all-1">
                                            <img src="{{asset('img/icons/icon-pay-03.png')}}" alt="ICON-PAY">
                                          </a>

                                          <a href="javascript:void()" class="m-all-1">
                                            <img src="{{asset('img/icons/icon-pay-04.png')}}" alt="ICON-PAY">
                                          </a>

                                          <a href="javascript:void()" class="m-all-1">
                                            <img src="{{asset('img/icons/icon-pay-05.png')}}" alt="ICON-PAY">
                                          </a>
                                        </div>
                                        <input type="checkbox" id="terminos" value="1" style="display: inline;">  <label for="terminos" style="display: inline;">
                                           Acepta nuestros <a target="_blank" href="{{route('about.show','terminos_y_condiciones')}}/">Términos y Condiciones</a> y las <a target="_blank" href="{{route('about.show','terminos_y_condiciones')}}/">Políticas de Privacidad</a>. 
                                        </label>
                                        <hr>
                                     <button type="button" id="buyButton" class="flex-c-m stext-101 cl0 size-116 bg3  hov-btn3 p-lr-15 trans-04 pointer">Comprar</button>

                                </div>
                               
                            </div>

                            <div class="row mb-4" id="comprobante_div2"  style="display: none"  >
                                <div class="col-md-12">  
                                  <h4>Yapear(No olvides ennviar el comprobante)</h4><hr>
                                    <div class="col-md-12 ">
                                        <img src="{{asset('img/yape.jpg')}}" style="width:50px"> 
                                        <span >
                                            Al Siguiente Número a Nombre de <b>Alta Moda EIRL: </b><i class="mtext-109" style="color: red;">{{$data['company']['whatsapp']}}</i>
                                        </span>
                                    </div>
                                    <div class="col-md-4 ">
                                        <center><img src="{{asset('img/qr.jpg')}}" style="width:100% "></center>
                                        <hr>
                                    </div>
                                    <input type="file" name="img_1"   style="display: inline;"><b></b> <br>
                                    <span>También puedes envíarnos el comprobante al mismo número </span><br><br>
                                   
                                </div>
                                <div class="col-md-12">  
                                    <button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3  hov-btn3 p-lr-15 trans-04 pointer">Comprar</button>
                                </div>
                            </div>

                            <div class="row mb-4" id="comprobante_div3"  style="display: none"  >
                                <div class="col-md-12">  
                                  <input type="file" name="img_2"   style="display: inline;"><b> (Deposito o Transferencia)</b> <br>
                                    <span>En caso de no ingresar comprobante se entenderá que cancelará en recojo en la tienda. </span><br><br>
                                    <div class="bor10 p-lr-40 p-t-30 p-b-40 ">
                                        <label>Número de Cuenta: <span>0101-2020-4545-3621</span></label>
                                        <label>Banco:BCP</label>
                                        <label>A Nombre: Alta Moda</label>
                                        <label>RUC: 1587896321</label>
                                    </div>
                                </div>
                                <div class="col-md-12">  
                                    <button type="submit"  class="flex-c-m stext-101 cl0 size-116 bg3  hov-btn3 p-lr-15 trans-04 pointer">Comprar</button>
                                </div>
                            </div>                               

                         </div>
                         <input type="hidden" id="metodo" name="metodo">
                    </form>
                 </div>

                <div class="col-md-4 col-xl-4  m-b-50">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 ">
                        <h4 class="mtext-109 cl2 p-b-30">
                            Resumen del pedido
                        </h4>

                        {{-- <div class="flex-w flex-t bor12 p-b-13">
                            <div class="size-208">
                                <span class="stext-110 cl2">
                                    Subtotal:
                                </span>
                            </div>

                            <div class="size-209">
                                <span class="mtext-110 cl2">
                                    s/ <?php echo $subtotal_carrito= round(intval($total_carrito) / ((18/100) + 1),2); ?>
                                </span>
                            </div>
                        </div> --}}


                        <div class="flex-w flex-t p-t-27 p-b-33">
                            <div class="size-208">
                                <span class="mtext-101 cl2">
                                    Total:
                                </span>
                            </div>

                            <div class="size-209 p-t-1">
                                <span class="mtext-110 cl2">
                                    s/ <?php echo $total_carrito; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script src="https://checkout.culqi.com/js/v3"></script>
<script type="text/javascript" src="{{asset('js/culqi.js')}}"></script>
<script type="text/javascript" src="{{asset('js/checkout.js')}}"></script>


<script>
    // Configura tu llave pública
    Culqi.publicKey = 'pk_test_QrwSe98VTX0RAoy3';
    // Configura tu Culqi Checkout
    Culqi.settings({
        title: 'Alta Moda',
        currency: 'PEN',
        description: 'Pago de Productos',
        amount:{{$total_carrito}}+00,
    });

    Culqi.options({
    lang: 'es',
    customButton: 'Pagar',
    style: {
      logo: "{{asset('img/alta-moda2.png')}}",
      maincolor: '#0ec1c1',
      buttontext: '#ffffff',
      maintext: '#4A4A4A',
      desctext: '#4A4A4A'
    }
});
    // Usa la funcion Culqi.open() en el evento que desees
    $('#buyButton').on('click', function(e) {
        // document.getElementById("myForm").submit();

        // Abre el formulario con las opciones de Culqi.settings
         let direccion = document.getElementById("direccion").value;
         let terminos = document.getElementById("terminos");
         let departamentos = $( "#departamentos option:selected" ).text();
         let provincias= $( "#provincias option:selected" ).text();
         let distritos = $( "#distritos option:selected" ).text();
        if(direccion.length>=5 && departamentos.length>=2 && provincias.length>=2 && distritos.length>=2 ){
          if(terminos.checked ===true){
            Culqi.open();
            e.preventDefault();
          }else{
            swal("Aceptar Términos y Condiciones", "Debe aceptar los terminos y condiciones", "warning");
          }
        }else{
          swal("LLenar Formulario", "Debe Ingresar los datos Obligatorios", "warning");
        }
    });

   function culqi() {
    if (Culqi.token) { // ¡Objeto Token creado exitosamente!
        var token = Culqi.token.id;
         // alert('Se ha creado un token:' + token);
         let email = "{{session()->get('cliente_alta_moda')['email']}}";
         let url = "{{URL::to('/')}}/culqi/index.php";
         let direccion = document.getElementById("direccion").value;
         let ciudad = $( "#departamentos option:selected" ).text()+" "+ $( "#provincias option:selected" ).text()+" "+$( "#distritos option:selected" ).text();
        let total ="{{$total_hash}}";
        let description ="{{$description}}";
          let datos = { 
          id:"{{session()->get('cliente_alta_moda')['id']}}", 
          token:token, 
          customer_id: "{{session()->get('cliente_alta_moda')['id']}}_{{session()->get('cliente_alta_moda')['documento']}}",
          address: direccion,
          address_city: ciudad,
          first_name: "{{session()->get('cliente_alta_moda')['nombre']}}",
          last_name: "{{session()->get('cliente_alta_moda')['apellido']}}",
          email: "{{session()->get('cliente_alta_moda')['email']}}",
          phone: "{{session()->get('cliente_alta_moda')['celular']}}",
          total:total,
          description: description,
        };


          $.ajax({
              type:'POST',
              url:url,
              data: datos,
              success: function (data) {
                 let jsonData = JSON.parse(data);
                    if (jsonData.success == 1){
                        swal("Producto Agregado", "Compra Realizada", "success");
                        console.log(jsonData.param);
                        let token_value=`<input type="hidden" name="token" value="${token}"> `;
                        document.getElementById("token_id").innerHTML=token_value;
                        document.getElementById("myForm").submit();

                    }else{
                    console.log(jsonData.error);
                    swal("Ocurrio un error", "Vuelve a intentar", "warning");
                  }
                },
                error: function (data) {
                    swal("Un  error en el servidor", "Vuelve a intentar", "warning");
                },
             });

    } else { // ¡Hubo algún problema!
        // Mostramos JSON de objeto error en consola
        console.log(Culqi.error);
        alert(Culqi.error.user_message);
    }
  };

</script>
@endsection