<?php

require_once('Model/EtudiantModel.php');
require_once('Vue/EtudiantVue.php');
require_once('Model/SeanceModel.php');

class EtudiantController {

    public function showEtudiantInfoController(){

          $UserModel = new etudiantModel();
          $etudiantInfo = $UserModel->getEtudianAllInfotById($_POST["idEtudiant"]);
       $etudiantVue = new EtudiantVue();
        $etudiantVue->showEtudiantInfoVue($etudiantInfo);
    }
    public function showEtudiantInfoFromEnsController(){
       
      $UserModel = new etudiantModel();
      $etudiantInfo = $UserModel->getEtudianAllInfotById($_POST["idEtudiant"]);
   $etudiantVue = new EtudiantVue();
    $etudiantVue->showEtudiantInfoVueFromEns($etudiantInfo);
}
public function showEtudiantSeancesController(){
       
  $etudiantModel = new EtudiantModel();
  $etudiant = $etudiantModel->getEtudiantById($_POST["idEtudiant"]);

  $seanceModel = new seanceModel();
  $seancesEtudiant = $seanceModel->showEtudiantSeancesModel($etudiant["idenClasse"]);
  
  $etudiantVue = new EtudiantVue();
  $etudiantVue->showEtudiantSeancesVue($seancesEtudiant);
}

    public function showEtudiantNotesController(){
       


        $etudiantModel = new EtudiantModel();
        
        $etudiant = $etudiantModel->getEtudiantById($_POST["idEtudiant"]);
        $notes = $etudiantModel->getEtudiantNoteById($_POST["idEtudiant"]);

        $etudiantVue = new EtudiantVue();
       $etudiantVue->showEtudiantNotesVue($notes,$etudiant);
  
  }

  public function showEspaceEtudiantController()
  {
      $articleModel = new articleModel();
      $articles = $articleModel->getArticles();
      
     $EtudiantVue = new EtudiantVue();
     $EtudiantVue->showEspaceEtudiantView($articles);      
  }
  

  
  public function showEspaceEtudiantAuthController($email)
  {

    $usermodel = new UserModel();
        $user=  $usermodel->getUser($email);

        $usermodel = new UserModel();
        $etudiant=  $usermodel->getEtudiantFromUsers($user["iduser"]);

     $EtudiantModel = new EtudiantModel();
     $Informations=$EtudiantModel->getEtudianAllInfotById($etudiant["idEtudiant"]);
   
      
     $etudiant = $EtudiantModel->getEtudiantById($etudiant["idEtudiant"]);
     $notes = $EtudiantModel->getEtudiantNoteById($etudiant["idEtudiant"]);
  

     
     $seanceModel = new seanceModel();
     $seancesEtudiant = $seanceModel->showEtudiantSeancesModel($etudiant["idenClasse"]);
    
     $etudiantVue = new EtudiantVue();
     $etudiantVue->showEspaceEtudiantAuthView($notes,$Informations,$seancesEtudiant);


      
  }
  
    
  
}

?>