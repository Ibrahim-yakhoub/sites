<?php
use Core\Config;
use Core\Database\MysqlDatabase;
/**
 * 
 */
class App
{
	private $db_instance;
	private static $_instance;

	public static function getInstances()
	{
		if(is_null(self::$_instance)){
			self::$_instance = new App();
		}
		return self::$_instance;
	}
	public static function loader(){
		session_start();
		require ROOT.'/core/Autoloader.php';
		Core\Autoloader::register();
		require ROOT.'/App/Autoloader.php';
		App\Autoloader::register();
	}
	public function getTable($name){
		$class_name = '\\App\\Table\\'.ucfirst($name).'Table';
		$b = new $class_name($this->getDb());
		return $b;
	}
	public function getDb(){
		 $config = Config::getInstance(ROOT.'/config/config.php');
        if(is_null($this->db_instance)){
        	$this->db_instance = new MysqlDatabase($config->get("db_name"), $config->get("db_user"), $config->get("db_pass"), $config->get("db_host"));        	
        } 	
        return $this->db_instance;
    }
 
}