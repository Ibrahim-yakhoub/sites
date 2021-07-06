<?php
  $etudiant = "admin.etudiant.index";
  $lien = "etudiant";
?>
<form method="post" action="">
	<?= $form->input("nom", "Nom de l'etudiant") ?>
	<?= $form->input("prenom", "Prenom de l'etudiant") ?>
	<?= $form->input("Age", "Age") ?>
	<?= $form->select("id_f", "filiere de l'etudiant", $filiere) ?>
	<button type="submit" class="btn btn-primary">Valider</button>
</form>