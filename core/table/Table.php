<?php
Namespace Core\Table;
use Database\Database;

class Table
{
	protected $db;
	protected $table;

	public function __construct($db)
	{
      
       $this->db = $db;
      

	}

	public function all(){
		return $this->query("SELECT * from {$this->table}");
	}

  public function find($id){
        return $this->query("SELECT * from {$this->table} where {$this->id} = ?", [$id], true);
    }


  public function query($statement, $attributes = null, $one = false){
        if($attributes){
            return $this->db->prepare(
                $statement, 
                $attributes, 
                //quant il fait get_class($this) il recupere des classes qui sont liés par l'héritage
                //donc on obtient App\Table\CategoryTable
                // App\Table\PostTable, App\Table\UserTable qu'ont remplace ses chemin par App\Entity\PostEntity, CategoryEntity
                str_replace('Table', 'Entity', get_class($this)), 
                $one
            );
        }else{
           return $this->db->query(
                $statement, 
                str_replace('Table', 'Entity', get_class($this)), 
                $one
            );
        }

      }

      public function create($fileds){
        $sql_parts = [];
        $attributes = [];
        foreach ($fileds as $key => $value) {
            $sql_parts[] = "$key = ?";
            $attributes[] = $value;
        }
        $sql_part = implode(', ', $sql_parts);
        return $this->query("INSERT INTO {$this->table} set $sql_part", $attributes, true);
      }

      public function update($id, $fileds){
        $sql_parts = [];
        $attributes = [];
        foreach ($fileds as $key => $value) {
            $sql_parts[] ="$key = ?";
            $attributes[] = $value;

        }
          $attributes[] = $id;
        
        $sql_part = implode(", ", $sql_parts);
        return $this->query("UPDATE {$this->table} set $sql_part where {$this->id} = ?", $attributes, true);
      }
      public function delete($id){
        return $this->query("DELETE FROM {$this->table} where {$this->id} = ?", [$id], true);
      }
      /**
      *cette fonction case un tableau des objet en un tableau simple tableau['cle' => 'valeur']
      on decortique l'objet en mettent les donnees de l'objet dans un array
      un objet qui à comme donneés object(public 'id' => '1'
                                          public 'nom' => 'filiere')
      on le decortique en ['1' => 'filiere'] et le tours est joué
      */
      public function extracts($id, $name){
           $records = $this->all();
           $return = [];
          foreach ($records as $value) {
              $return[$value->$id] = $value->$name;
          }
          return $return;
      }
      public function getMs(){
         echo "Bonjour";
      }

}