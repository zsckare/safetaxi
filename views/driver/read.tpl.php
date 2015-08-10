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
					<div class="col s12 m6 l6">
						<p class="titulos">Numero Economico</p>
						<p class="subtitulos">
							<?=$row["code_taxi"]; ?>
						</p>
					</div>
					<div class="col s12 m6 l6">
						<p class="titulos">Numero Telefonico</p>
						<p class="subtitulos">
							<?=$row["phone_driver"]; ?>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m6 l6">
						<p class="titulos">Placas:</p>
						<p class="subtitulos"><?=$row["placas_taxi"]; ?></p>
					</div>
					<div class="col s12 m6 l6">
						<p class="titulos">Base:</p>
						<p class="subtitulos"><?=$row["base"]; ?></p>
					</div>
				</div>
				
			</div>
		<?php } ?>


</section>