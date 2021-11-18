<?php

require_once('Model/PresentationModel.php');
require_once('Vue/PresentationVue.php');

class PresentationController {

    public function showaddPresentationEcoleController()
    {
       $presentationVue = new PresentationVue();
       $presentationVue->show_addPresentation_view();      
    }

    function addPresentationDeLecole()
    {
        $PresentationModel = new PresentationModel();
        $PresentationModel->addPresentation();
      header('location: Home');

        
    }    
    
    public function showPresentationEcoleController()
    {
        $PresentationModel = new PresentationModel();
        $presentation=  $PresentationModel->getPresentations();
       $presentationVue = new PresentationVue();
       $presentationVue->showPresentationEcole_view($presentation);      
    }
    
}

?>