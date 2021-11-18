<?php

require_once('Model/ConnectionModel.php');

class articleModel
{
    function getArticles()
{

    $Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;

	$sql = "select * from article";
	$row = $c->prepare($sql);
	$row->execute();
	$articles = $row->fetchall();
	return $articles;
}

function getArticle_Model($id)
{

    $Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;

	$sql = "select * from article where (idArticle) = (?)";
	$row = $c->prepare($sql);
	$row->execute([$id]);
	$article = $row->fetch();
	return $article;
}


function addArticle_Model()
{
    $Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
      $cpt="";
     if(isset($_POST["Tous"])){
       $cpt="tous";
     }
     if(isset($_POST["Enseignants"])){
        $cpt=$cpt."Enseignants,";

    }  if(isset($_POST["Primaire"])){
        $cpt=$cpt."Primaire,";

    }  if(isset($_POST["Moyen"])){
        $cpt=$cpt."Moyen,";


    }  if(isset($_POST["Secondaires"])){
        $cpt=$cpt."Secondaires,";


    }  if(isset($_POST["Parents"])){
        $cpt=$cpt."Parents";


    }
		$titre=$_POST["title"];
		$discription=$_POST["description"];

        $sql = "INSERT INTO article  (titre,imgURL,description,user_type) VALUES(?,?,?,?)";
        $row = $c->prepare($sql);
        $row->execute([$titre,basename($_FILES["fileToUpload"]["name"]),$discription,$cpt]);
}


   
}
?>