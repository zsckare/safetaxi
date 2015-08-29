<div class="row padding-largo mostrar" id="panelservicios">
	<div class="row"><h4 class="center-align">Servicios Disponibles</h4></div>
	<div id="tablebody" class="row"></div>
</div>
<input type="hidden" id="libre" value="1">
<div id="cortina" class="no-mostrar" onclick="ocultar();"></div>
<div id="modalespera" class="no-mostrar mapa"  >
	<div class="row">	<div id="map" class=""></div></div>
	<div class="row" id="btntake">
	</div>
</div>

<div id="servicioactivo" class="no-mostrar ">
	<div class="row card">
		<div class="row"></div>
		<div class="row"></div>
		<div class="row"></div>
		<div class="row">
			<div class="row">
				<div class="col s4 offset-s8 btn red">panic</div>
			</div>
			<div class="row"></div>
			<div class="row"></div>
			<div class="row"></div>
			<div class="row" >
				<div class="center-align">
					<div class="hexdots-loader">			  
					</div>
				</div>
			</div>
			<div class="row"></div>
			<div class="row"></div>
			<div class="row"></div>
			<div class="row">
				<div class="center-align">
					<div class="btn" onclick="terminarservicio();">Terminar Servicio</div>
				</div>
			</div>
		</div>
	</div>
</div>
<input type="hidden" id="latitud">
<input type="hidden" id="longitud">
<input type="hidden" id="milatitud">
<input type="hidden" id="milongitud">

<script>
iddriver="<?= $_SESSION['id_user'];?>"
setInterval('main()',3000);
function main () {
libre=document.getElementById('libre').value;
if (libre==1) {
getServicios(iddriver);
};
}
</script>