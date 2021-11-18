<?php

require_once('Vue/CyclesVue.php');




class CyclesController {
   
  public function showPrimairePageController(){
    $articleModel = new ArticleModel();
    $articles=$articleModel->getArticles();
        
    $cyclesVue = new CyclesVue();
    $cyclesVue->showPrimairePageVue($articles);

    }
    public function showMoyenPageController(){
        
      $articleModel = new ArticleModel();
      $articles=$articleModel->getArticles();
      $cyclesVue = new CyclesVue();
      $cyclesVue->showMoyenPageVue($articles);
  
      }
    
      public function showSecondairePageController(){
        $articleModel = new ArticleModel();
        $articles=$articleModel->getArticles();
        $cyclesVue = new CyclesVue();
        $cyclesVue->showSecondairePageVue($articles);
    
        }
        
    
  
}

?>