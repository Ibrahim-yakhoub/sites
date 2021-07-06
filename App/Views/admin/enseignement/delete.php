<?php
var_dump('delete');
$enseignement = App::getInstances()->getTable('Enseignement');
var_dump($enseignement);
$delete =  $enseignement->delete($_GET['id']);
if($delete){
	header("Location: admin.php?p=admin.enseignement.index");
}