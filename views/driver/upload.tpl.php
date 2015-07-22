<?php
	if (isset($_POST['add'])) {
		$dir_destino = $_SERVER['DOCUMENT_ROOT']."/assets/img/";
		$imagen_subida = $dir_destino . basename($_FILES['url']['name']);
		$imagen_lista = ROOT_RUTA. "/assets/img/" . basename($_FILES['url']['name']);
		//Variables del metodo POST

		if(!is_writable($dir_destino)){
			echo "no tiene permisos";
		}else{
			if(is_uploaded_file($_FILES['url']['tmp_name'])){
				if (move_uploaded_file($_FILES['url']['tmp_name'], $imagen_subida)) {
					$consulta = new DriverModel();
					$consulta->subirfoto($imagen_lista);
					echo '<script>alert("Exito al Subir la Imagen");</script>';
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

<section >
<div class="padding-largo">
	<form action="" method="post" enctype="multipart/form-data">
	
		<div class="row">
			<div class="file-field input-field">
		      <input class="file-path validate" type="text"/>
		      <div class="btn">
		        <span>Seleccionar Foto</span>
		        <input type="file" name="url"/>
		      </div>
		    </div>
		</div>
		<div class="row">
			<input name="add" type="submit" value="Subir la Imagen" class="btn primary-dark">
		</div>
		
	
			
		</form>
</div>
</section>