 
<a href="https://api.whatsapp.com/send?phone={{$data['company']['whatsapp']}}&text=Buen día, estoy interesado" title="Whatsapp " target=_blank>
    <img src="{{asset('img/wsp1.png')}}" class="wsp1 d-none d-sm-block animate-wsp1" id="wsp1">
    <img src="{{asset('img/whatsapp.png')}}" class="wsp2 d-block d-sm-none">
</a>
  <!-- Footer -->
  <footer class="bg3 p-t-75 p-b-32">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            ALTA MODA
          </h4>

          <ul>
            <li class="p-b-10">
              <a href="{{route('about.index')}}/" class="stext-107 cl7 hov-cl1 trans-04">
                Nosotros
              </a>
            </li>

            <li class="p-b-10">
              <a href="{{route('about.show','terminos-y-condiciones')}}/" class="stext-107 cl7 hov-cl1 trans-04">
                Términos y Condiciones 
              </a>
            </li>
            <li class="p-b-10">
              <a href="{{route('about.show','politica-de-privacidad')}}/" class="stext-107 cl7 hov-cl1 trans-04">
               Política de Privacidad
              </a>
            </li>

          </ul>
          <br><br>
          <div class="social menu_social">
            <ul class="d-flex flex-row align-items-center justify-content-start">
                    <li><a href="{{$data['company']['facebook']}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="{{$data['company']['instagram']}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="{{$data['company']['youtube']}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            SERVICIO AL CLIENTE
          </h4>

          <ul>
            <li class="p-b-10">
              <a href="{{route('about.show','formas-de-envio')}}/" class="stext-107 cl7 hov-cl1 trans-04">
               Formas de envío
              </a>
            </li>


            <li class="p-b-10">
              <a href="{{route('about.show','cambio-y-devoluciones')}}/" class="stext-107 cl7 hov-cl1 trans-04">
                Cambios y devoluciones
              </a>
            </li>

            <li class="p-b-10">
              <a href="{{route('about.show','preguntas-frecuentes')}}/" class="stext-107 cl7 hov-cl1 trans-04">
                Preguntas frecuentes
              </a>
            </li>

            <li class="p-b-10">
              <a href="{{route('perfil.index')}}" class="stext-107 cl7 hov-cl1 trans-04">
                Mis Pedidos
              </a>
            </li>
          </ul>
        </div>

        <div class="col-sm-6 col-lg-3 p-b-50">
          <p class="stext-301 cl0 p-b-30">
           CONTÁCTANOS
          </p>

          <p class="stext-107 cl7 size-201">
           ¿Tienes preguntas y sugerencias?
          </p>
          <p class="stext-107 cl7 size-201">
            <b>{{$data['contact']['email']}}</b>
          </p>
          <br>
          <p class="stext-107 cl7 size-201">
            ¿Necesitas ayuda? Llámanos.
          </p>
          <p class="stext-107 cl7 size-201">
            <b>{{$data['contact']['phone']}}</b>
          </p>
          <p class="stext-107 cl7 size-201">
            <b>{{$data['contact']['mobile'] }}</b>
          </p>
        </div>

        <div class="col-sm-6 col-lg-3 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            ESTAMOS AQUÍ PARA TÍ
          </h4>
          <p class="stext-107 cl7 size-201">Lunes - Domingo 10:00am - 07:00pm</p>
          <hr>
          <h4 class="stext-301 cl0 p-b-30">
            Medios de Pago
          </h4>
        <div class="flex-c-m flex-w p-b-18">
          <a href="#" class="m-all-1">
            <img src="{{asset('img/icons/icon-pay-01.png')}}" alt="ICON-PAY">
          </a>

          <a href="#" class="m-all-1">
            <img src="{{asset('img/icons/icon-pay-02.png')}}" alt="ICON-PAY">
          </a>

          <a href="#" class="m-all-1">
            <img src="{{asset('img/icons/icon-pay-03.png')}}" alt="ICON-PAY">
          </a>

          <a href="#" class="m-all-1">
            <img src="{{asset('img/icons/icon-pay-04.png')}}" alt="ICON-PAY">
          </a>

          <a href="#" class="m-all-1">
            <img src="{{asset('img/icons/icon-pay-05.png')}}" alt="ICON-PAY">
          </a>
        </div>

        </div>
      </div>

      <div class="p-t-40">
 

        <p class="stext-107 cl6 txt-center">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
 --><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

 Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Alta Moda


        </p>
      </div>
    </div>
  </footer>


  <!-- Back to top -->
  <div class="btn-back-to-top" id="myBtn">
    <span class="symbol-btn-back-to-top">
      <i class="fa fa-angle-up"></i>
    </span>
  </div>
