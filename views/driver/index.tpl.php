<section>
	<div class="row">
		<div class="col s6 m6 l6 offset-s4 offset-m4 offset-l4">
			<h3>Lista de Taxistas</h3>		
		</div>
		<div class="col s2 m2 l2" style="margin-top:1em;">
			  <a  href ="drivers/new" class="btn-floating btn-large waves-effect waves-light primary-dark"><i class="material-icons">add</i></a>
		</div>
	</div>
	<div class="row padding-largo">
		<table class="striped" >
		     <thead>
		       <tr>
		           <th data-field="id">Nombre</th>
		           <th data-field="name">Codigo del taxi</th>
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