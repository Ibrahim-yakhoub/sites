<?php
   $etudiant = 'admin.professeur.index';
   $lien = 'Professeur';
?>
<form method="post">
	<?= $form->input('nom', 'Nom du prof') ?>
	<?= $form->input('prenom', 'Prenom du prof') ?>
	<?= $form->input('Adresse', 'Adresse du prof') ?>
	<button class="btn btn-primary" type="submit">Ajouter</button>
</form>