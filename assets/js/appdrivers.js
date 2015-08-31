var urlgeneral = "http://" + window.location.hostname;
function mostrarmapa(iddriver,id_servicio,latitud,longitud) {
	console.log("!!!!!!!!!!!!");

	$("#cortina").removeClass("no-mostrar");
	$("#modalespera").removeClass("no-mostrar");
	$("#cortina").addClass("mostrar");
	$("#modalespera").addClass("mostrar");

    document.getElementById('latitud').value=latitud;
    document.getElementById('longitud').value=longitud;

	localize();
	btn='<div class="col s5 offset-s3 btn" onclick="tomarservicio('+iddriver+","+id_servicio+');">Aceptar</div><div class="col s2 offset-s1 btn red" onclick="ocultar();">X</div>';
	$('#btntake').html(btn);
}

function ocultar () {
	$("#cortina").removeClass("mostrar");
	$("#modalespera").removeClass("mostrar");
	$("#cortina").addClass("no-mostrar");
	$("#modalespera").addClass("no-mostrar");
}
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

	document.getElementById('milatitud').value=latitud;
	document.getElementById('milongitud').value=longitud;

latitudservicio=parseFloat(document.getElementById('latitud').value);
longitudservicio=parseFloat(document.getElementById('longitud').value);

console.log("latitud "+latitudservicio+" longitud"+longitudservicio);
			/* A través del DOM obtenemos el div que va a contener el mapa */
var contenedor = document.getElementById("map");

			/* Posicionamos un punto en el mapa con las coordenadas que nos ha proporcionado la API*/
var centro = new google.maps.LatLng(latitud,longitud);
var servicio = new google.maps.LatLng(latitudservicio,longitudservicio);
			/* Definimos las propiedades del mapa */
	var propiedades =
	{
		zoom: 16,
		center: centro,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

/* Creamos el mapa pasandole el div que lo va a contener y las diferentes propiedades*/

	var map = new google.maps.Map(contenedor, propiedades);

	var taxi ='/assets/img/marcadormaps.png';
	var mark = new google.maps.Marker({
        position: centro,
        map: map,
        title: "Tu localizacion",
        icon: taxi
    });

	var marcador = new google.maps.Marker({
        position: servicio,
        map: map,
        title: "Cliente"
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
function tomarservicio(id_driver,id_service) {
	document.getElementById('libre').value=0;
	val = document.getElementById('libre').value;
	console.log("libre 2"+val);

	milatitud=document.getElementById('milatitud').value;
	milongitud=document.getElementById('milongitud').value;
	console.log("lat "+milatitud+" lon "+milongitud);
	//$("#terminarservicio").removeClass("no-mostrar");
	//$("#terminarservicio").addClass("mostrar");
	var ajax = new XMLHttpRequest();
	uri=urlgeneral+"/service/tomarServico";
	ajax.open("POST",uri,true);
	ajax.onreadystatechange=function () {
		if (ajax.readyState==4){
			console.log("----");
			$("#modalespera").removeClass('mostrar');
			$("#modalespera").addClass('no-mostrar');
			activo(id_service);
  		}
	}
	  	
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	
	ajax.send("id_driver="+id_driver+"&id_servicio="+id_service+"&lat_driver="+milatitud+"&lon_driver="+milongitud);



}

function activo (id_servicio) {
	

	$("#panelservicios").removeClass('mostrar');
	$("#panelservicios").addClass("no-mostrar");	
	$("#servicioactivo").removeClass('no-mostrar');
	$("#servicioactivo").addClass("mostrar");
}
function terminarservicio () {
	$("#cortina").removeClass('mostrar');
	$("#cortina").addClass("no-mostrar");

	$("#panelservicios").removeClass('no-mostrar');
	$("#panelservicios").addClass("mostrar");

	$("#servicioactivo").removeClass('mostrar');
	$("#servicioactivo").addClass("no-mostrar");

	window.location=urlgeneral+"/app/servicesdriver";
}
