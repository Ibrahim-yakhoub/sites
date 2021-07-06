<?php
 $etudiant = 'enseignement.index';
 $lien = 'enseignement';
?>
<table class="table table-bordered table-hover card-list">
	<thead>
		<tr>
			<td>ID</td>

			<td>NOM</td>

		</tr>
	</thead>
	<tbody>
		<?php foreach($liste as $key): ?>
			<tr>
				<td><?= $key->id ?></td>

				<td><?= $key->nom ?></td>

			</tr>
		<?php endforeach; ?>
	</tbody>
</table>