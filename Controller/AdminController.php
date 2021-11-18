<?php


require_once('Vue/AdminVue.php');


class AdminController {

 

  public  function showAdminPanelController()
  {
    $adminVue = new AdminVue();
    $adminVue->showAdminPanelVue();
  }
  public  function showAdminLoginController()
  {
    
    $adminVue = new AdminVue();
    $adminVue->showAdminLoginVue();
  }

  

}

?>