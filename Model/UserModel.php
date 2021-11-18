<?php
require_once('Model/ConnectionModel.php');

class UserModel
{
    private $user_Name;
    private $passWord;
	private $type_user;


    function getUser($email)
{
	$Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;
	$sql = "select * from users where (mail) = (?)";
	$row = $c->prepare($sql);
	$row->execute([$email]);
	$user = $row->fetch();
	return $user;
}



function getEtudiantFromUsers($id)
{
	$Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;
	$sql = "select * from etudiant where (idUsers) = (?)";
	$row = $c->prepare($sql);
	$row->execute([$id]);
	$etudiant = $row->fetch();
	return $etudiant;
}


function getEtudiantById($id)
{
	$Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;
	$sql = "select * from users where (idUser) = (?)";
	$row = $c->prepare($sql);
	$row->execute([$id]);
	$user = $row->fetch();
	return $user["mail"];
}

function createUser()
{
	$Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;    
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$type_user = $_POST["type_user"];
	$dateNaissance = $_POST["dateNaissance"];
	$adress = $_POST["adress"];
	$numero = $_POST["numero"];
	$email = $_POST["email"];
	$emailParent = 0;
		$cycle = 0;
		$groupe = 0;
		$niveau = 0;
		$paraActiv ="";
	if(isset($_POST["emailParent"])&&isset($_POST["cycle"])&&isset($_POST["groupe"])&&isset($_POST["niveau"])){
		$emailParent = $_POST["emailParent"];
		$cycle = $_POST["cycle"];
		$groupe = $_POST["groupe"];
		$niveau = $_POST["niveau"];
		$paraActiv =$_POST["paraActiv"];

	}
	 $idClasse= "".$cycle." ".$groupe." ".$niveau;
	try{

	$sql = "INSERT INTO users  (mail,hash_pwd,type_user) VALUES(?,?,?)";
	$row = $c->prepare($sql);
	$row->execute([$email,$nom,$type_user]);

	


		$sql = "select * from users where (mail) = (?)";

		$row = $c->prepare($sql);
		$row->execute([$email]);
		$user = $row->fetch();	
		
			$id = $user["iduser"];
	


	switch ($type_user) {
		case 0:

			try{
				$sql = "INSERT INTO admin (nom,prenom,adress,numero,idUsers,dateNaiss) VALUES(?,?,?,?,?,?)";
				$row = $c->prepare($sql);
				$row->execute([$nom, $prenom, $adress, $numero, $id,$dateNaissance]);		
					}
				catch(PDOException $ex) {
					echo "<script type='text/javascript'>alert('email existe déja, faire un retour pour retrouver les données');</script>";

						printf("erreur de connexion à la base de donné niveau de la table Admin",$ex->getMessage()) ;
					exit() ;  
				}

			break;
		case 1:
			try{
				$sql = "select * from classe where (cycle,niveau,groupe) = (?,?,?)";

			$row = $c->prepare($sql);
			$row->execute([$cycle,$niveau,$groupe]);
			$classe = $row->fetch();
			if($classe)
			{
				$sql = "INSERT INTO etudiant (nom,prenom,adress,numero,idUsers,emailParent,activExtra,dateNaiss,idenClasse) VALUES(?,?,?,?,?,?,?,?,?)";
				$row = $c->prepare($sql);
				$row->execute([$nom, $prenom, $adress, $numero, $id,$emailParent,$paraActiv,$dateNaissance,$classe["idClasse"]]);
				echo "<script type='text/javascript'>alert('Etudiant ajouter avec succee');</script>";

			}
				else{
					$sql = "DELETE FROM users where iduser = ?";
					$row = $c->prepare($sql);
					$row->execute([$id]);
					echo "<script type='text/javascript'>alert('Classe nexiste pas, faire un retour pour retrouver les données');</script>";

				}
			
		}
		catch(PDOException $ex) {

				printf("erreur de connexion à la base de donné au niveau de la table etudiant",$ex->getMessage()) ;
			exit() ;  
		}
			//header('location: Home');
			break;
		case 2:
			try{
				$sql = "INSERT INTO enseignant (nom,prenom,adress,numero,usersid,dateNaiss) VALUES(?,?,?,?,?,?)";
				$row = $c->prepare($sql);
				$row->execute([$nom, $prenom, $adress, $numero, $id,$dateNaissance]);		
				echo "<script type='text/javascript'>alert('Enseignant ajouter avec succee');</script>";

					}
				catch(PDOException $ex) {
					echo "<script type='text/javascript'>alert('email existe déja, faire un retour pour retrouver les données');</script>";

						printf("erreur de connexion à la base de donné niveau de la table enseignant",$ex->getMessage()) ;
					exit() ;  
				}
				break;

		//	header('location: Home');
		case 3:
			try{
				$sql = "INSERT INTO parent (nom,prenom,adress,numero,idUsers,dateNaiss) VALUES(?,?,?,?,?,?)";
				$row = $c->prepare($sql);
				$row->execute([$nom, $prenom, $adress, $numero, $id,$dateNaissance]);		
					}
				catch(PDOException $ex) {
					echo "<script type='text/javascript'>alert('email existe déja, faire un retour pour retrouver les données');</script>";

						printf("erreur de connexion à la base de donné niveau de la table parent",$ex->getMessage()) ;
					exit() ;  
				}
				break;

			default:
	}

}
catch(PDOException $ex) {
	echo "<script type='text/javascript'>alert('email existe déja, faire un retour pour retrouver les données');</script>";

		printf("erreur de connexion à la base de donné",$ex->getMessage()) ;
	exit() ;  
}

}
   
}
?>