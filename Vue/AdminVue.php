<?php
class AdminVue {

  public function showAdminPanelVue(){
   
    $title = 'Ajouter Contact';
 
$content = ob_start();
    ?>



<?php
$content= ob_get_clean();
require_once('template.php');
  }

  public function showAdminLoginVue(){
   
    $title = 'Login Admin';
 
$content = ob_start();
require("Vue/MenuBar.php"); 

$LoginController=new LoginController();
$LoginController->loginViewController();
    ?>



<?php
$content= ob_get_clean();
require_once('templateAccueil.php');
  }
}
?>