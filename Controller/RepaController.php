<?php

require_once('Vue/RepaVue.php');
require_once('Model/RepaModel.php');

class RepaController {

    public function showaddRepaController()
    {
        $RepaModel = new RepaModel();
       $repa= $RepaModel->getRepaModel();
       

       if(!$repa){  
        $repa["repa"]="vide";
        $repa["desert"]="vide";}

       $RepaVue = new RepaVue();
       $RepaVue->show_showRepa_view($repa);      
    }

    function addRepaController()
    {
        $RepaModel = new RepaModel();
        $RepaModel->addRepaModel();
        header('location: Home');

    }    
    function getRepaTodayController()
    {
        $RepaModel = new RepaModel();
      $repa=  $RepaModel->getRepaModel();
      return $repa;

    }    
    
}

?>