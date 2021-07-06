<?php
namespace App\Controller\Admin;
use \App;
use \Core\Auth\DBAuth;
/**
 * 
 */
class AppController extends App\Controller\AppController
{
	
	function __construct()
	{
		parent::__construct();
		 //Auth
        $app = App::getInstances();

        $auth = new DBAuth($app->getDb());
        if(!$auth->logged()){
            $this->forbidden();
        }

	}
}