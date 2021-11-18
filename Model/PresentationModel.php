<?php
require_once('Model/ConnectionModel.php');

class PresentationModel
{
 
    function addPresentation()
    {
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        $image_url = basename($_FILES["fileToUpload"]["name"]);
        $para = $_POST['para'];

        $Connection = new Connection_Model() ;    
        $c = $Connection->connexion() ;        

        $sql = "INSERT INTO presentation (para,img_url) VALUES(?,?)";
        $row = $c->prepare($sql);
        $row->execute([$para, $image_url]);
}

function getPresentations()
{
    $Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;
	$sql = "select * from presentation";
	$row = $c->prepare($sql);
	$row->execute();
	$presentations = $row->fetchall();
	return $presentations;
}




   
}
?>