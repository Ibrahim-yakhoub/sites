<?php
   $etudiant = 'admin.professeur.index';
   $lien = 'professeur';
?>
<div><a class="btn btn-success" href="?p=admin.professeur.add">Ajouter</a></div>
<table class="table">
	<thead>
		<tr>
			<td>ID</td>

			<td>Nom</td>

			<td>Prenom</td>

			<td>Adresse</td>

			<td>Modifier</td>

			<td>Supprimer</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($liste as $v): ?>
			<tr>
				<td><?= $v->id_p ?></td>
				
				<td><?= $v->nom ?></td>

			    <td><?= $v->prenom ?></td>

			    <td><?= $v->Adresse ?></td>

			    <td><a class="btn btn-primary" href="?p=admin.professeur.edit&id=<?= $v->id_p ?>">Modifier</a></td>

			    <td><a class="btn btn-danger" href="?p=admin.professeur.delete&id=<?= $v->id_p ?>">Supprimer</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>