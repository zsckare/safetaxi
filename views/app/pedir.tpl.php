<div id="driver" class="card mostrar padding-largo">
	<div class="row ">
		<h4 class="center-align">Buscar Chofer</h4>
	</div>

	<div class="row"></div>
	<div class="row"></div>
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
	</div>
</div>
<script>

	
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
            //solicitarTaxi(<?= $_SESSION['id_user']; ?>);

            modalespera();

		}

		function mapa(pos)
		{
			/* Obtenemos los parámetros de la API de geolocalización HTML*/
			var latitud = pos.coords.latitude;
			var longitud = pos.coords.longitude;
			var precision = pos.coords.accuracy;
			//asigno los valores a sus correspondientes input
			document.getElementById("latitud").value=latitud;
			document.getElementById("longitud").value=longitud;
			console.log(""+latitud+","+longitud);
			solicitarTaxi(<?= $_SESSION['id_user'];?>,latitud,longitud);

			esperando(<?= $_SESSION['id_user'];?>);
			console.log("ya");
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


function esperando (id_cliente) {
	url="http://yoi.dev/api/service/?id_cliente=";
	url+=id_cliente;
	setInterval('getEstado(url)',3000);

	
}

function getEstado(url) {
	$.getJSON(url,function(datos) {
		console.log("ejecutando get json");
		$.each(datos.services, function (i, item) {
			console.log("trayendo datos");
			console.log("disponible "+item.disponible);
			if(item.disponible==2){
				traerDatosDriver();
			}
		});
	});
}
</script>