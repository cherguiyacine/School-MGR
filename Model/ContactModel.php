<?php
require_once('Model/ConnectionModel.php');

class ContactModel
{
 
    function addContactModel()
    {
        $address = $_POST["address"];
        $tlp = $_POST["tlp"];
        $fax = $_POST["fax"];
        $Connection = new Connection_Model() ;    
        $c = $Connection->connexion() ;     
           $sql = " REPLACE INTO contact (idcontact,numtlp,fax,address) VALUES(?,?,?,?)";

        $row = $c->prepare($sql);
        $row->execute([1,$tlp,$fax , $address]);
}

function getContact()
{
    

    $Connection = new Connection_Model() ;    
    $c = $Connection->connexion() ;
    $sql = "select * from contact ";
    $row = $c->prepare($sql);
    $row->execute();

    $contact = $row->fetch();
    return $contact;
}



   
}
?>