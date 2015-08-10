<section>
	<div class="row">
		<div class="center-align">
			<h3>Ultimos Taxistas Registrados</h3>		
		</div>

	</div>
	<div class="row padding-largo">
		<table class="striped" >
		     <thead>
		       <tr>
		           <th data-field="id">Nombre</th>
		           <th data-field="name">Numero Economico</th>
		           <th data-field="price">Placas del Taxi</th>
		       </tr>
		    </thead>

		        <tbody>
		       	<?php foreach ($values as $row) {
				?>
				<tr>
					<td><?=$row["name_driver"]; ?> <?=$row["paterno_driver"]; ?> <?=$row["materno_driver"]; ?></td>
					<td><?=$row["code_taxi"]; ?></td>
					<td><?=$row["placas_taxi"]; ?></td>
				</tr>	
					
			
				<?php } ?>
		        </tbody>
		</table>
	
	</div>
</section>