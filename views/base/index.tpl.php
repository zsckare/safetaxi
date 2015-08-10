<section  class="row">
	<div class="row">
		<div class="col s8 m8 l8 offset-s2 offset-m2 offset-l2">
			<h3>Lista de Bases</h3>		
		</div>
		<div class="col s2 m2 l2" style="margin-top:1em;">
			  <a  href ="base/new" class="btn-floating btn-large waves-effect waves-light primary-dark" Title="Agregar Nuevo"><i class="material-icons">add</i></a>
		</div>
	</div>
	<div class="row padding-largo" >
		<div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1"style="max-height: 400px; overflow:auto;">
			<table class="striped" >
			     <thead>
			       <tr>
			           <th data-field="id">Nombre</th>
			       </tr>
			    </thead>
			
			        <tbody>
			       	<?php foreach ($values as $row) {
					?>
					<tr>
						<td><?=$row["nombre"]; ?> </td>
						<td><a href="/base/delete/?id_base=<?=$row['id_base']?>" title="Eliminar"> <i class="small material-icons rojo-oscuro">delete</i></a></td>
					</tr>	
						
				
					<?php } ?>
			        </tbody>
			</table>
		</div>
	
	</div>
</section>