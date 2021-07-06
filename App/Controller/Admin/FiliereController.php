<?php
namespace App\Controller\Admin;
use Core\HTML\BootstrapForm;
/**
 * 
 */
class FiliereController extends AppController
{
	
	function __construct()
	{
		parent::__construct();
		$this->loadModel('Filiere');
	}
	public function index(){
		$liste = $this->Filiere->all();
		$this->render('admin.filiere.index', compact('liste'));
	}
	public function add(){

		if($_POST){
			$result = $this->Filiere->create(['nom_f' => $_POST['nom_f']]);
			if($result){
				?>
		            Bien ajouter
				<?php
				// header("Location: admin.php?p=filiere.edit&id=". App::getInstances()->getDb()->lastInsertId());
			}
		}

      $form = new BootstrapForm($_POST);
      $this->render('admin.filiere.add', compact('form'));
	}

    public function edit(){
			if($_POST){
				$res = $this->Filiere->update($_GET['id'], ['nom_f' => $_POST['nom_f']]);

				if($res){
					?>
					   Bien Modifier;
					<?php
				}
			}
			$fil = $this->Filiere->find($_GET['id']);
			$form = new BootstrapForm($fil);

			$this->render('admin.filiere.edit', compact('form'));
    }
    public function delete(){
          $delete =  $this->Filiere->delete($_GET['id']);
          if($delete){
			header("Location: index.php?p=admin.filiere.index");
		}
    }




}