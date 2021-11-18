<?php

require_once('Model/ConnectionModel.php');

class EnseignantModel
{	
	public function getListEnseignanats(){
    
        $Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;

	$sql = "select * from enseignant";
	$row = $c->prepare($sql);
	$row->execute();
	$enseignanats = $row->fetchAll();
	return $enseignanats;

    }
	public function getReceptionModel(){
    
        $Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;

	$sql = "select * from reception INNER JOIN enseignant on reception.identifiantProf	= enseignant.idEnseignant";
	$row = $c->prepare($sql);
	$row->execute();
	$receptions = $row->fetchAll();
	return $receptions;

    }
	
}
?>