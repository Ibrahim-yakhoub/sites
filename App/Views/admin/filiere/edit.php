<?php
   $etudiant = 'admin.filiere.index';
   $lien = 'Filiere';
?>
<form method="post">
	<?= $form->input("nom_f", "Nom de la filiere") ?>
	<button type="submit" class="btn btn-primary">Sauvegarder</button>
</form>