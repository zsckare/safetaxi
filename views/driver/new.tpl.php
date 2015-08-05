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
			"password"=> $_POST['password'],
			"tipo_auto"=> $_POST['tipo_auto']
			]);
	}
 ?>

<section class="padding-largo" >
	<div class="row">
		<div class="row" >
					<h3 class="center-align" style="margin-top:-5px !important;">Registrar Nuevo Taxista</h3>
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
								<input id="calle" type="text" name="calle" required>
	         				 <label for="calle">Calle</label>
							</div>
							<div class="input-field col s12 m4 l4 ">
								<label for="fracc" >Colonia/Fraccionamiento</label>
								<input id="fracc" type="text" name="colonia" required>
							</div>
							<div class="input-field col s12  m4 l4">
								<label for="num" >Numero</label>
								<input id="num" type="text" name="numero" required>
							</div>
						</div><!--Datos Generales-->
						
						<div class="row">
							<div class="input-field col s12 m4 l4 " >
								<input id="mail" type="email" name="correo" required>
	         				 <label for="mail">Correo Electronico</label>
							</div>
							<div class="input-field col s12 m4 l4 ">
								<label for="tel" >Telefono</label>
								<input id="tel" type="text" name="telefono" required>
							</div>
							<div class=" input-field col s12 m4 l4">
								<select class="browser-default" name="tipo_auto">
								<option value="" disabled selected>Seleccione un Auto</option>
									<?php foreach ($values as $row) {?>
										<option value="<?=$row["marca"]; ?>"><?=$row["marca"]; ?></option>
									<?php } ?>
								</select>
							</div>
						</div><!--Mas Generales-->

						<div class="row">
							<div class="input-field col s12 m3 l3">
								<label for="code">Codigo del Taxi</label>
								<input type="text" name="taxicode" id="code">
							</div>
							<div class="input-field col s12 m3 l3">
								<label for="placa">Placas</label>
								<input type="text" name="placas" id="placa" >
							</div>
							<div class="input-field col s12 m3 l3">
								<label for="pass">Contraseña</label>
								<input type="password" name="password" id="pass" disabled>
							</div>
							<div class="input-field col s12 m3 l3">
								<div class="btn-large waves-effect waves-light light-blue darken-1" onclick="generar(); false" >Generar Contraseña</div>
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