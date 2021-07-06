<?php
use Core\Auth\DBAuth;
define("ROOT", dirname(__DIR__));
require ROOT.'/app/App.php';
App::loader();
if(isset($_GET['p'])){
    $page = $_GET['p'];
} else{
    $page = 'home';
}
//Auth
$app = App::getInstances();

$auth = new DBAuth($app->getDb());
if(!$auth->logged()){
    $app->forbidden();
}

ob_start();
if($page === 'home'){
    require ROOT.'/pages/admin/etudiant/index.php';
}else if($page === 'etudiant.add'){
	require ROOT.'/pages/admin/etudiant/add.php';
}else if($page === 'etudiant.edit'){
	require ROOT.'/pages/admin/etudiant/edit.php';
}else if($page === 'etudiant.delete'){
	require ROOT.'/pages/admin/etudiant/delete.php';
}else if($page === 'filiere.index'){
    require ROOT.'/pages/admin/filiere/index.php';
}else if($page === 'filiere.add'){
	require ROOT.'/pages/admin/filiere/add.php';
}else if($page === 'filiere.edit'){
	require ROOT.'/pages/admin/filiere/edit.php';
}else if($page === 'filiere.delete'){
	require ROOT.'/pages/admin/filiere/delete.php';
}else if($page === 'prof.index'){
	require ROOT.'/pages/admin/professeur/index.php';
}else if($page === 'prof.add'){
	require ROOT.'/pages/admin/professeur/add.php';
}else if($page === 'prof.edit'){
	require ROOT.'/pages/admin/professeur/edit.php';
}else if($page === 'prof.delete'){
	require ROOT.'/pages/admin/professeur/delete.php';
}else if($page === 'matiere.index'){
	require ROOT.'/pages/admin/matiere/index.php';
}else if($page === 'matiere.add'){
	require ROOT.'/pages/admin/matiere/add.php';
}else if($page === 'matiere.edit'){
	require ROOT.'/pages/admin/matiere/edit.php';
}else if($page === 'matiere.delete'){
	require ROOT.'/pages/admin/matiere/delete.php';
}else if($page === 'enseignement.index'){
	require ROOT.'/pages/admin/enseignement/index.php';
}else if($page === 'enseignement.add'){
	require ROOT.'/pages/admin/enseignement/add.php';
}else if($page === 'enseignement.edit'){
	require ROOT.'/pages/admin/enseignement/edit.php';
}else if($page === 'enseignement.delete'){
	require ROOT.'/pages/admin/enseignement/delete.php';
}
$content = ob_get_clean();
require ROOT.'/pages/template/default.php';
