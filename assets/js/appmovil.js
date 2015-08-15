/*

$( "a" ).click(function( event ) {
  event.preventDefault();

});
*/


//funciones para registrar nuevo usuario
function registrar() {
		
	var ajax = new XMLHttpRequest();
	nombre=document.registro.nombre.value;
  	paterno=document.registro.paterno.value;
  	materno=document.registro.materno.value;
  	correo=document.registro.correo.value;
  	pass=document.registro.pass.value;

  	ajax.open("POST","http://yoi.dev/client/new",true);
  	ajax.onreadystatechange=function () {
  		if (ajax.readyState==4){
  			console.log("!!!!!!!!!!!!!!!!");

  		}
  	}
  	
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	//enviando los valores a registro.php para que inserte los datos
  	ajax.send("nombre="+nombre+"&paterno="+paterno+"&materno="+materno+"&correo="+correo+"&pass="+pass);

 	vaciarForm();
}

function vaciarForm() {
		alert("Registrado");
		document.registro.nombre.value="";
		document.registro.paterno.value="";
		document.registro.materno.value="";
		document.registro.correo.value="";
		document.registro.pass.value="";
}

//funciones para iniciar sesion del usuario

function showIniciarSesion() {
	console.log("mostar");

$("#registrarse").removeClass("mostrar");
$("#registrarse").addClass("no-mostrar");

$("#login").removeClass("no-mostrar");
$("#login").addClass("mostrar");
}
//acciones del menu


function menu(opcion) {
	switch(opcion) {
	    case 1:
	    	console.log("menu opcion"+opcion)
	        $("#registrarse").removeClass("no-mostrar");
			$("#registrarse").addClass("mostrar");
			$("#login").removeClass("mostrar");
			$("#login").addClass("no-mostrar");
			$("#miposicion").removeClass("mostrar");
			$("#miposicion").addClass("no-mostrar");
			$("#driver").removeClass("mostrar");
			$("#driver").addClass("no-mostrar");
			$("#account").removeClass("mostrar");
			$("#account").addClass("no-mostrar");
			$("#acerca").removeClass("mostrar");
			$("#acerca").addClass("no-mostrar");
	        break;
	    case 2:
	        console.log("menu opcion"+opcion)
	        localize();
	        $("#registrarse").removeClass("mostrar");
			$("#registrarse").addClass("no-mostrar");
			$("#login").removeClass("mostrar");
			$("#login").addClass("no-mostrar");
			$("#miposicion").removeClass("no-mostrar");
			$("#miposicion").addClass("mostrar");
			$("#driver").removeClass("mostrar");
			$("#driver").addClass("no-mostrar");
			$("#account").removeClass("mostrar");
			$("#account").addClass("no-mostrar");
			$("#acerca").removeClass("mostrar");
			$("#acerca").addClass("no-mostrar");
	        break;
	   	case 3:
	        console.log("menu opcion"+opcion)
	        $("#registrarse").removeClass("mostrar");
			$("#registrarse").addClass("no-mostrar");
			$("#login").removeClass("mostrar");
			$("#login").addClass("no-mostrar");
			$("#miposicion").removeClass("mostrar");
			$("#miposicion").addClass("no-mostrar");
			$("#driver").removeClass("no-mostrar");
			$("#driver").addClass("mostrar");
			$("#account").removeClass("mostrar");
			$("#account").addClass("no-mostrar");
			$("#acerca").removeClass("mostrar");
			$("#acerca").addClass("no-mostrar");
	        break;
	    case 4:
	        console.log("menu opcion"+opcion)
	        $("#registrarse").removeClass("mostrar");
			$("#registrarse").addClass("no-mostrar");
			$("#login").removeClass("mostrar");
			$("#login").addClass("no-mostrar");
			$("#miposicion").removeClass("mostrar");
			$("#miposicion").addClass("no-mostrar");
			$("#driver").removeClass("mostrar");
			$("#driver").addClass("no-mostrar");
			$("#account").removeClass("no-mostrar");
			$("#account").addClass("mostrar");
			$("#acerca").removeClass("mostrar");
			$("#acerca").addClass("no-mostrar");
	        break;
		case 5:
	        console.log("menu opcion"+opcion)
	        $("#registrarse").removeClass("mostrar");
			$("#registrarse").addClass("no-mostrar");
			$("#login").removeClass("mostrar");
			$("#login").addClass("no-mostrar");
			$("#miposicion").removeClass("mostrar");
			$("#miposicion").addClass("no-mostrar");
			$("#driver").removeClass("mostrar");
			$("#driver").addClass("no-mostrar");
			$("#account").removeClass("mostrar");
			$("#account").addClass("no-mostrar");
			$("#acerca").removeClass("no-mostrar");
			$("#acerca").addClass("mostrar");
	        break;
	} 	
}


//funciones para los mapas


