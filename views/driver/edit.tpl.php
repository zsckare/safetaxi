<?php
		header("Access-Control-Allow-Origin: *");     
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE"); 
	if (isset($_POST['password'])) {
		$consulta = new DriverModel();
			return $consulta->update([
				"id_driver"=>$_POST['id_driver'],
				"name_driver"=> $_POST['nombre'],
				"paterno_driver"=> $_POST['paterno'],
				"materno_driver"=> $_POST['materno'],
				"emails_driver"=> $_POST['correo'],
				"image_driver"=> $_POST['imagen'],
				"phone_driver"=> $_POST['telefono'],
				"code_taxi"=> $_POST['taxicode'],
				"placas_taxi"=> $_POST['placas'],
				"calle"=> $_POST['calle'],
				"colonia"=> $_POST['colonia'],
				"numero"=> $_POST['numero'],
				"password"=>$_POST['password'],
				"tipo_auto"=>$_POST['tipo_auto'],
				"sindical"=>$_POST['sindical'],
				"base"=>$_POST['base']
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
					<div class="input-field col s12  m2 l2">
						<input id="nom" type="text" class="validate" name="nombre" value="<?=$row["name_driver"]; ?>" required>
						<label for="nom">Nombre</label>
					</div>
					<div class="input-field col s12  m2 l2">
						<label for="ap" >Apellido Paterno</label>
						<input id="ap" type="text" name="paterno" value="<?=$row["paterno_driver"]; ?>" required>
					</div>
					<div class="input-field col s12  m2 l2">
						<label for="am" >Apellido Materno</label>
						<input id="am" type="text" name="materno" value="<?=$row["materno_driver"]; ?>" required>
					</div>
					<div class="input-field col s12 m3 l3 " >
						<input id="nom" type="email" name="correo" value="<?=$row["emails_driver"]; ?>" required>
						<label for="nom">Correo Electronico</label>
					</div>
					<div class="input-field col s12 m3 l3 ">
						<label for="ap" >Telefono</label>
						<input id="ap" type="text" name="telefono" value="<?=$row["phone_driver"]; ?>" required>
					</div>
					</div><!--Nombre-->
					<input type="hidden"value="<?=$row["id_driver"]; ?>" name="id_driver">
					<input type="hidden"value="<?=$row["base"]; ?>" name="base">
					<input type="hidden"value="<?=$row["sindical"]; ?>" name="sindical">
					<input type="hidden"value="<?=$row["tipo_auto"]; ?>" name="tipo_auto">
					<div class="row">
						<div class="input-field col s12 m4 l4 " >
							<input id="nom" type="text" name="calle" value="<?=$row["calle"]; ?>" required>
							<label for="nom">Calle</label>
						</div>
						<div class="input-field col s12  m4 l4">
							<label for="ap" >Colonia/Fraccionamiento</label>
							<input id="ap" type="text" name="colonia" value="<?=$row["colonia"]; ?>" required>
						</div>
						<div class="input-field col s12  m4 l4">
							<label for="am" >Numero</label>
							<input id="am" type="text" name="numero" value="<?=$row["numero"]; ?>" required>
						</div>
						
						</div><!--Datos Generales-->
						<div class="row">
							<div class="input-field col s12 m3 l3">
								<label for="code">Numero Economico</label>
								<input type="text" name="taxicode" value="<?=$row["code_taxi"]; ?>" id="code">
							</div>
							<div class="input-field col s12 m3 l3">
								<label for="placa">Placas</label>
								<input type="text" name="placas" value="<?=$row["placas_taxi"]; ?>" id="placa" >
							</div>
							<div class=" input-field col s12 m3 l3">
								<select class="browser-default" name="tipoauto">
									<option value="" disabled selected>Seleccione un Auto</option>
									
								</select>
							</div>
							<div class=" input-field col s12 m3 l3">
								<select class="browser-default" name="basenueva">
									<option value="" disabled selected>Seleccione una Base</option>
									
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col s2 m2 l2">
								<label for="">Seleccionar Foto</label>
								<input type="text" name="imagen" value="<?=$row["image_driver"]; ?>" id="imagenoculta">
							</div>
							<div onclick="ocultareldiv()" id="cortina" class="no-mostrar"></div>
							<div id="modal" style="display:none">
								<div id="cont-modal">
									<h3>Seleccionar Imagen</h3>
									<div class="imagenes">
										<div class="row">
											
											<?php foreach ($fotos as $foto) {?>
											<div class="col s3 m3 l3">
												<img src="<?=$foto["ruta"]; ?>" alt="" class="responsive-img hand" style="cursor:pointer;" onclick="selectImage(<?=$foto["id_foto"]; ?>)">
											</div>
											<?php } ?>
											
										</div>
									</div>
								</div>
							</div>
							<div class="col s12 m2 l2 ">
								<div class="btn waves-effect waves-light light-blue darken-1 " onclick="mostrareldiv();" id="btn-fotos">Foto </div>
							</div>
							<div class="input-field col s4 m4 l4">
								<label for="pass">Contraseña</label>
								<input type="password" name="password" id="pass" value="<?=$row["password_driver"]; ?>" >
							</div>
							<div class="input-field col s4 m4 l4">
								<div class="btn-large waves-effect waves-light light-blue darken-1" onclick="generar(); false" >Generar Contraseña</div>
							</div>
						</div>
						<div class="row">
							<div class="center-align">
								<input type="submit" value="Actualizar" class="primary-dark btn"  >
							</div>
						</div>
					</form>
					<?php } ?>
				</div>
				
			</div>
		</section>