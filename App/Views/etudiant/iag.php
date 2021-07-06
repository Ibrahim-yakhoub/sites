<?php
 $etudiant = 'filiere.index';
 $lien = 'Filiere';
?>
<div>
	<h3>Liste des Etudiants de IAG</h3>
</div>
<table class="table table-bordered table-hover">
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

				<td><?= $m->nom_f ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>