<?php
   $etudiant = 'enseignant.index';
   $lien = 'enseignant';
?>
<div>
	<h3>Liste des Enseignants</h3>
</div>
<div style="top: 300px;">
<table class="table table-bordered table-hover card-list" style="top: 50%;">
	<thead>
		<tr>
			<td>Id</td>

			<td>NOM</td>

			<td>PRENOM</td>

			<td>ADRESSE</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($liste as $key): ?>
		<tr>	
		    <td><?= $key->id_p ?></td>

			<td><?= $key->nom ?></td>

			<td><?= $key->prenom ?></td>

			<td><?= $key->Adresse ?></td>
		</tr>
	<?php endforeach; ?> 
	</tbody>
</table>
</div>