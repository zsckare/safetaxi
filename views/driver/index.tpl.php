<section  class="mdl-card mdl-cell mdl-cell--8-col">
	<div class="row">
		<div class="col s6 m6 l6 offset-s4 offset-m4 offset-l4">
			<h3>Lista de Taxistas</h3>		
		</div>
		<div class="col s2 m2 l2" style="margin-top:1em;">
			  <a  href ="drivers/new" class="btn-floating btn-large waves-effect waves-light primary-dark" Title="Agregar Nuevo"><i class="material-icons">add</i></a>
		</div>
	</div>
	<div class="row padding-largo" >
		<div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1"style="max-height: 400px; overflow:auto;">
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
						<td><a href="/drivers/read/?id=<?=$row['id_driver'] ?>" Title="Ver"><i class="small ion-eye"></i></a></td>
						<td><a href="/drivers/edit/?id_driver=<?=$row['id_driver'] ?>" Title="Editar" style="color:#388e3c !important;" ><i class="small ion-android-create"></i></a></td>
						<td><a href="/drivers/delete/?d=<?=$row['id_driver']?>" title="Eliminar"> <i class="small material-icons rojo-oscuro">delete</i></a></td>						
					</tr>	
						
				
					<?php } ?>
			        </tbody>
			</table>
		</div>
	
	</div>
</section>