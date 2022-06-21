<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Alta Moda - Contacto</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
        @media screen {
          @font-face {
            font-family: "Source Sans Pro";
            font-style: normal;
            font-weight: 400;
          }
      
          @font-face {
            font-family: "Source Sans Pro";
            font-style: normal;
            font-weight: 700;
          }
        }
        body,
        table,
        td,
        a {
          -ms-text-size-adjust: 100%; /* 1 */
          -webkit-text-size-adjust: 100%; /* 2 */
        }
        table,
        td {
          mso-table-rspace: 0pt;
          mso-table-lspace: 0pt;
        }
        img {
          -ms-interpolation-mode: bicubic;
        }
        a[x-apple-data-detectors] {
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          color: inherit !important;
          text-decoration: none !important;
        }
        div[style*="margin: 16px 0;"] {
          margin: 0 !important;
        }
      
        body {
          width: 100% !important;
          height: 100% !important;
          padding: 0 !important;
          margin: 0 !important;
        }
        table {
          border-collapse: collapse !important;
        }
      
        a {
          color: #1a82e2;
        }
      
        img {
          height: auto;
          line-height: 100%;
          text-decoration: none;
          border: 0;
          outline: none;
        }
        </style>
      </head>
      <body style="background-color: #e9ecef;">
        <div class="preheader" style="display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0;">
        
        </div>
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tr>
            <td align="center" bgcolor="#e9ecef">
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                  <td align="center" valign="top" style="padding: 36px 24px;">
                    <a href="{{route('home.index')}}" target="_blank" style="display: inline-block;">
                      <img src="{{asset('img/alta-moda2.png')}}" alt="Logo" border="0" width="48" style="display: block; width: 20rem; max-width: 25rem; min-width: 20rem;">
                    </a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          {{-- <tr>
            <td align="center" bgcolor="#e9ecef">
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                  <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
					<h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">
					Número de pedido: @php echo time() @endphp {{$param['id']}}	</h1>
                  </td>
                </tr>
              </table>
            </td>
          </tr> --}}
          <tr>
            <td align="center" bgcolor="#e9ecef">
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                      <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; ">
                       <h3 style="color:red"><b> <center>Ten en cuenta que:</center></b>	</h3>
                          <p>Primero confirmaremos tu pedido.</p>
                          <p>Una vez confirmado tu pedido te enviaremos un e-mail</p>	
                          <p>Estado: <span style="color:red">{{$param['status']}}</span></p>

                      </td>
                    </tr>
                  <tr>
                    <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; ">
					<hr>
                    <h3 style="color:red"><b> <center>Detalle de tu pedido:</center></b></h3>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        @foreach (session()->get('cart') as $key)
                          @if($key['cantidad']>0)
                          <tr>
                              <td >
                                  <img src="{{asset('img/'.$key['img'].'')}}" alt="" style="max-width:150px ">
                              </td>
                              <td>
                                <h4>{{$key['nombre']}}</h4>
                                <p>Cantidad: {{$key['cantidad']}}</p>	
                                <p>Precio: {{$key['precio']}}</p>	
                                <p>Tela: {{$key['tela']}}</p>	
                                <p>Talla: {{$key['talla']}}</p>
                                </div>
          
                              </td>
                          </tr>
                          @endif
                        @endforeach
                        </table>

                    </td>
                  </tr>
                    <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; ">
					<h3 style="color:red"><b> <center>Información de entrega:</center></b></h3>
						<h4>Dirección:{{$param['direccion']}}</h4>
						<hr>
						<p style="font-size:.7rem;padding:.5rem;border:1px solid #AAA;background:#EEE">En Alta Moda estamos comprometidos con tu seguridad y la de nuestros colaboradores.
Hemos implementado protocolos para que el envío de tus productos sea seguro, por esta razón se podrían presentar demoras en los procesos habituales de despacho. En caso exista algún retraso en la entrega, nos comunicaremos contigo oportunamente.</p>
     
				  </tr>
				  
				<tr>
                  <td align="left" bgcolor="#ffffff">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                      <tr>
                        <td  bgcolor="#ffffff" style="padding: 12px;">
                          <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; ">
                    <p style="margin: 0;">Para cualquier soporte comunicarse al siguiente <a href="mail:alexaguilar281@gmail.com" >Correo Electrónico </a></p>
                  </td>
                </tr>
              
                <tr>
                  <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px;  border-bottom: 3px solid #d4dadf">
                    <p style="margin: 0;">Admin Alta Moda,<br> Soporte</p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="center" bgcolor="#e9ecef" style="padding: 24px;">
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                  <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
                    <p style="margin: 0;">Recibió este correo electrónico por que acaba de cancelar en altamoda.pe</p>
                  </td>
                </tr>
                <tr>
                  <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
                    <p style="margin: 0;">Lima, Perú</p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </body>
</html>  