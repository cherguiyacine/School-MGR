<?php

require_once('Model/ConnectionModel.php');

class etudiantModel
{	
	public function getEtudiantById($id){
    
        $Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;

	$sql = "select * from etudiant where (idEtudiant) = (?)";
	$row = $c->prepare($sql);
	$row->execute([$id]);
	$enfants = $row->fetch();
	return $enfants;

    }
	public function getEnfantsModel($email){
    
        $Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;

	$sql = "select * from etudiant where (emailParent) = (?)";
	$row = $c->prepare($sql);
	$row->execute([$email]);
	$enfants = $row->fetchAll();
	return $enfants;

    }
	public function getEtudiantNoteById($id){
    
        $Connection = new Connection_Model() ;    
        $c = $Connection->connexion() ;

		$sql = "select * from etudiant  INNER JOIN note on note.identifiantEtudiant = etudiant.idEtudiant INNER JOIN module on module.idmodule=note.identifiantModule where (idEtudiant) = (?)" ;
	$row = $c->prepare($sql);
	$row->execute([$id]);
	$notes = $row->fetchall();
	return $notes;

    }

	public function getEtudianAllInfotById($id){
    
        $Connection = new Connection_Model() ;    
        $c = $Connection->connexion() ;

		$sql = "select * from etudiant  INNER JOIN classe on classe.idClasse = etudiant.idenClasse INNER JOIN users ON users.iduser=etudiant.idUsers  where (idEtudiant) = (?)" ;
	$row = $c->prepare($sql);
	$row->execute([$id]);
	$informations = $row->fetch();
	return $informations;

    }

	
}
?>