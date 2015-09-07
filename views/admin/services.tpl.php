<div class="padding-largo">
<div style="max-height:35em; overflow:auto;">
	<table>
		<thead>
			<tr>
				<th>Cliente</th>
				<th>Direccion</th>
				<th>Conductor</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($values as $row) {?>
			<tr>
				<td></td>
				<td><?=$row['dirfisica']?></td>
				<td></td>
				<td><a href="/admin/detail">Detalles</a></td>
			</tr>
		<?php } ?>
			
		</tbody>
	</table>
</div>
</div>