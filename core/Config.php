<?php
namespace Core;

class Config
{
	private $setings = [];
	private static $_instance;

	public function __construct($file)
	{
		$this->setings = require($file);
	}

	public static function getInstance($file){
       if(is_null(self::$_instance)){
       	    self::$_instance = new Config($file);
       }
       return self::$_instance;
	}

	 public function get($key){
         if(!isset($this->setings[$key])){
             return null;
         }
         return $this->setings[$key];
     }
}