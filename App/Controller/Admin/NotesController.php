<?php
namespace App\Controller\Admin;
use Core\HTML\BootstrapForm;
use \App;

class NotesController extends AppController
{
	
	function __construct()
	{
		parent::__construct();
		$this->loadModel('Note_dev_exa');
	}
	public function index(){
		$liste = $this->Note_dev_exa->listes();
		$this->render('admin.notes.index', compact('liste'));
	}
	public function add(){
		$this->loadModel('Types_dev_exa');
		$this->loadModel('Matiere');
		$this->loadModel('Etudiant');
		$matiere = $this->Matiere->extracts('id_mat', 'nom');
		$etudiants = $this->Etudiant->extracts('Matricule', 'nom');
		$type = $this->Types_dev_exa->extracts('id_t', 'nom');
		if(!empty($_POST)){
			$res = $this->Note_dev_exa->create([
				'notes' => $_POST['notes'],
				'id_t' => $_POST['id_t'],
				'id_mat' => $_POST['id_mat'],
				'id_e' => $_POST['id_e']
			]);
			if($res){
				header('Location: index.php?p=admin.Notes.edit&id='.App::getInstances()->getDb()->lastInsertId());
			}
		}
		$form = new BootstrapForm($_POST);
		$this->render('admin.Notes.add', compact('form', 'matiere', 'etudiants', 'type'));
	}

	public function edit(){
		 $this->loadModel('Types_dev_exa');
		 $this->loadModel('Matiere');
		 $this->loadModel('Etudiant');
		$matiere = $this->Matiere->extracts('id_mat', 'nom');
		$etudiants = $this->Etudiant->extracts('Matricule', 'nom');
		$type = $this->Types_dev_exa->extracts('id_t', 'nom');

		if(!empty($_POST)){
			$res = $this->Note_dev_exa->create([
				'notes' => $_POST['notes'],
				'id_t' => $_POST['id_t'],
				'id_mat' => $_POST['id_mat'],
				'id_e' => $_POST['id_e']
			]);
			if($res){
				header('Location: index.php?p=admin.Notes.edit&id='.App::getInstances()->getDb()->lastInsertId());
			}

		}
			$etud = $this->Note_dev_exa->find($_GET['id']);
			$form = new BootstrapForm($etud);
			$this->render('admin.Notes.add', compact('matiere', 'form', 'etudiants', 'type'));
	}

	public function delete(){

		$delete =  $this->Note_dev_exa->delete($_GET['id']);
		if($delete){
			header("Location: index.php?p=admin.Notes.index");
		}
     }
}