<?php
namespace App\Controller;
/**
 * 
 */
class MatiereController extends AppController
{
	public function __construct()  {
		parent::__construct();
		$this->loadModel('Matiere');
	}
	public function index(){
          $liste = $this->Matiere->all();
          $this->render('matiere.index', compact('liste'));
	}
	
}