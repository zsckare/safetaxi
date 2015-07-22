<?php
	if (isset($_POST['nombre'])) {
		$consulta = new DriverModel();
		return $consulta->update([
			
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
			"imagen"=> $_POST['imagen'],
			"id"=>$_POST['id']
			]);
	}
 ?>
<section class="padding-largo" >
	<div class="row">
		<div class="row">
					<h3 class="center-align">Editar Informacion del Taxista</h3>
				</div>
				<div class="row">
					<?php foreach ($values as $row) {?>
					<form action="" method="POST" class="col s12 m12 l12">
						<div class="row">
							<div class="input-field col s12  m4 l4">
								<input id="nom" type="text" class="validate" name="nombre" value="<?=$row["name_driver"]; ?>" required>
	         				 <label for="nom">Nombre</label>
							</div>
							<div class="input-field col s12  m4 l4">
								<label for="ap" >Apellido Paterno</label>
								<input id="ap" type="text" name="paterno" value="<?=$row["paterno_driver"]; ?>" required>
							</div>
							<div class="input-field col s12  m4 l4">
								<label for="am" >Apellido Materno</label>
								<input id="am" type="text" name="materno" value="<?=$row["materno_driver"]; ?>" required>
							</div>
						</div><!--Nombre-->
						<input type="hidden"value="<?=$row["id_driver"]; ?>" name="id">
						<div class="row">
							<div class="input-field col s12 m4 l4 " >
								<input id="nom" type="text" name="calle" value="<?=$row["calle"]; ?>" required>
	         				 <label for="nom">Calle</label>
							</div>
							<div class="input-field col s12 m4 l4 ">
								<label for="ap" >Colonia/Fraccionamiento</label>
								<input id="ap" type="text" name="colonia" value="<?=$row["colonia"]; ?>" required>
							</div>
							<div class="input-field col s12  m4 l4">
								<label for="am" >Numero</label>
								<input id="am" type="text" name="numero" value="<?=$row["numero"]; ?>" required>
							</div>
						</div><!--Datos Generales-->
						
						<div class="row">
							<div class="input-field col s12 m6 l6 " >
								<input id="nom" type="email" name="correo" value="<?=$row["emails_driver"]; ?>" required>
	         				 <label for="nom">Correo Electronico</label>
							</div>
							<div class="input-field col s12 m6 l6 ">
								<label for="ap" >Telefono</label>
								<input id="ap" type="text" name="telefono" value="<?=$row["phone_driver"]; ?>" required>
							</div>
						</div><!--Mas Generales-->
						<div class="row">
							<div class="input-field col s12 m6 l6">
								<label for="code">Codigo del Taxi</label>
								<input type="text" name="taxicode" value="<?=$row["code_taxi"]; ?>" id="code">
							</div>
							<div class="input-field col s12 m6 l6">
								<label for="placa">Placas</label>
								<input type="text" name="placas" value="<?=$row["placas_taxi"]; ?>" id="placa" >
							</div>
						</div>
						<div class="row">
							<div class="input-field col s8 m8 l8">
								<label for="pass">Nombre de la imagen</label>
								<input type="text" name="imagen" value="<?=$row["image_driver"]; ?>" id="pass">
							</div>
							<div class="col s4 m4 l4">
								<a href="/drivers/upload" class="btn" target="_blank">Subir Foto</a>
							</div>
						</div>
						<div class="row">
							<div class="center-align">
								<input type="submit" value="Actualizar" class="light-blue accent-2 btn"  >
							</div>
						</div>
					</form>
					<?php } ?>
				</div>
			
	</div>
</section>