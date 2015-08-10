<?php
	if (isset($_POST['add'])) {
		$dir_destino = $_SERVER['DOCUMENT_ROOT']."/assets/img/";
		$imagen_subida = $dir_destino . basename($_FILES['url']['name']);
		$imagen_lista = ROOT_RUTA. "/assets/img/" . basename($_FILES['url']['name']);
		$rutaimagen ="/assets/img/" . basename($_FILES['url']['name']);
		//Variables del metodo POST

		if(!is_writable($dir_destino)){
			echo "no tiene permisos";
		}else{
			if(is_uploaded_file($_FILES['url']['tmp_name'])){
				if (move_uploaded_file($_FILES['url']['tmp_name'], $imagen_subida)) {
					$consulta = new DriverModel();
					$consulta->subirfoto($rutaimagen);
					echo '<script>sweetAlert("Fotografia Seleccionada","", "info");</script>';
					echo '<script>window.close();</script>';

				}else{
					echo "<script>alert('Algun error en la carga intenta de Nuevo. Disculpa las molestias.')</script>";
				}
			}
			else{
				echo "<script>alert('Error al guardar el archivo probablemente muy pesado')</script>";
			}
		}
	}
?>

<section class="padding-largo" >
	<form action="" method="post" enctype="multipart/form-data">
	
		<div class="row">
			<div class="col s8 m8 l8">
				<div class="file-field input-field">
					    <div class="btn">
						    <input type="file" name="url"/>						    
						    <span>Foto</span>
						</div>						
					<input class="file-path validate" type="text"/>
					</div>
			</div>
		</div>
		<div class="row">
			<input name="add" type="submit" value="Subir la Imagen" class="btn primary-dark">
		</div>
		
	
			
	</form>

</section>