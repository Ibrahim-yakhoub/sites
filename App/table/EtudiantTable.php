<?php
namespace App\Table;
use Core\Table\Table;
/**
 * 
 */
class EtudiantTable extends Table
{
	protected $id = "Matricule";
	protected $table = "etudiant";

	public function alls(){
		return $this->all();
	}
	public function us(){
		return $this->query(
			"SELECT etudiant.Matricule, etudiant.nom, etudiant.Age, etudiant.prenom, filiere.nom_f as filiere  from etudiant 
			left join filiere on filiere.id_f = etudiant.id_f
			 ");
	}
	public function iag(){
		return $this->query("SELECT etudiant.Matricule, etudiant.nom, etudiant.Age, etudiant.prenom, filiere.nom_f
		 FROM etudiant
		 INNER JOIN filiere on etudiant.id_f = filiere.id_f
		  where etudiant.id_f = 3");
	}
	public function find2($id){
		return $this->query("SELECT *  From etudiant where id_f = ?", [$id]);
	}
	
	
	
}