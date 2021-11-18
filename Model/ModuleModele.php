<?php

require_once('Model/ConnectionModel.php');

class ModuleModele
{	
	public function getListModules(){
    
        $Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;

	$sql = "select * from module";
	$row = $c->prepare($sql);
	$row->execute();
	$modules = $row->fetchAll();
    return $modules;
    }
	
	public  function getListModulesModele()
  {
	$Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;

	$sql = "select * from module";
	$row = $c->prepare($sql);
	$row->execute();
	$modules = $row->fetchAll();
    return $modules;
    
  }
  public  function getListEtudiantByIdClasseModel()
  {
	$Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;

	$sql = "  select * from classe  INNER JOIN etudiant on classe.idClasse = etudiant.idenClasse where (groupe,niveau,cycle) = (?,?,?)	";
	$row = $c->prepare($sql);
	$row->execute([$_POST["groupe"],$_POST["niveau"],$_POST["cycle"]]);
	$etudiants = $row->fetchAll();
    return $etudiants;
    
  }
  public  function getNoteEtudiantByIdModel($id)
  {
	$Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;
	
	$sql = "  select * from note  where (identifiantEtudiant,identifiantModule) = (?,?)	";
	$row = $c->prepare($sql);
	$row->execute([$id,$_POST["idmodule"]]);
	$note = $row->fetch();
    return $note;
    
  }
  
  

}
?>