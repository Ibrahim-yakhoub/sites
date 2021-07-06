<?php
use Core\HTML\BootstrapForm;
$etudiant = App::getInstances()->getTable("Enseignement");
$filiere = App::getInstances()->getTable("filiere")->extracts('id_f', 'nom_f');
if(!empty($_POST)){
$etudiant->update($_GET['id'], [
    'nom' => $_POST['nom'],
    'id_f' => $_POST['id_f']

]);
}
$etud = $etudiant->find($_GET['id']);
$form = new BootstrapForm($etud);
?>
<form method="post">
	<?= $form->input("nom", "Unité d'Enseignement"); ?>
	<?= $form->select("id_f", "prenom de l'etudiant", $filiere); ?>
	<button class="btn btn-primary">Modifier</button>
</form>