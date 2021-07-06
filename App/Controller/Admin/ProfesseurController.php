<?php
namespace App\Controller\Admin;
use Core\HTML\BootstrapForm;
use \App;
/**
 * 
 */
class ProfesseurController extends AppController
{
	
	function __construct()
	{
		parent::__construct();
		$this->loadModel('Professeur');
	}
	public function index(){
		$liste = $this->Professeur->all();
		$this->render('admin.professeur.index', compact('liste'));
	}

	public function edit(){
		if(!empty($_POST)){
			$res = $this->Professeur->update($_GET['id'], [
		      'nom' => $_POST['nom'],
		      'prenom' => $_POST['prenom'],
		      'Adresse' => $_POST['Adresse']
			]);
		}
		$list = $this->Professeur->find($_GET['id']);
		$form = new BootstrapForm($list);
			$this->render('admin.professeur.edit', compact('form'));
	}

    public function add(){
		if(!empty($_POST)){
			$res = $this->Professeur->create([
		       'nom' => $_POST['nom'],
		       'prenom' => $_POST['prenom'],
		       'Adresse' => $_POST['Adresse']
			]);
			if($res){
				header('Location: index.php?p=admin.professeur.edit&id='.App::getInstances()->getDb()->lastInsertId());
			}
		}

              $form = new BootstrapForm($_POST);

              $this->render('admin.professeur.add', compact('form'));
    }

     public function delete(){

			$res = $this->Professeur->delete($_GET['id']);
			if($res){
				header('Location: index.php?p=admin.professeur.index');
			}
     }





}