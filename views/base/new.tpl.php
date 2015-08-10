<?php
	if (isset($_POST['nombre'])) {
		$consulta = new BaseModel();
		return $consulta->create([
			
			"nombre"=> $_POST['nombre']
			]);
	}
 ?>

<section class="padding-largo" >
	<div class="row">
		<div class="row" >
					<h3 class="center-align" style="margin-top:-5px !important;">Registrar Nueva Base</h3>
				</div>
				<div class="row">
					<form action="" method="POST" class="col s12 m12 l12">
						<div class="row">
							<div class="input-field col s12  m6 l6 offset-m3 offset-l3">
								<input id="nom" type="text" class="validate" name="nombre" required>
	         				 <label for="nom">Nombre de la Base</label>
							</div>
						</div>

						<div class="row">
							<div class="center-align">
								<input type="submit" value="registrar" class="light-blue darken-3 btn-large"  >
							</div>
						</div>
					</form>
				</div>
			
	</div>
</section>