<?php
  $etudiant = "filiere.index";
  $lien = 'etudiant';

?>
<form method="post">
	<?= $form->input("nom", "Nom de l'etudiant"); ?>
	<?= $form->input("prenom", "prenom de l'etudiant"); ?>
	<?= $form->input("Age", "Age de l'etudiant"); ?>
	<?= $form->select("id_f", "filiere de l'etudiant", $filiere); ?>
	<button class="btn btn-primary">Modifier</button>
</form>