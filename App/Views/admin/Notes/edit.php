<?php
   $etudiant = 'admin.notes.index';
   $lien = 'Notes';
?>
<form method="post" action="">
	<?= $form->input("notes", "Note de l'etudiant") ?>
	<?= $form->select("id_t", "type matiere", $type) ?>
	<?= $form->select("id_mat", "Matiere", $matiere) ?>
	<?= $form->select("id_e", "Etudiant", $etudiants) ?>
	<button type="submit" class="btn btn-primary">Valider</button>
</form>