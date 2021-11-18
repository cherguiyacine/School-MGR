<?php

require_once('Vue/SeanceVue.php');
require_once('Model/SeanceModel.php');
require_once('Model/ClasseModel.php');
require_once('Model/ModuleModele.php');
require_once('Model/EmploiTempModel.php');

require_once('Model/EnseignantModel.php');

class SeanceController {

    public function showaddSeanceController()
    {
       
        $enseignantModel = new EnseignantModel();
        $enseignants = $enseignantModel->getListEnseignanats();      

        $classeModel = new ClasseModel() ; 
        $classes = $classeModel->getListClasse() ; 

        $moduleModel = new  ModuleModele() ; 
        $modules = $moduleModel->getListModules() ; 

        $seanceVue = new SeanceVue();
        $seanceVue->showaddSeance($enseignants,$classes,$modules);      
    }

    function addSeanceController()
    {
        echo $_POST["Module"];
        echo $_POST["Enseignant"];
        echo $_POST["Classe"];
        echo $_POST["Jour"];
        echo $_POST["heureDebut"];
        echo $_POST["heureFin"];
        $emploiTempModel = new EmploiTempModel();
        $emploiTempModel->addSeanceModel();
        header('location: admin');

    }    
    
}

?>