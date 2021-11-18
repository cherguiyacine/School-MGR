<?php
require_once('Model/ConnectionModel.php');

class SeanceModel
{
   


    function showEtudiantSeancesModel($id)
{
	$Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;
	$sql = "select * from emploitemp INNER JOIN module on emploitemp.identifiantModule = module.idmodule     where (idenClasse) =(?)" ;
	$row = $c->prepare($sql);
	$row->execute([$id]);
	$seance = $row->fetchall();
	return $seance;

	
}



   
}
?>