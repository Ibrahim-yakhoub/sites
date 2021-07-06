<?php
namespace App\Controller;
use Core\Controller\Controller;
use \App;
/**
 * 
 */
class AppController extends Controller
{
	protected $viewPath;
	protected $template = "default";
	public function __construct(){
		$this->viewPath = ROOT.'/app/views/';
	}
	public function loadModel($model_name){
        $this->$model_name = App::getInstances()->getTable($model_name);
    }
	
}