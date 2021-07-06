<?php
namespace App\Controller\Admin;
use Core\HTML\BootstrapForm;
use \App;
/**
 * 
 */
class EtudiantController extends AppController
{
	
	function __construct()
	{
		parent::__construct();
		$this->loadModel('Etudiant');
	}
	public function index(){
		$liste = $this->Etudiant->all();
		$this->render('admin.etudiant.index', compact('liste'));
	}

	public function edit(){
		    $this->loadModel('Filiere');
			$filiere = $this->Filiere->extracts('id_f', 'nom_f');
		if(!empty($_POST)){
			$this->Etudiant->update($_GET['id'], [
			    'nom' => $_POST['nom'],
			    'prenom' => $_POST['prenom'],
			    'Age' => $_POST['Age'], 
			    'id_f' => $_POST['id_f']
			]);

		}
			$etud = $this->Etudiant->find($_GET['id']);
			$form = new BootstrapForm($etud);
			$this->render('admin.etudiant.edit', compact('filiere', 'form'));
	}

    public function add(){
    	$this->loadModel('Filiere');
    	$filiere = $this->Filiere->extracts('id_f', 'nom_f');

			if(!empty($_POST)){
				$resultat = $this->Etudiant->create([
			     'nom' => $_POST['nom'],
			     'prenom' => $_POST['prenom'],
			     'Age' => $_POST['Age'],
			     'id_f' => $_POST['id_f']
				]);
	         if($resultat){
              header('Location: index.php?p=admin.etudiant.edit&id=' . App::getInstances()->getDb()->lastInsertId());
              }
            }

              $form = new BootstrapForm($_POST);
              $this->render('admin.etudiant.add', compact('filiere', 'form'));
     }

     public function delete(){

		$delete =  $this->Etudiant->delete($_GET['id']);
		if($delete){
			header("Location: index.php?p=admin.etudiant.index");
		}
     }





}