<?php

/*  
$dsn = "mysql:dbname=tdw;host=localhost;";
try {
    $c = new PDO($dsn, "root", "");
} catch (PDOException $ex) {
    echo 'erreur de conx a la base de donnée' . $ex->getMessage();
    exit();
}
*/
?>


<?php 
class connection_model {
private $dbname = "tdw" ;
private $host = "localhost" ;
private $user = "root" ;
private $password = "" ;

public function connexion () {
    $dsn = "mysql:dbname=$this->dbname;host=$this->host;";
    try{
        $c = new PDO($dsn,$this->user,$this->password) ; 
        }
        catch(PDOException $ex) {
            printf("erreur de connexion à la base de donné",$ex->getMessage()) ;
            exit() ;  
        }
        return $c ; 
}
public function deconnexion ($c) {
    $c = null ; 
}

}

?>