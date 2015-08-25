/*

$( "a" ).click(function( event ) {
  event.preventDefault();

});
*/

//variables
var geocoder;
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

//funciones del usuario

function solicitarTaxi(id_cliente,latitud,longitud,dirfisica) {

	url="http://yoi.dev/api/newservice";
	console.log(""+id_cliente+" "+latitud+","+longitud);
	var ajax = new XMLHttpRequest();
	ajax.open("POST",url,true);
	ajax.onreadystatechange=function () {
		if (ajax.readyState==4){
			console.log("!!!!!!!!!!!!!!!!");
			
		
		}
	}
	  	
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	
	ajax.send("id="+id_cliente+"&longitud="+longitud+"&latitud="+latitud+"&dirfisica="+dirfisica);


		 	
}

function getDataDriver(id_driver,ubicacion,miubicacion) {
	url="http://yoi.dev/api/driver/?id=";
	url+=id_driver;
	console.log("Ejecutando getDataDriver");
	console.log("url"+url);
	var nombre = null;
	var foto =null;
	var lat=null;
	var lon=null;
	var telefono=null;
	console.log(miubicacion+"<-- es esta");
	$.getJSON(url,function(datos){

		console.log("ejecuntando getJSON");
		$.each(datos.driver, function(i, item){	
			console.log("jalando datos");
			console.log("id_driver="+item.id_driver);
			console.log(item.nombre+" "+item.paterno+" "+item.materno);
			nombre=item.nombre+" "+item.paterno+" "+item.materno;
			foto=item.imagen;
			telefono=item.phone;
			console.log("imagen "+item.imagen);			
		});
	formato(nombre,foto,telefono,ubicacion,miubicacion);

	});
}

function formato (nombre,foto,telefono,ubicacion,miubicacion) {
	console.log("ruta"+foto+" nombre "+nombre);
	ruta = "http://" + window.location.hostname+foto;
	img="<img src=" +ruta +' alt="" class="responsive-img" >';
	datos="<p>"+nombre+"</p>"+"<p>"+telefono+"</p>";
	getAddress(ubicacion);
	getMap(miubicacion,ubicacion);
	$("#map_cliente").addClass("mostrar");
	$("#fotodriver").html(img);
	$("#nombredriver").html(datos);
	$("#modalincoming").removeClass("no-mostrar");
	$("#modalincoming").addClass("mostrar");

}
function getAddress(ubicacion) {
 		var latlngStr = ubicacion.split(',', 2);
  		var lat = parseFloat(latlngStr[0]);
  		var lng = parseFloat(latlngStr[1]);
  		var addres=null;
  		console.log("obtener direccion fisica del taxista!!!!");
  		geocoder = new google.maps.Geocoder();
  		var latlng = new google.maps.LatLng(lat, lng);
  		geocoder.geocode({'latLng': latlng}, function(results, status) {
    	console.log("-------------"+lat+" "+lng);
    	if (status == google.maps.GeocoderStatus.OK) {
      		if (results[0]) {
        		addres=(results[0].formatted_address);
        		console.log("obtener direccion del taxista!!!!"+results[0].formatted_address);
        		//$("#ubicacion").html("Ubicacion actual: "+addres);

      	} else {
        		alert('No results found');
      	}
    	} else {
      			alert('Geocoder failed due to: ' + status);
    	}
  		});
  		
	}

		function getMap(miubicacion, ubicaciontaxista){
		var centro = new google.maps.LatLng(miubicacion);
		var myOptions = {
	        zoom: 10,
	        center: centro,
	        mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	 		console.log("obtener mapa");
	 	var id_canvas=document.getElementById('map_cliente');
	    map = new google.maps.Map(id_canvas, myOptions);
		directionsDisplay = new google.maps.DirectionsRenderer();
		directionsService = new google.maps.DirectionsService();
		var panel=document.getElementById('panel');
		var request = {
		        origin: ubicaciontaxista,//direccion solo para testear ahi va ubicacion taxista
		        destination: miubicacion,
		        travelMode: google.maps.TravelMode.DRIVING,
		        unitSystem: google.maps.UnitSystem.METRIC,
		        provideRouteAlternatives: false
	    };
		directionsService.route(request, function(response, status) {
	        if (status == google.maps.DirectionsStatus.OK) {
	 	console.log("obtener ruta");

	            directionsDisplay.setMap(map);
	            directionsDisplay.setPanel(panel);
//---

var mystr="";
    for(var i in response.routes){
      var mylegs=response.routes[i].legs
      for(var j in mylegs){
        //mystr += mylegs[j].distance.text;
        mystr += " " + mylegs[j].duration.text;
      }
    Materialize.toast('Llegara en Aproximadamente en '+mystr, 20000);
    }

//---
           directionsDisplay.setDirections(response);

	        } else {
	 	console.log("lo sentimos no hay ruta");
	        /*var load= document.getElementById('load');
			load.style.display="block";
			load.style.backgroundColor=  "#f44336";
			load.innerHTML="No hay rutas disponibles.";*/
	        }
	    });
	}