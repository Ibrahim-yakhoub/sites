<?php
namespace Core\Database;
use Core\Database\Database;
use \PDO;

class MysqlDatabase extends Database
{
	private $pdo;
	public function __construct($db_name, $db_user, $db_pass, $db_host){
	    $this->db_name = $db_name;
	    $this->db_user = $db_user;
	    $this->db_pass = $db_pass;
	    $this->db_host = $db_host;

   }
	private function getPDO(){
        if($this->pdo === null){
	        $pdo = new PDO('mysql:host=localhost;dbname=test6;charset=utf8', 'root', '');
	        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $this->pdo = $pdo;
        }
        return $this->pdo;
	}
	public function prepare($statement, $attribute, $class_name = null, $one = false){
		$req = $this->getPDO()->prepare($statement);
		$donnees = $req->execute($attribute);
		if(
		    strpos($statement, 'UPDATE') === 0 ||
		    strpos($statement, 'INSERT') === 0 ||
		    strpos($statement, 'DELETE') === 0 
		) {
		    return $donnees;
		}

		if($class_name === null){
			$req->setFetchMode(PDO::FETCH_OBJ);
		}else{
			$req->setFetchMode(PDO::FETCH_CLASS, $class_name);
		}
		if($one){
			$data = $req->fetch();
		}else{
			$data = $req->fetchAll();
		}
		return $data;
	}
	public function query1($statement){
		$req = $this->getPDO()->query($statement);
        $req->setFetchMode(PDO::FETCH_OBJ);
        $data = $req->fetchAll();
        return $data;
	}
	public function query($statement, $class_name = null, $one = false){
        $req = $this->getPDO()->query($statement);
        if(
		        strpos($statement, 'UPDATE') === 0 ||
		        strpos($statement, 'INSERT') === 0 ||
		        strpos($statement, 'DELETE') === 0 
		){
		        return $req;
		}
        if($class_name === null){
        	$req->setFetchMode(PDO::FETCH_OBJ);
        }else{
        	$req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }
        if($one){
        	$datas = $req->fetch();
        }else{
        	$datas = $req->fetchAll();
        }
        return $datas;
	}
	public function lastInsertId(){
    return $this->getPDO()->lastInsertId();
}
	
}