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

function getDataDriver(id_driver) {
	url="http://yoi.dev/api/driver/?id=";
	url+=id_driver;
	console.log("Ejecutando getDataDriver");
	console.log("url"+url);
	var nombre = null;
	var foto =null;
	var lat=null;
	var lon=null;
	var telefono=null;
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
formato(nombre,foto,telefono);

	});
}

function formato (nombre,foto,telefono) {
	console.log("ruta"+foto+" nombre "+nombre);
	ruta = "http://" + window.location.hostname+foto;
	img="<img src=" +ruta +' alt="" class="responsive-img" style="margin-top:15px;">';
	datos="<p>"+nombre+"</p>"+"<p>"+telefono+"</p>"

	$("#fotodriver").html(img);
	$("#nombredriver").html(datos);
	$("#modalincoming").removeClass("no-mostrar");
	$("#modalincoming").addClass("mostrar");

}