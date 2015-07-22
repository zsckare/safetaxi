<section>
	<div class="row">
		<div class="col s6 m6 l6 offset-s4 offset-m4 offset-l4">
			<h3>Lista de Metas</h3>		
		</div>
		<div class="col s2 m2 l2" style="margin-top:1em;">
			  <a  href ="metas/new" class="btn-floating btn-large waves-effect waves-light primary-dark"><i class="material-icons">add</i></a>
		</div>
	</div>
	<div class="row">

		<?php foreach ($values as $row) {
			?>
			<div class="row">
				<h4 class="center-align">
					<?=$row["titulo"]; ?>
				</h4>
			</div>
				

	
			<?php
		} ?>
	</div>
</section>

