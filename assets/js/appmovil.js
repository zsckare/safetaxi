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


function localize()
		{
			console.log("---!!!---");
			/* Si se puede obtener la localización */
		 	if (navigator.geolocation)
			{
                navigator.geolocation.getCurrentPosition(mapa,error);
            }
            /* Si el navegador no soporta la recuperación de la geolocalización */
            else
            {
                alert('¡Oops! Tu navegador no soporta geolocalización.');
            }
		}

		function mapa(pos)
		{
			/* Obtenemos los parámetros de la API de geolocalización HTML*/
			var latitud = pos.coords.latitude;
			var longitud = pos.coords.longitude;
			var precision = pos.coords.accuracy;

			/* A través del DOM obtenemos el div que va a contener el mapa */
			var contenedor = document.getElementById("map");

			/* Posicionamos un punto en el mapa con las coordenadas que nos ha proporcionado la API*/
			var centro = new google.maps.LatLng(latitud,longitud);

			/* Definimos las propiedades del mapa */
			var propiedades =
			{
                zoom: 17,
                center: centro,
                mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			/* Creamos el mapa pasandole el div que lo va a contener y las diferentes propiedades*/
			var map = new google.maps.Map(contenedor, propiedades);

			/* Un servicio que proporciona la API de GM es colocar marcadores sobre el mapa */
			var marcador = new google.maps.Marker({
                position: centro,
                map: map,
                title: "Tu localizacion"
            });
		}

		/* Gestion de errores */
		function error(errorCode)
		{
			if(errorCode.code == 1)
				alert("No has permitido buscar tu localizacion")
			else if (errorCode.code==2)
				alert("Posicion no disponible")
			else
				alert("Ha ocurrido un error")
		}
 