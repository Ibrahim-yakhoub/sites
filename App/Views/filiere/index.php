<?php
$etudiant = 'filiere.index';
$lien = 'filiere';
?>
<h1>LISTE DE FILIERE</h1>
<table class="table table-bordered table-hover card-list">
	<thead>
		<tr>
			<td>ID</td>

			<td>NOM</td>
		</tr>
	</thead>
	<tbody>
		 <?php foreach($liste as $key) : ?>
			<tr>
				<td><?= $key->id_f ?></td>
			    <td><?= $key->nom_f ?></td>

		    </tr>
        <?php endforeach; ?>
	</tbody>
</table>