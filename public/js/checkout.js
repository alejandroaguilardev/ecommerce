const provinces=(selectObject) => {
  let id = selectObject.value;  
  let route_dominio = document.getElementById("route_dominio").value;
  $.ajax({ 
 	type:"post",
	url:route_dominio+"checkout/provincias/"+id,
	data:"",
  	success: function (data) {
       let jsonData = JSON.parse(data);
       let texto="";
          if (jsonData.success == "1"){
	          for (let i in jsonData['param']) {
	               texto+=`<option value="${jsonData['param'][i].province}" >${jsonData['param'][i].name}</option>`;
	           }
            texto+=`<option disabled selected>Seleccione una Provincia</option>`;
	       	 document.getElementById("provincias").innerHTML = texto;

	    }else{
			swal("Ocurrio un error", "Vuelve a intentar", "danger");
	    }
      },
      error: function (data) {
          console.log('An error occurred server.');
      },
   });
}

const districts=(selectObject) => {
  let id = selectObject.value;  
  let route_dominio = document.getElementById("route_dominio").value;
  $.ajax({
 	type:"post",
	url:route_dominio+"checkout/distritos/"+id,
	data:"",
  	success: function (data) {
       let jsonData = JSON.parse(data);
       let texto="";
          if (jsonData.success == "1"){
	          for (let i in jsonData['param']) {
	               texto+=`<option value="${jsonData['param'][i].district}" >${jsonData['param'][i].name}</option>`;
	           }
	       	 document.getElementById("distritos").innerHTML = texto;

	    }else{
			swal("Ocurrio un error", "Vuelve a intentar", "danger");
	    }
      },
      error: function (data) {
          console.log('An error occurred server.');
      },
   });
}

function div(id){
  if(id==1){
    document.getElementById("comprobante_div1").style.display = 'block';
    document.getElementById("comprobante_div2").style.display = 'none';
    document.getElementById("comprobante_div3").style.display = 'none';
    document.getElementById("metodo").value = 'online';

  }
  if(id==2){
    document.getElementById("comprobante_div1").style.display = 'none';
    document.getElementById("comprobante_div2").style.display = 'block';
    document.getElementById("comprobante_div3").style.display = 'none';
    document.getElementById("metodo").value = 'yape';

  }
  if(id==3){
    document.getElementById("comprobante_div1").style.display = 'none';
    document.getElementById("comprobante_div2").style.display = 'none';
    document.getElementById("comprobante_div3").style.display = 'block';
    document.getElementById("metodo").value = 'deposito';
  }
}

