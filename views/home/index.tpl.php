<section>
	<div class="row">
		<div class="col s9 m9 l9 offset-m1 offset-l1">
			<h4>Ultimos Taxistas Registrados</h4>		
		</div>
		<div class="col s1 m1 l1"><div onclick="modalbusqueda()" class="btn-floating btn-large waves-effect waves-light blue" style="margin-top:10px;"><i class="material-icons">search</i></div></div>

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
	<div id="cortina" class="no-mostrar" onclick="ocultar()"></div>
	<div id="modalbusqueda" class="no-mostrar"	>
		<div class="row">
			<h4 class="center-align">Buscar Taxista</h4>
			<div class="row">
				<form method="post" action="/search">
		        	<div class="input-field col s8 m8 l8 ofset-m2 offset-l2">
		          <i class="material-icons prefix">search</i>
		          <input id="icon_prefix" type="text" class="validate buscar" name="buscar">
		        </div>
		    	</form>
			</div>
		</div>
		<div class="row">
			<div id="resultados"></div>
		</div>
	</div>
</section>