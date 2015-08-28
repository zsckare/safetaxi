<?php 
	include("conexionFB.php");
	$obj= new conect();
	$conectar= $obj-> taxis();
	$id_client= $_SESSION['id_user'];
	$ubicacion=$obj-> getAddress($id_client,$conectar);
	$miUbicacion=$obj->getMyAddress($id_client,$conectar);
?>
<div id="driver" class="card mostrar padding-largo">
	<div class="row ">
		<h4 class="center-align">Buscar Chofer</h4>
	</div>
	<div class="row"></div>
	<div class="row">
		<div class="input-field col s8 m8 l8 offset-s2">
			<label for="referencia">Referencia (Opcional)</label>
			<input type="text" id="referencia">
		</div>
	</div>
	<div class="row">
		<div class="col s8 m4 l3 offset-s2 offset-m4" style="cursor:pointer !important;" onclick="localize();" ><img src="/assets/img/btn-pedir.png" alt="" class="responsive-img"></div>
	</div>



	<input type="hidden" id="latitud" value="">
	<input type="hidden" id="longitud" value="">



	<div id="cortina" class="no-mostrar"></div>
	<div id="modalespera" class="no-mostrar card padding-largo"  >
		<div class="row">
			<p class="center-align">Esperando...</p>
		</div>
		<div class="row">
			<div class="cssload-container">
				<div class="cssload-whirlpool"></div>
			</div>
		</div>
		<div class="row"></div>
		<div class="row">
			<div class="btn col s8 offset-s2 red" onclick="destroyService(<?=$_SESSION['id_user'];?>);">Cancelar</div>
		</div>
	</div>

<!--seccion para mostrar al usuario los datos del taxista que irá por el-->
	<div id="modalincoming" class="no-mostrar mapa">
		<div class="row">
			<div class="col s3 m3 l3" id="fotodriver" style="margin-top:10px;" >
				
			</div>
			<div class="col s6 offset-s2" id="nombredriver" >
				
			</div>
			<div class="col s6 offset-s2" id="ubicacion"></div>
		</div>
		<div class="row"><div id="map_cliente" class=""></div>
		<div class="row no-mostrar" id="panel"></div>
		</div>
		
	</div>

</div>
<input type="hidden" value="1" id="disponible">
<input type="hidden" value="<?=$_SESSION['id_user'];?>" id="id_cliente">
<script src="/assets/js/appmovil.js"></script>
<script>

var urlgeneral = "http://" + window.location.hostname;
	
		function localize()
		{
			navigator.vibrate(100);
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
            //solicitarTaxi(<?= $_SESSION['id_user']; ?>);

            modalespera();

		}

		function mapa(pos)
		{
			/* Obtenemos los parámetros de la API de geolocalización HTML*/
			var latitud = pos.coords.latitude;
			var longitud = pos.coords.longitude;
			var precision = pos.coords.accuracy;

  			var geocoder = new google.maps.Geocoder;
			//asigno los valores a sus correspondientes input
			document.getElementById("latitud").value=latitud;
			document.getElementById("longitud").value=longitud;
			console.log(""+latitud+","+longitud);
// var latlngStr = input.split(',', 2);
			input = latitud+","+longitud;
			var latlngStr = input.split(',', 2);
			var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
			geocoder.geocode({'location': latlng}, function(results, status) {
			    if (status === google.maps.GeocoderStatus.OK) {
			      if (results[1]) {
                    Materialize.toast(""+results[1].formatted_address, 4000);
			      
			        dirfisica=results[1].formatted_address;

					solicitarTaxi(<?= $_SESSION['id_user'];?>,latitud,longitud,dirfisica);

					wait(<?= $_SESSION['id_user'];?>);
					console.log("ya");
			        
			      } else {
			        window.alert('No results found');
			      }
			    } else {
			      window.alert('Geocoder failed due to: ' + status);
			    }
			  });



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
 	

function modalespera() {
	$("#cortina").removeClass("no-mostrar");
	$("#cortina").addClass("mostrar");

	$("#modalespera").removeClass("no-mostrar");
	$("#modalespera").addClass("mostrar");

}

function wait (id_cliente) {
	id=id_cliente;
	setInterval('esperando(id)',3000);
}
function esperando (id_cliente) {
	url=urlgeneral+"/api/service/?id_cliente=";
	url+=id_cliente;
	estado=document.getElementById('disponible').value;
	if (estado==1) {
	getEstado(url);
	}

	
}

function getEstado(url) {
	var ubi="<?php echo $ubicacion; ?>";
	var miubi="<?php echo $miUbicacion; ?>";
	$.getJSON(url,function(datos) {
		console.log("ejecutando get json");
		$.each(datos.services, function (i, item) {
			console.log("trayendo datos");
			console.log("disponible "+item.disponible);
			if(item.disponible==2){
				$("#modalespera").removeClass("mostrar");
				$("#modalespera").addClass("no-mostrar");
				id_driver=item.id_driver;
				document.getElementById('disponible').value=2;
				navigator.vibrate(200);
				getDataDriver(id_driver,ubi,miubi);
			}
		});
	});
}



</script>