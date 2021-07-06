<?php
Namespace App\Table;
use Core\Table\Table;
class MatiereTable extends Table
{
	protected $table = "matiere";
    
    protected $id = "id_mat";

	public function allMatiere(){
		// return $this->query2("SELECT * From {$this->table} ");
		return $this->query("SELECT nom_mat, nom as professeur from  {$this->table} left join professeur on nom_mat = nom");
	}
}