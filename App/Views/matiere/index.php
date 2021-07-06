<?php
  $etudiant = 'matiere.index';
  $lien = 'matiere';
?>
<h1>Liste de Matiere</h1>

<table class="table table-bordered table-hover card-list">
	<thead>
		<tr>
			<td>ID</td>

			<td>NOM</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($liste as $key): ?>
			<tr>
				<td><?= $key->id_mat ?></td>

				<td><?= $key->nom ?></td>

			</tr>
		<?php endforeach; ?>
	</tbody>
</table>