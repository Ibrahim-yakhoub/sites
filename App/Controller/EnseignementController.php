<?php
namespace App\Controller;
/**
 * 
 */
class EnseignementController extends AppController
{
	public function __construct()  {
		parent::__construct();
		$this->loadModel('Enseignement');
	}
	public function index(){
          $liste = $this->Enseignement->all();
          $this->render('enseignement.index', compact('liste'));
	}
	
}