<?php
namespace App\Controller;
/**
 * 
 */
class FiliereController extends AppController
{
	public function __construct()  {
		parent::__construct();
		$this->loadModel('Filiere');
	}
	public function index(){
          $liste = $this->Filiere->all();
          $this->render('filiere.index', compact('liste'));
	}
	
}