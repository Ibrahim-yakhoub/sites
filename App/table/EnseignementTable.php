<?php
namespace App\Table;
use Core\Table\Table;
class EnseignementTable extends Table
{
	protected $table = "enseignement";
	protected $id = "id";

	public function us(){
		return $this->query(
			"SELECT enseignement.id, enseignement.nom, filiere.nom_f as filiere  from enseignement 
			left join filiere on enseignement.id_f = filiere.id_f
			 ");
	}
	
}