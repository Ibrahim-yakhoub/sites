<?php
 $etudiant = 'type.index';
 $lien = 'type';
?>
<div>
	<h3>Type de la Matiere</h3>
</div>
<table class="table table-bordered table-hover card-list">
	<thead>
		<tr>
			<td>ID</td>

			<td>NOM</td>

		</tr>
	</thead>
	<tbody>
		<?php foreach ($liste as $key => $m): ?>
			<tr>
				<td><?= $m->id_t ?></td>
			
				<td><?= $m->nom ?></td>

			</tr>
		<?php endforeach; ?>
	</tbody>
</table>