<?php
namespace App\Entity;
use Core\Entity\Entity;
class EtudiantEntity extends Entity
{
	
	public function getUrl(){
		return 'admin.php?p=edit&id='.$this->Matricule;
	}
}