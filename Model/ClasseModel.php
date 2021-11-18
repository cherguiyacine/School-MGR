<?php

require_once('Model/ConnectionModel.php');

class ClasseModel
{	
	public function getListClasse(){
    
        $Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;

	$sql = "select * from classe";
	$row = $c->prepare($sql);
	$row->execute();
	$classes = $row->fetchAll();
	return $classes;

    }
}
?>