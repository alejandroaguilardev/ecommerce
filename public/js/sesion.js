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