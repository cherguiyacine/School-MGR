<?php
require_once('Model/ConnectionModel.php');

class RepaModel
{
   


    function addRepaModel()
{

	$idcontact = $_POST["date"];
	$repa = $_POST["repa"];
	$desert = $_POST["desert"];
 
	$Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;
	$sql = " REPLACE INTO repas (idrepa,repa,desert) VALUES(?,?,?)";
	$row = $c->prepare($sql);
	$row->execute([$idcontact,$repa,$desert]);
	
}

function getRepaModel()
{
	$Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;
	$date = date('Y-m-d');
	
	$sql = "select * from repas where (idrepa) = (?)";
    $row = $c->prepare($sql);
	$row->execute([$date]);

    $repas = $row->fetch();
    return $repas;
	
}

   
}
?>