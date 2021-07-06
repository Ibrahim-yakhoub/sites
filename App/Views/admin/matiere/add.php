<?php
   $etudiant = 'admin.matiere.index';
   $lien = 'Matiere';
?>
<form method="post">
	<?= $form->input('nom', 'Nom Matiere') ?>
	<?= $form->select('id_p', 'Nom Professeur', $profs) ?>
	<button type="submit" class="btn btn-primary">Ajouter</button>
</form>