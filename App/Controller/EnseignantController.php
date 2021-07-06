<?php
namespace App\Controller;
/**
 * 
 */
class EnseignantController extends AppController
{
	public function __construct()  {
		parent::__construct();
		$this->loadModel('Professeur');
	}
	public function index(){
          $liste = $this->Professeur->all();
          $this->render('enseignant.index', compact('liste'));
	}
	
}