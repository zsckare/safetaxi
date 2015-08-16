<div id="account" class="card mostrar">
	<div class="row padding-largo">
		<h4 class="center-align">Mi Cuenta</h4>
	</div>
	<div class="row">
		<div class="col s4 m4 l4"><i class="ion-android-person large"></i></div>
		<div class="col s8 m8 l8">
			<?php foreach ($values as $row) { ?>
			
			<div class="row"><p class="center-align " style="font-size:1.3em !important;" ><?=$row['nombre']; ?> <?=$row['paterno']; ?> <?=$row['materno']; ?></p></div>

			<div class="row"><p class="center-align"><?=$row['correo']; ?> </p></div>
			<?php } ?>
		</div>
	</div>
	<div class="row">
		<div class="col s6 m6 l6 offset-s6">
			<div class="btn red">Eliminar Cuenta</div>
		</div>
	</div>
</div>