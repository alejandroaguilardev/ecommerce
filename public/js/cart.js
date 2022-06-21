$('#cart_product').submit(function(e){ 
  e.preventDefault();
  let form = document.getElementById("cart_product");
  // let formData = new FormData(document.getElementById("cart2020"));
  let data=  $("#cart_product").serialize();
  sendAjax(form.method,form.action,data);
});
 

const sendAjax=(type,url,data) => {
  let route_dominio = document.getElementById("route_dominio").value;
  let token_cr = document.getElementById("token_cr").value;
  $.ajax({
 	type:type,
	url:url,
	data: data,
  	success: function (data) {
       let jsonData = JSON.parse(data);
          if (jsonData.success == 1){
               let total_carrito=0;
               let total_carrito_count=0; 
               let texto='';
                  for (let i in jsonData['param']) {
                    if(jsonData['param'][i].cantidad>0){
                      total_carrito_count+=1;                      
                      total_carrito+=parseInt(jsonData['param'][i].precio) * parseInt(jsonData['param'][i].cantidad);  
                       texto+=`
                        <li class="header-cart-item flex-w flex-t m-b-12">
                          <form action="${route_dominio}carrito/${jsonData['param'][i].idproducto}${jsonData['param'][i].talla}${jsonData['param'][i].color}${jsonData['param'][i].tela_id}" method="post">
                          <input type="hidden" name="_token" value="${token_cr}"> 
                          <input type="hidden" name="_method" value="delete">
                          <button>
                              <div class="header-cart-item-img">
                                      <img src="${route_dominio}img/${jsonData['param'][i].img}" alt="${jsonData['param'][i].nombre}">
                              </div>
                            </button>
                          </form>
                       
                          <div class="header-cart-item-txt p-t-8">
                            <span style="font-size: .8rem">T: ${jsonData['param'][i].talla} / C: ${jsonData['param'][i].color} / T: ${jsonData['param'][i].tela}</span>
                            <a href="${route_dominio}productos/producto/${jsonData['param'][i].idproducto}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                             ${jsonData['param'][i].nombre}
                            </a>

                            <span class="header-cart-item-info">
                              ${jsonData['param'][i].cantidad} x s/ ${jsonData['param'][i].precio}
                            </span>
                          </div>
                        </li>

                      `;
                    }
                  }
              document.getElementById("header_cart_list").innerHTML = texto;
              document.getElementById('header_cart_count').setAttribute('data-notify', total_carrito_count);
              document.getElementById('header_cart_count_mobile').setAttribute('data-notify', total_carrito_count);
              document.getElementById("header_cart_total").innerHTML = `s/ ${total_carrito}`;
              swal("Producto Agregado",
                 "Revisa tu carrito", 
                 "success",
                  { buttons: {
                    cerrar:{text:"Seguir Comprando"},
                    pagar: {text:"Ir a  Pagar"},
                  },   
                  }).then((value) => {
                    switch (value) {
                      case "pagar":
                        window.location.href= route_dominio + 'checkout/';
                        break;
                    }
                  });
          }else{
          console.log('An error occurred server.');
          swal("Ocurrio un error", "Vuelve a intentar", "warning");
        }
      },
      error: function (data) {
          console.log('An error occurred server.');
      },
   });
}

const tela_function=(value,price) => {
  document.getElementById("tela").value=value;
  $(".tela").removeClass('tela_seleccion');
  $("#tela"+value).addClass('tela_seleccion');
  precio_tela=price;
  precio_total=parseInt(precio_producto)+parseInt(precio_talla)+parseInt(precio_tela);
  document.getElementById("precio_descuento").innerHTML="S/ "+precio_total+".00";
  document.getElementById("precio_sin_descuento").innerHTML="S/ "+(precio_total+descuento)+".00";
  $("#cart_button_disabled").css('display','block');
}
 
const talla_function=(price) => {
  precio_talla = price.value; 
  precio_talla= precio_talla.split("_");
  precio_talla=precio_talla[1];
  precio_total=parseInt(precio_producto)+parseInt(precio_talla)+parseInt(precio_tela);
  document.getElementById("precio_descuento").innerHTML="S/ "+precio_total+".00";
  document.getElementById("precio_sin_descuento").innerHTML="S/ "+(precio_total+descuento)+".00";
}