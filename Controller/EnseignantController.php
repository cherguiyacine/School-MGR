<?php


require_once('Vue/EnseignantVue.php');
require_once('Model/ModuleModele.php');
require_once('Vue/CyclesVue.php');

require_once('Model/NoteModel.php');

class EnseignantController {

 
  
  public  function getReception()
  {
    $EnseignantModel = new EnseignantModel();
    $receptions= $EnseignantModel->getReceptionModel();
    return $receptions;
  }
  public  function showEnseignantPanelController()
  {
    $adminVue = new EnseignantVue();
    $adminVue->showEnseignantPanelVue();
  }
  public  function showAddNoteController()
  {
    $moduleModele = new ModuleModele();
    $modules= $moduleModele->getListModules();

    $adminVue = new EnseignantVue();
    $adminVue->showAddNoteVue($modules);
  }
  public  function getListEtudiantByIdClasseController()
  {
    $moduleModele = new ModuleModele();
    $etudiants= $moduleModele->getListEtudiantByIdClasseModel();
    return $etudiants;
  }
  public  function getNoteEtudiantByIdController($id)
  {
    $moduleModele = new ModuleModele();
    $note= $moduleModele->getNoteEtudiantByIdModel($id);
    return $note;
  }
  
  public  function updateNoteGroupeFromEnseignantController()
  {
   
       $noteModele = new NoteModel();
       $noteModele->updateNoteGroupeFromEnseignantModele();
  }
  public  function afficheHeureReception()
  {
   
     $CyclesVue = new CyclesVue();
     $CyclesVue->afficheHeureReceptionVue();
  }
  
  

}

?>