<section  class="mdl-card mdl-cell mdl-cell--8-col">
	<div class="row">
		<div class="col s6 m6 l6 offset-s4 offset-m4 offset-l4">
			<h3>Lista de Autos</h3>		
		</div>
		<div class="col s2 m2 l2" style="margin-top:1em;">
			  <a  href ="cars/new" class="btn-floating btn-large waves-effect waves-light primary-dark" Title="Agregar Nuevo"><i class="material-icons">add</i></a>
		</div>
	</div>
	<div class="row padding-largo" >
		<div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1"style="max-height: 400px; overflow:auto;">
			<table class="striped" >
			     <thead>
			       <tr>
			           <th data-field="name">Marca</th>
			           <th data-field="price">Modelo</th>
			           <th></th>
			       </tr>
			    </thead>
			
			        <tbody>
			       	<?php foreach ($values as $row) {
					?>
					<tr>
						<td><?=$row["marca"]; ?></td>
						<td><?=$row["modelo"]; ?></td>
						<td><a href="/cars/delete/?id=<?=$row['id_auto']?>" title="Eliminar"> <i class="small material-icons rojo-oscuro">delete</i></a></td>
						<td><a href="/cars/edit/?id_auto=<?=$row['id_auto'] ?>" Title="Editar"><i class="small ion-android-create"></i></a></td>
					</tr>	
						
				
					<?php } ?>
			        </tbody>
			</table>
		</div>
	
	</div>
</section>