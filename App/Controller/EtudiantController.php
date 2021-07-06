<?php
namespace App\Controller;
use Core\HTML\BootstrapForm;
/**
 * 
 */
class EtudiantController extends AppController
{
	public function __construct()  {
		parent::__construct();
		$this->loadModel('Etudiant');
	}

	public function index(){
		  $this->loadModel('Filiere');
		  if(!empty($_POST['id_f'])){
		  	$liste = $this->Etudiant->find2($_POST['id_f']);
		  }else{
		  	$liste = $this->Etudiant->us();
		  }	
		  
          
          $filiere = $this->Filiere->extracts('id_f', 'nom_f');
          $form = new BootstrapForm($_POST);
          $this->render('etudiant.index', compact('liste', 'form', 'filiere'));
	}

	public function iag(){
		$liste = $this->Etudiant->iag();
		$this->render('etudiant.iag', compact('liste'));
	}
	
}