<?php
   $lien = 'matiere';
   $etudiant = 'admin.enseignement.index';

?>
<div>
	<a href="?p=admin.enseignement.add" class="btn btn-primary">Ajouter</a>
</div>
<table class="table">
	<thead>
		<tr>
			<td>ID</td>

			<td>NOM</td>

			<td>FILIERE</td>

			<td>Modifier</td>

			<td>Supprimer</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($liste as $key): ?>
			<tr>
				<td><?= $key->id ?></td>

				<td><?= $key->nom ?></td>

				<td><?= $key->id_f ?></td>

				<td><a class="btn btn-primary" href="?p=admin.enseignement.edit&id=<?= $key->id ?>">Modifier</a></td>

				<td><a class="btn btn-primary" href="?p=admin.enseignement.delete&id=<?= $key->id ?>">Supprimer</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>