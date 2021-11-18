<?php

require_once('Model/ConnectionModel.php');

class ParentModel
{
  
  

	public function getEmailOfParentModel($username){
    
        $Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;

	$sql = "select * from parent where (nom) = (?)";
	$row = $c->prepare($sql);
	$row->execute([$username]);
	$enfants = $row->fetch();
	return $enfants;

    }
	public function getInfoParentByEmail($email)
	{
        $Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;

	$sql = "select * from users  INNER JOIN parent on users.iduser = parent.idUsers  where (mail) = (?)" ;
	$row = $c->prepare($sql);
	$row->execute([$email]);
	$info = $row->fetch();
	return $info;
    }

	
   
}
?>