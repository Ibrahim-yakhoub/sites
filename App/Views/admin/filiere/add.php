<?php
   $etudiant = 'admin.filiere.index';
   $lien = 'Filiere';
?>
<form method="post">
	<?= $form->input("nom_f", "Filiere"); ?>
	<button type="submit" class="btn btn-primary">Envoyer</button>
</form>