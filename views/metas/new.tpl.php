<?php

	if (isset($_POST['titulo'])) {
		$consulta = new MetasModel();
		return $consulta->create([
			"titulo"=> $_POST['titulo'],
			"desc"=> $_POST['desc'],
			"pri"=> $_POST['pri']

			]);
	}

?>

<section class="padding-largo" >
	<div class="row">
		<div class="row">
					<h3 class="center-align">Registrar Nueva Meta</h3>
				</div>
				<div class="row">
					<form action="" method="POST" class="col s12 m12 l12">
						<div class="row">
							<div class="input-field col s12  m4 l4">
								<input id="nom" type="text" class="validate" name="titulo" required>
	         				 <label for="nom">Titulo</label>
							</div>
							<div class="input-field col s12  m4 l4">
								<label for="ap" >Descripcion</label>
								<input id="ap" type="text" name="desc" required>
							</div>
							<div class="input-field col s12  m4 l4">
								<label for="am" >Prioridad</label>
								<input id="am" type="text" name="pri" required>
							</div>
						</div><!--Nombre-->

			
						
			
					
						<div class="row">
							<div class="center-align">
								<input type="submit" value="registrar" class="light-blue accent-2 btn"  >
							</div>
						</div>
					</form>
				</div>
			
	</div>
</section>