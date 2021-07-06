<?php
   $lien = 'matiere';
   $etudiant = 'admin.matiere.index';
?>
<div><a class="btn btn-success" href="?p=admin.matiere.add">Ajouter</a></div>
<table class="table">
	<thead>
		<tr>
			<td>Id</td>

			<td>Nom</td>

			<td>Modifier</td>

			<td>Supprimer</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($liste as $v): ?>
			<tr>
				<td><?= $v->id_mat ?></td>

				<td><?= $v->nom ?></td>

				<td><?= $v->id_p ?></td>

				<td><a class="btn btn-primary" href="?p=admin.matiere.edit&id=<?= $v->id_mat ?>">Modifier</a></td>

				<td><a class="btn btn-primary" href="?p=admin.matiere.delete&id=<?= $v->id_mat ?>">Supprimer</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>