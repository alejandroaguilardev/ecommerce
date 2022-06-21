/*
*Header
*/
$('#header').submit(function(e){ 
  e.preventDefault();
  let form = document.getElementById("header");
  let formData = new FormData(document.getElementById("header"));
  sendAjax(form.method,form.action,formData,form.name,null);
});

/*
*footer
*/
$('#footer').submit(function(e){ 
  e.preventDefault();
  let form = document.getElementById("footer");
  let formData = new FormData(document.getElementById("footer"));
  sendAjax(form.method,form.action,formData,form.name,null);
});