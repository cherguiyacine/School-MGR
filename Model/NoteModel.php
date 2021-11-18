<?php

require_once('Model/ConnectionModel.php');

class NoteModel
{	
	public function updateNoteGroupeFromEnseignantModele(){
    
        $Connection = new Connection_Model() ;    
  	  $c = $Connection->connexion() ;
     $etudiants = $this->getListEtudiant();
	 foreach ($etudiants as $etudiant) {
		// echo		 ;
		// echo	
	   $idm=	$_POST["moduleid"];
	   $ide=$_POST["id-$etudiant[idEtudiant]"];
	   $mark=$_POST["mark-$etudiant[idEtudiant]"];

	   $note=$this->ifexistNote($idm,$ide);
	   if($note){
		$sql = " REPLACE INTO note (idnote,identifiantEtudiant,identifiantModule,note,remarque) VALUES(?,?,?,?,?)";
		$row = $c->prepare($sql);
		$row->execute([$note["idnote"],$ide,$idm,$mark,"bien"]);
	   }else{
		$sql = " INSERT INTO note (identifiantEtudiant,identifiantModule,note,remarque) VALUES(?,?,?,?)";
		$row = $c->prepare($sql);
		$row->execute([$ide,$idm,$mark,"bien"]);
	   }
       
	 }

    }
	public function getListEtudiant(){
    if(isset($_POST["groupe"])&&isset($_POST["groupe"])&&isset($_POST["groupe"])){
		$Connection = new Connection_Model() ;    
		$c = $Connection->connexion() ;
	
		$sql = "  select * from classe  INNER JOIN etudiant on classe.idClasse = etudiant.idenClasse where (groupe,niveau,cycle) = (?,?,?)	";
		$row = $c->prepare($sql);
		$row->execute([$_POST["groupe"],$_POST["niveau"],$_POST["cycle"]]);
		$etudiants = $row->fetchAll();
		return $etudiants;
	}
	else{
		$Connection = new Connection_Model() ;    
		$c = $Connection->connexion() ;
	
		$sql = "  select * from classe  INNER JOIN etudiant on classe.idClasse = etudiant.idenClasse where (groupe,niveau,cycle) = (?,?,?)	";
		$row = $c->prepare($sql);
		$row->execute(["","",""]);
		$etudiants = $row->fetchAll();
		return $etudiants;
	}
	
	}
	
	public function ifexistNote($idm,$ide){

		$Connection = new Connection_Model() ;    
		$c = $Connection->connexion() ;

		$sql = "  select * from note where (identifiantEtudiant,identifiantModule) = (?,?)	";
		$row = $c->prepare($sql);
		$row->execute([$ide,$idm]);
		$note = $row->fetch();
		return $note;
		}
}
?>