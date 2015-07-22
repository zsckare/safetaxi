<?php
	if (isset($_POST['nombre'])) {
		$consulta = new DriverModel();
		return $consulta->create([
			"nombre"=> $_POST['nombre'],
			"paterno"=> $_POST['paterno'],
			"materno"=> $_POST['materno'],
			"calle"=> $_POST['calle'],
			"colonia"=> $_POST['colonia'],
			"numero"=> $_POST['numero'],
			"correo"=> $_POST['correo'],
			"telefono"=> $_POST['telefono'],
			"taxicode"=> $_POST['taxicode'],
			"placas"=> $_POST['placas'],
			"password"=> $_POST['password']
			]);
	}
 ?>

<section class="padding-largo" >
	<div class="row">
		<div class="row">
					<h3 class="center-align">Registrar Nuevo Taxista</h3>
				</div>
				<div class="row">
					<form action="" method="POST" class="col s12 m12 l12">
						<div class="row">
							<div class="input-field col s12  m4 l4">
								<input id="nom" type="text" class="validate" name="nombre" required>
	         				 <label for="nom">Nombre</label>
							</div>
							<div class="input-field col s12  m4 l4">
								<label for="ap" >Apellido Paterno</label>
								<input id="ap" type="text" name="paterno" required>
							</div>
							<div class="input-field col s12  m4 l4">
								<label for="am" >Apellido Materno</label>
								<input id="am" type="text" name="materno" required>
							</div>
						</div><!--Nombre-->

						<div class="row">
							<div class="input-field col s12 m4 l4 " >
								<input id="nom" type="text" name="calle" required>
	         				 <label for="nom">Calle</label>
							</div>
							<div class="input-field col s12 m4 l4 ">
								<label for="ap" >Colonia/Fraccionamiento</label>
								<input id="ap" type="text" name="colonia" required>
							</div>
							<div class="input-field col s12  m4 l4">
								<label for="am" >Numero</label>
								<input id="am" type="text" name="numero" required>
							</div>
						</div><!--Datos Generales-->
						
						<div class="row">
							<div class="input-field col s12 m6 l6 " >
								<input id="nom" type="email" name="correo" required>
	         				 <label for="nom">Correo Electronico</label>
							</div>
							<div class="input-field col s12 m6 l6 ">
								<label for="ap" >Telefono</label>
								<input id="ap" type="text" name="telefono" required>
							</div>
						</div><!--Mas Generales-->
						<div class="row">
							<div class="input-field col s12 m6 l6">
								<label for="code">Codigo del Taxi</label>
								<input type="text" name="taxicode" id="code">
							</div>
							<div class="input-field col s12 m6 l6">
								<label for="placa">Placas</label>
								<input type="text" name="placas" id="placa" >
							</div>
						</div>
						<div class="row">
							<div class="input-field col s8 m8 l8">
								<label for="pass">Contraseña</label>
								<input type="password" name="password" id="pass">
							</div>
							<div class="input-field col s4 m4 l4">
								<div class="btn" onclick="generar(); false" >Generar Contraseña</div>
							</div>
						</div>
						<div class="row">
							<div class="center-align">
								<input type="submit" value="registrar" class="light-blue accent-2 btn"  >
							</div>
						</div>
					</form>
				</div>
			
	</div>
</section>