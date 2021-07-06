<?php
namespace App\Controller\Admin;
use Core\HTML\BootstrapForm;
use \App;
/**
 * 
 */
class TypeController extends AppController
{
	
	function __construct()
	{
		parent::__construct();
		$this->loadModel('Types_dev_exa');
	}
	public function index(){
		$liste =  $this->Types_dev_exa->all();
		$this->render('admin.type.index', compact('liste'));
	}
	public function add(){
		if(!empty($_POST)){
			$res = $this->Types_dev_exa->create(['nom' => $_POST['nom']]);
			if($res){
				header('Location: index.php?p=admin.type.edit&id='.App::getInstances()->getDb()->lastInsertId());
			}
			
		}
		$form = new BootstrapForm($_POST);
        $this->render('admin.type.add', compact('form'));
	}

	public function edit(){
		if(!empty($_POST)){
			$res = $this->Types_dev_exa->update($_GET['id'], ['nom' => $_POST['nom']]);
		}
		$list = $this->Types_dev_exa->find($_GET['id']);
		$form = new BootstrapForm($list);
		$this->render('admin.type.edit', compact('form'));
	}
	public function delete(){
		$res = $this->Types_dev_exa->delete($_GET['id']);
		if($res){
			header('Location: index.php?p=admin.type.index');
		}
	}

}