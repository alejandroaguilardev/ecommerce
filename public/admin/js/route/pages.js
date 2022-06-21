/*
*Home Innicio
*/

$('#home').submit(function(e){ 
  e.preventDefault();
  let form = document.getElementById("home");
  // let slider_1 = document.getElementById("slider_1").files[0];
  // let slider_2 = document.getElementById("slider_2").files[0];
  // let slider_3 = document.getElementById("slider_3").files[0];
  // let slider_1_movil = document.getElementById("slider_1_movil").files[0];
  // let slider_2_movil = document.getElementById("slider_2_movil").files[0];
  // let slider_3_movil = document.getElementById("slider_3_movil").files[0];
  // let banner_1 = document.getElementById("banner_1").files[0];
  // let banner_2 = document.getElementById("banner_2").files[0];
  // let banner_1_movil = document.getElementById("banner_1_movil").files[0];
  // let banner_2_movil = document.getElementById("banner_2_movil").files[0];

  let formData = new FormData(document.getElementById("home"));
  // formData.append("slider_1", slider_1);
  // formData.append("slider_2", slider_2);
  // formData.append("slider_3", slider_3);
  // formData.append("slider_1_movil", slider_1_movil);
  // formData.append("slider_2_movil", slider_2_movil);
  // formData.append("slider_3_movil", slider_3_movil);
  // formData.append("banner_1", banner_1);
  // formData.append("banner_2", banner_2);
  // formData.append("banner_1_movil", banner_1_movil);
  // formData.append("banner_2_movil", banner_2_movil);
  sendAjax(form.method,form.action,formData,form.name,null);
});

/*
*About Nosotros
*/
$('#about').submit(function(e){ 
  e.preventDefault();
  let form = document.getElementById("about");
  let formData = new FormData(document.getElementById("about"));
  sendAjax(form.method,form.action,formData,form.name,null);
});
 