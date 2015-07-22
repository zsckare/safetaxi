<section style="height: 500px !important; " class="verDriver">
	<div class="row"><h3 class="center-align">Informacion Del Taxista</h3></div>
		<?php foreach ($values as $row) {?>
			<div class="col  s12 m6 l6">
				<figure>
					<img src='<?=$row["image_driver"]; ?> ' alt="" class="responsive-img">
				</figure>
			</div>
			<div class="col s12 m6 l6">
				<div class="row">
					<div class="col s12 m12 l12">
						<p class="titulos">Nombre</p>
						<p class="subtitulos"><?=$row["name_driver"]; ?> <?=$row["paterno_driver"]; ?> <?=$row["materno_driver"]; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m12 l12">
						<p class="titulos">Direccion</p>
						<p class="subtitulos">
							<?=$row["calle"]; ?> <?=$row["colonia"]; ?> <?=$row["numero"]; ?>
						</p>
						</div>
				</div>
				<div class="row">
					<div class="col s12 m8 l8">
						<p class="titulos">Email:</p>
						<p class="subtitulos"><?=$row["emails_driver"]; ?></p>
					</div>
					<div class="col s12 m4 l4">
						<p class="titulos">Telefono:</p>
						<p class="subtitulos"><?=$row["phone_driver"]; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col s2 m2 l2 offset-s10 offset-m10 offset-l10" >
						<a href="/drivers/edit/?id_driver=<?=$row['id_driver'] ?>" Title="Editar" class="btn-floating waves-effect waves-light primary-dark"><i class="small ion-android-create"></i></a>
					</div>
					
				</div>
				
			</div>
		<?php } ?>


</section>