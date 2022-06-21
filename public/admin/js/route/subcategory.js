/*
*CARGAR REGISTROS
*/

/*
*NUEVO
*/
$('#new_record').submit(function(e){ 
  e.preventDefault(); 
  let form = document.getElementById("new_record");
  let formData = new FormData(document.getElementById("new_record"));
  sendAjax(form.method,form.action,formData,"","new");
});


/*
*ACTUALIZAR
*/
$('#update_record').submit(function(e){ 
  e.preventDefault();
  let form = document.getElementById("update_record");
  let formData = new FormData(document.getElementById("update_record"));
  sendAjax(form.method,form.action,formData,"","update");
});

const updateUser=(id,name,description,img)=>{
  let route_project = document.getElementById("route_project").value;
  document.getElementById("update_id").value  = id;
  document.getElementById("update_name").value  = name
  document.getElementById("update_description").value  = description;
  if(img==null || img=="" || img == 'null'){document.getElementById("update_category_img").src = "img/vacio.jpg";}
  else{document.getElementById("update_category_img").src = route_project+"img/"+img;}
}

/*
*ELIMINAR
*/
$('#delete_record').submit(function(e){ 
  e.preventDefault(); 
  let form = document.getElementById("delete_record");
  let formData = new FormData(document.getElementById("delete_record"));
  sendAjax(form.method,form.action,formData,"","delete");
});


