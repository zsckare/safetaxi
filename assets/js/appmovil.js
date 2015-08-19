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

function solicitarTaxi(id_cliente,latitud,longitud) {

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
	
	ajax.send("id="+id_cliente+"&longitud="+longitud+"&latitud="+latitud);


		 	
}


