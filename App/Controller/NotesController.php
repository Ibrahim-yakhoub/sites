<?php
namespace App\Controller;
use Core\HTML\BootstrapForm;
/**
 * 
 */
class NotesController extends AppController
{
	
	function __construct()
	{
		parent::__construct();
		$this->loadModel('note_dev_exa');
	}

	public function index(){
		$this->loadModel('Types_dev_exa');
		$this->loadModel('Matiere');
		$this->loadModel('Filiere');
		  $filiere = $this->Filiere->extracts('id_f', 'nom_f');
		  $matiere = $this->Matiere->extracts('id_mat', 'nom');
		  $type = $this->Types_dev_exa->extracts('id_t', 'nom');
		  $form = new BootstrapForm($_POST);
		  if(isset($_POST['id_t']) and isset($_POST['id_mat']) and isset($_POST['id_f'])){
		  	$liste = $this->note_dev_exa->find2([
                 'id_t' => $_POST['id_t'],
                 'id_mat' => $_POST['id_mat'],
                 'id_f' => $_POST['id_f']
		  	]);
		  }else{
		  	$liste = $this->note_dev_exa->listes();
		  }
		$this->render("Notes.index", compact("liste",'form', 'type', 'matiere', 'filiere'));
	}

}