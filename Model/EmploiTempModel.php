<?php
require_once('Model/ConnectionModel.php');

class EmploiTempModel
{
   


    function addSeanceModel()
{

	
 
	$Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;
   
	try{
		$sql = "INSERT INTO emploitemp (idenClasse,identifiantModule,jour,heureDebut,heureFin,identifiantEnseignant) VALUES(?,?,?,?,?,?)";
		$row = $c->prepare($sql);
		$row->execute([$_POST["Classe"], $_POST["Module"], $_POST["Jour"], $_POST["heureDebut"], $_POST["heureFin"], $_POST["Enseignant"]]);		
		echo "<script type='text/javascript'>alert('Seance ajouter avec succee');</script>";

			}
		catch(PDOException $ex) {

				printf("erreur de connexion à la base de donné niveau de la table enseignant",$ex->getMessage()) ;
			exit() ;  
		}
	
}

   
}
?>