<?php
$ens = App::getInstances()->getTable('Enseignement');
if(!empty($_POST)){
	$res = $ens->create([
		'nom' => $_POST['nom'],
		'id_f' => $_POST['id_f']
	]);
	
}
$filiere = App::getInstances()->getTable('Filiere')->extracts('id_f', 'nom_f');
$form = new Core\HTML\BootstrapForm($_POST);
?>
<form method="post">
	<?= $form->input('nom', 'Nom Unité d\'Enseignement') ?>
	<?= $form->select('id_f', 'Filiere', $filiere) ?>
	<button type="submit" class="btn btn-primary">Ajouter</button>
</form>