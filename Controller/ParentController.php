<?php

require_once('Model/ParentModel.php');
require_once('Model/EtudiantModel.php');
require_once('Vue/ParentVue.php');

class ParentController {

    public function showEspaceParentController()
    {
        $articleModel = new articleModel();
        $articles = $articleModel->getArticles();
        
       $ParentVue = new ParentVue();
       $ParentVue->showEspaceParentView($articles);      
    }


    public function showEspaceParentAuthController($email)
    {
       

        $parentModel = new ParentModel();
       $infoPerso= $parentModel->getInfoParentByEmail($email); 

       $EtudiantModel = new EtudiantModel();
       $Enfants=$EtudiantModel->getEnfantsModel($email);
     
       $ParentVue = new ParentVue();
       $ParentVue->showEspaceParentAuthView($Enfants,$infoPerso); 
    }
    
  
    
public function getEnfantsController(){

    $usermodel = new ParentModel();
    // $usermodel->createUser($username,$password);
      //  $email=  $usermodel->getEmailOfParentModel($_SESSION["nom"]);
        echo $_SESSION["nom"];


    //$ParentModel = new ParentModel();
    //$Enfants = $ParentModel->getEnfantsModel($email);
}

}

?>