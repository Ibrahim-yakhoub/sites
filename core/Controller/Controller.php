<?php
namespace Core\Controller;

/**
 * 
 */
class Controller
{
	
    protected $template;
    protected $viewPath;

    public function render($view, $variables = []){
    	ob_start();
    	extract($variables);
    	$view = require($this->viewPath . str_replace('.', '/', $view).'.php');
    	$content = ob_get_clean();
    	require ($this->viewPath . 'template/'.$this->template. '.php');
    }
    
    
     public function forbidden(){
        header('HTTP/1.0 403 Forbiden');
        die('Acces interdit');
     }
      public function notFound() {
            header('HTTP/1.0 404 Not Found');
            die('Page introuvable');
      }

}