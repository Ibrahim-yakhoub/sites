<?php
namespace App\Table;
use Core\Table\Table;
class Note_dev_exaTable extends Table
{
	
	protected $table = "note_dev_exa";
	protected $id = "id_dev_exa";
	public function listes(){
		return $this->query("
			SELECT note_dev_exa.id_dev_exa, note_dev_exa.notes, types_dev_exa.nom as nom_t, matiere.nom as nom_m, etudiant.nom as nom_e, prof.nom as nom_p from  {$this->table} 
			left join types_dev_exa on note_dev_exa.id_t = types_dev_exa.id_t
			left join matiere on note_dev_exa.id_mat = matiere.id_mat
			left join etudiant on note_dev_exa.id_e = etudiant.Matricule
			left join prof on note_dev_exa.id_dev_exa = prof.id_p
			");
	}
	public function listes2(){
		return $this->query("
			SELECT SUM(notes) FROM(
			SELECT note_dev_exa.id_dev_exa, note_dev_exa.notes, types_dev_exa.nom as nom_t, matiere.nom as nom_m, etudiant.nom as nom_e, prof.nom as nom_p from  {$this->table} 
			left join types_dev_exa on note_dev_exa.id_t = types_dev_exa.id_t
			left join matiere on note_dev_exa.id_mat = matiere.id_mat
			left join etudiant on note_dev_exa.id_e = etudiant.Matricule
			left join prof on note_dev_exa.id_dev_exa = prof.id_p
			where types_dev_exa.nom = 'devoir' and etudiant.nom = 'ibrahim') as moi");
	
	}
	public function find2($id){
		$ids = [];
		foreach ($id as $key => $value) {
			$ids[] = $value;
			
		} 
		$id_2 = implode(', ', $ids);
		return $this->query("SELECT note_dev_exa.id_dev_exa, note_dev_exa.notes, types_dev_exa.nom as nom_t, matiere.nom as nom_m, etudiant.nom as nom_e, prof.nom as nom_p from  {$this->table} 
			left join types_dev_exa on note_dev_exa.id_t = types_dev_exa.id_t
			left join matiere on note_dev_exa.id_mat = matiere.id_mat
			left join etudiant on note_dev_exa.id_e = etudiant.Matricule
			left join prof on note_dev_exa.id_dev_exa = prof.id_p where note_dev_exa.id_t = ? and note_dev_exa.id_mat = ?  and etudiant.id_f = ?", $ids);
	}

}