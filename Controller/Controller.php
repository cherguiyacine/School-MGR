<?php

require_once('Model/UserModel.php');
require_once('Model/articleModel.php');
require_once('Vue/UserVue.php');

require_once('Vue/LoginVue.php');
require_once('Vue/ArticleVue.php');


class Controller {

 

  public  function createUserVue()
  {
  
      $UserVue = new UserVue();
      $UserVue->afficheAddUser();
  
  
  }

 
  public  function createUser()
    {
        $usermodel = new UserModel();
        $usermodel->createUser();
       header('location: admin');
    }
    public  function logOut()
    {
      session_start();
    
      // On détruit les variables de notre session
      session_unset();
      
      // On détruit notre session
      session_destroy();
     header('location: Home');
    }



}

?>