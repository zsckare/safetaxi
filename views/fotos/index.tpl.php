<section  class="mdl-card mdl-cell mdl-cell--8-col">
	<div class="row">
		<div class="col s6 m6 l6 offset-s4 offset-m4 offset-l4">
			<h3>Lista de Fotos</h3>		
		</div>
		<div class="col s2 m2 l2" style="margin-top:1em;">
			  <a  href ="drivers/upload" class="btn-floating btn-large waves-effect waves-light primary-dark" Title="Subir Foto"><i class="material-icons">eject</i></a>
		</div>
	</div>
	<div class="row padding-largo" >
		<div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1"style="max-height: 400px; overflow:auto;">
			<table class="striped" >
			     <thead>
			       <tr>
			       </tr>
			    </thead>
			
			        <tbody>
			       	<?php foreach ($values as $row) {
					?>
					<tr class="row">
						<td class="col s1 m1 l1" ><img src="<?=$row["ruta"]; ?>" alt="" class="responsive-img"></td>
						<td class="col s1 m2 l1 offset-m1 offset-l1"><a href="/fotos/delete/?id=<?=$row['id_foto']?>" title="Eliminar"> <i class="small material-icons rojo-oscuro">delete</i></a></td>						
					</tr>	
						
				
					<?php } ?>
			        </tbody>
			</table>
		</div>
	
	</div>
</section>