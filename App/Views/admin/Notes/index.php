<?php
   $etudiant = 'admin.notes.index';
   $lien = 'Notes';
?>
<p><a class="btn btn-success" href="?p=admin.Notes.add">Ajouter</a></p>
<table class="table">
	<thead>
		<tr>
			<td>ID</td>
		
			<td>NOTES</td>
		
			<td>Type</td>

			<td>Matiere</td>

			<td>Etudiant</td>

			<td>Action</td>

			<td>Supprimer</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($liste as $key => $m): ?>
			<tr>
				<td><?= $m->id_dev_exa ?></td>
			
				<td><?= $m->notes ?></td>
		
				<td><?= $m->nom_t ?></td>

				<td><?= $m->nom_m ?></td>

				<td><?= $m->nom_e ?></td>

				<td><a  class="btn btn-primary" href="?p=admin.Notes.edit&id=<?= $m->id_dev_exa; ?>">Modifier</a></td>

				<td><a  class="btn btn-danger" href="?p=admin.Notes.delete&id=<?= $m->id_dev_exa ?>">Supprimer</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>