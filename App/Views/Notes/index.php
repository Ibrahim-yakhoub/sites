<?php
   $etudiant = 'Notes.index';
   $lien = 'Notes';
?>
<div>
	<h3>Liste des Etudiants</h3>
</div>
<div>
	<form method="POST" class="form-align">
			<div><?= $form->select("id_f", "filiere", $filiere) ?></div>
			<div><?= $form->select("id_mat", "Matiere", $matiere) ?></div>
			<div><?= $form->select("id_t", "Type", $type) ?></div>
			<button type="submit" class="btn btn-success form-btn">Choisir</button>
	</form>		
</div>
<table class="table table-bordered table-hover card-list">
	<thead>
		<tr>
			<td>ID</td>

			<td>Etudiant</td>
		
			<td>Matiere</td>
		
			<td>Type de la matiere</td>

			<td>Notes</td>
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($liste as $key => $m): ?>
			<tr>
				<td><?= $m->id_dev_exa ?></td>
			
				<td><?= isset($m->nom_e) ? $m->nom_e: $m->id_e ?></td>
		
				<td><?= isset($m->nom_m) ? $m->nom_m: $m->id_mat ?></td>

				<td><?= isset($m->nom_t) ? $m->nom_t: $m->id_t ?></td>

				<td><?= $m->notes ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>