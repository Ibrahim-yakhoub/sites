<?php
   $etudiant = 'admin.filiere.index';
   $lien = 'filiere';
?>
<a href="?p=admin.filiere.add" class="btn btn-success">Ajouter</a>
<h1>Liste des Filieres</h1>
<table class="table">
	<thead>
		<tr>
			<td>ID</td>

			<td>Nom</td>

			<td>Modifier</td>

			<td>Supprimer</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($liste as $v): ?>
		<tr>
			<td><?= $v->id_f ?></td>
			<td><?= $v->nom_f ?></td>

			<td><a class="btn btn-primary" href="?p=admin.filiere.edit&id=<?= $v->id_f ?>">Modifier</a></td>

			<td><a class="btn btn-danger" href="?p=admin.filiere.delete&id=<?= $v->id_f ?>">Supprimer</a></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>