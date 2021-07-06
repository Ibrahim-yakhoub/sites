
<p><a class="btn btn-success" href="?p=admin.etudiant.add">Ajouter</a></p>

<table class="table">
	<thead>
		<tr>
			<td>ID</td>
		
			<td>NOM</td>
		
			<td>PRENOM</td>

			<td>AGE</td>

			<td>Filiere</td>

			<td>Action</td>

			<td>Supprimer</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($liste as $key => $m): ?>
			<tr>
				<td><?= $m->Matricule ?></td>
			
				<td><?= $m->nom ?></td>
		
				<td><?= $m->prenom ?></td>

				<td><?= $m->Age ?></td>

				<td><?= $m->id_f ?></td>

				<td><a  class="btn btn-primary" href="?p=admin.etudiant.edit&id=<?= $m->Matricule; ?>">Modifier</a></td>

				<td><a  class="btn btn-danger" href="?p=admin.etudiant.delete&id=<?= $m->Matricule ?>">Supprimer</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>