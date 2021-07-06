<?php
     $etudiant = "etudiant.iag";
     $lien = 'Tous les Etudiant de IAG';
?>
<div>
	<h3>Liste des Etudiants</h3>
</div>
<div>
	<form method="POST" action="" class="card">
		<?= $form->select("id_f", "filiere de l'etudiant", $filiere) ?>
		<button type="submit" class="btn btn-success">Choisir</button>
	</form>
</div>
<table class="table table-bordered table-hover card-list">
	<thead>
		<tr>
			<td>ID</td>
		
			<td>NOM</td>
		
			<td>PRENOM</td>

			<td>Age</td>

			<td>Filiere</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($liste as $key => $m): ?>
			<tr>
				<td><?= $m->Matricule ?></td>
			
				<td><?= $m->nom ?></td>
		
				<td><?= $m->prenom ?></td>

				<td><?= $m->Age ?></td>

				<td><?= isset($m->id_f) ? $m->id_f: $m->filiere ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>