

/*
	* SESION USUARIO
*/
const login=(url) => {
	let form = $("#login").serialize();

	 $.ajax({
   		type:'POST',
		url:url,
  		data: form,
        success: function (data) {
         let jsonData = JSON.parse(data);
            if (jsonData.success == "1"){
    	        console.log('Submission was successful.');
              document.getElementById("alertLogin").innerHTML = jsonData['data']['alert'];
    		      window.location="home";
            }
            else{document.getElementById("alertLogin").innerHTML = jsonData['data']['alert'];}
        },
        error: function (data) {document.getElementById("alertLogin").innerHTML = jsonData['data']['alert'];},
	 });
}

const register=(url) => {
	let form = $("#new_register").serialize();

	 $.ajax({
   		type:'POST',
		url:url,
  		data: form,
		success: function (data) {
         let jsonData = JSON.parse(data);

            if (jsonData.success == "1"){document.getElementById("alert").innerHTML = jsonData['data']['alert'];}
            else{console.log('An error occurred.');document.getElementById("alert").innerHTML = jsonData['data']['alert'];}
        },
        error: function (data) {
    			document.getElementById("alert").innerHTML = jsonData['data']['alert'];
        },
	 });
}
/*
* USUARIOS PARAM COMPROBAR
*/
const passwordRepeat=()=>{
	let password = $('#password').val();
	let password2 = $('#password2').val();
	if(password!=password2){
	    document.getElementById("error_password").innerHTML   = "<span class='fa fa-exclamation-triangle  '> la contraseña no es la misma </span> "
	    document.getElementById("button").disabled    = true
	}else{
	    document.getElementById("error_password").innerHTML   = ""
	    document.getElementById("button").disabled   = false
	}
}
