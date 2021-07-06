<?php
define("ROOT", dirname(__DIR__));
require ROOT.'/App/App.php';
App::loader();
if(isset($_GET['p'])){
    $page = $_GET['p'];
} else{	
     $page = 'etudiant.index';
}
global $etudiant;
global $lien;
$etudiant = $page;
global $pages;
$pages = explode('.', $page);
if($pages[0] == 'admin'){
    $controller = '\App\Controller\admin\\'. ucfirst($pages[1]). 'Controller';
    $action = $pages[2];
}else{
    $controller = '\App\Controller\\'. ucfirst($pages[0]). 'Controller';
    $action = $pages[1];
}

$controller = new $controller();
$controller->$action();