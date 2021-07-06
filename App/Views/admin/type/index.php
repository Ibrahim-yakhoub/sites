<?php
   $etudiant = 'admin.type.index';
   $lien = 'Type';
?>
<a href="?p=admin.type.add" class="btn btn-success">Ajouter</a>
<h1>Type</h1>
<table class="table">
	<thead>
		<tr>
			<td>ID</td>

			<td>Nom</td>

		</tr>
	</thead>
	<tbody>
		<?php foreach($liste as $v): ?>
		<tr>
			<td><?= $v->id_t ?></td>
			<td><?= $v->nom ?></td>

			<td><a class="btn btn-primary" href="?p=admin.type.edit&id=<?= $v->id_t ?>">Modifier</a></td>

			<td><a class="btn btn-danger" href="?p=admin.type.delete&id=<?= $v->id_t ?>">Supprimer</a></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>