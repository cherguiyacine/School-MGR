<?php

require_once('Vue/AccueilVue.php');




class AccueilController {
   
  public function accueilViewController(){
        
    $articleModel = new ArticleModel();
    $articles=$articleModel->getArticles();

    $accueilVue = new AccueilVue();
    $accueilVue->show_Accueil_view($articles);

    }
    
  
}

?>