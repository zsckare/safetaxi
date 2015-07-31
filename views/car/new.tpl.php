<?php
	if (isset($_POST['marca'])) {
		$consulta = new CarModel();
		return $consulta->create([
			
			"marca"=> $_POST['marca'],
			"modelo"=> $_POST['modelo']			
			]);
	}
 ?>
 <section class="padding-largo" >
 	<div class="row">
 		<div class="col s8 m8 l8 offset-s2 offset-m2 offset-l2" >
 			<div class="row">
 				<h3 class="center-align">Agregar Nuevo Tipo de Auto</h3>
 			</div>
 			<form action="" method="POST">
 				<div class="row">
 					<div class="input-field">
 						<label for="mar">Marca</label>
 						<input type="text" name="marca"> 						
 					</div>
 				</div>
 				<div class="row">
 					<div class="input-field">
 						<label for="mod">Modelo</label>
 						<input type="text" name="modelo" >
 					</div>
 				</div>
 				<div class="row">
 					<div class="center-align">
 						<input type="submit" class="btn primary" value="Agregar">
 					</div>
 				</div>
 			</form>
 		</div>
 	</div>
 </section>