<?php
namespace App\Controller;
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
		$this->render('type.index', compact('liste'));
	}
}