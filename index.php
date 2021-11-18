<?php

require_once "router.php";
require_once('Controller/Controller.php');
require_once('Controller/LoginController.php');
require_once('Controller/ArticleController.php');
require_once('Controller/PresentationController.php');
require_once('Controller/ContactController.php');
require_once('Controller/RepaController.php');
require_once('Controller/AccueilController.php');
require_once('Controller/ParentController.php');
require_once('Controller/EtudiantController.php');
require_once('Controller/SeanceController.php');
require_once('Controller/AdminController.php');
require_once('Controller/EnseignantController.php');
require_once('Controller/CyclesController.php');


route('/', function () {
    $cntr= new AccueilController();
    $cntr->accueilViewController();});

route('/about', function () {
    require_once('./Vue/test.html');

});

route('/showAddUser', function () {
        session_start();
   if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="admin") {
    $cntr= new Controller();
    $cntr->createUserVue();
    } else{
        require_once('./Vue/eror.php');
    }
    
});



route('/createUser', function () {
    session_start();
   if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="admin") {
    $cntr= new Controller();
    $cntr->createUser();
    } else{
        require_once('./Vue/eror.php');
    }
   
    
});



route('/Home', function () {
    $cntr= new AccueilController();
    $cntr->accueilViewController();
    
});



route('/template', function () {
    require_once('./Vue/AccueilVue.php');
});



route('/login', function () {
    $cntr= new AdminController();
    $cntr->showAdminLoginController();
});


route('/loginAdmin', function () {
    $cntr= new AdminController();
    $cntr->showAdminLoginController();
    
});

route('/loginEnseignant', function () {
    $cntr= new AdminController();
    $cntr->showAdminLoginController();
   
});

route('/loginForm', function () {
    if(isset($_POST["mail"])&&isset($_POST["password"])){
        $cntr= new LoginController();
        $cntr->loginVerifyController($_POST["mail"],$_POST["password"]);
    }else{
        require_once('./Vue/eror.php');
    }        

   
});



route('/article', function () {
    $cntr= new ArticleController();
    $cntr->show_articles_controller();
});


route('/articleShow', function () {
    $cntr= new ArticleController();
    echo $_POST["said"];   
  //  $cntr->show_articles_controller();
});

route('/article_details', function () {
    $cntr= new ArticleController();
    $cntr->showArticleDetail_controller();
});


route('/showAddContact', function () {
       session_start();
   if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="admin") {
    $cntr= new ContactController();
    $cntr->showaddContactVueController();
    } else{
        require_once('./Vue/eror.php');
    }
   
});

route('/showContactDetails', function () {
    $cntr= new ContactController();
   $cntr->showContactDetailsVueController();
});

route('/AddContact', function () {
    session_start();
    if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="admin") {
        $cntr= new ContactController();
        $cntr->addContactController();
     } else{
         require_once('./Vue/eror.php');
     }
   
});

route('/showAddRepa', function () {
       session_start();
   if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="admin") {
    $cntr= new RepaController();
    $cntr->showaddRepaController();
    } else{
        require_once('./Vue/eror.php');
    }
   
});

route('/AddRepa', function () {
      session_start();
   if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="admin") {
    $cntr= new RepaController();
    $cntr->addRepaController();
    } else{
        require_once('./Vue/eror.php');
    }
  
});

route('/showAddSeance', function () {
      session_start();
   if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="admin") {
    $cntr= new SeanceController();
    $cntr->showaddSeanceController();
    } else{
        require_once('./Vue/eror.php');
    }
    
});

route('/AddSeance', function () {
   
   session_start();
   if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="admin") {
    $cntr= new SeanceController();
    $cntr->addSeanceController();
    } else{
        require_once('./Vue/eror.php');
    }
 
});



route('/showAddArticle', function () {
      session_start();
   if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="admin") {
    $cntr= new ArticleController();
    $cntr->show_addArticle_controller();
    } else{
        require_once('./Vue/eror.php');
    }
   
});



route('/AddArticle', function () {
    session_start();
    if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="admin") {
        $cntr= new ArticleController();
        $cntr->addArticle_controller();
     } else{
         require_once('./Vue/eror.php');
     }
   
});



route('/addPresentationDeLecole', function () {
    session_start();
    if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="admin") {
        $cntr= new PresentationController();
        $cntr->addPresentationDeLecole();
     } else{
         require_once('./Vue/eror.php');
     }
 
});


route('/showaddPresentationDeLecole', function () {
    session_start();
    if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="admin") {
        $cntr= new PresentationController();
        $cntr->showaddPresentationEcoleController();
     } else{
         require_once('./Vue/eror.php');
     }

});


route('/showPresentationDeLecole', function () {
     $cntr= new PresentationController();
     $cntr->showPresentationEcoleController();
});



route('/espaceParent', function () {
    session_start();
    if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="parent") {
     $cntr= new ParentController();
    $cntr->showEspaceParentAuthController($_SESSION["mail"]);

    }else{ $cntr= new ParentController();
        $cntr->showEspaceParentController();}
   
});

route('/espaceParentAuth', function () {
    session_start();
    if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="parent") {
     $cntr= new ParentController();
    $cntr->showEspaceParentAuthController($_SESSION["mail"]);

    }
    else{
        require_once('./Vue/eror.php');
 
    }
});

route('/showStudentInfoDetailsFromParent', function () {
    session_start();
    if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="parent") {

        $cntr= new EtudiantController();
        $cntr->showEtudiantInfoController();

    }else{
        require_once('./Vue/eror.php');
    }
    
   
});

route('/showStudentNotesDetailsFromParent', function () {
    session_start();
    if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="parent") {

        $cntr= new EtudiantController();
        $cntr->showEtudiantNotesController();

    }else{
        require_once('./Vue/eror.php');
    }
    
});

route('/showStudentInfoDetailsFromEnseignant', function () {
    session_start();
    if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="enseignant") {

        $cntr= new EtudiantController();
        $cntr->showEtudiantInfoFromEnsController();

    }else{
        require_once('./Vue/eror.php');
    }

    
});

route('/updateNoteGroupeFromEnseignant', function () {
    session_start();
    if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="enseignant") {

     
    $cntr= new EnseignantController();
    $cntr->updateNoteGroupeFromEnseignantController();

    }else{
        require_once('./Vue/eror.php');
    }

});

route('/showPrimaire', function () {
    $cntr= new CyclesController();
    $cntr->showPrimairePageController();
});

route('/showMoyen', function () {
    $cntr= new CyclesController();
    $cntr->showMoyenPageController();
});

route('/showSecondaire', function () {
    $cntr= new CyclesController();
    $cntr->showSecondairePageController();
});



route('/showStudentSeancesDetailsFromParent', function () {
    session_start();
    if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="parent") {

        $cntr= new EtudiantController();
        $cntr->showEtudiantSeancesController();

    }else{
        require_once('./Vue/eror.php');
    }
    
});


route('/espaceEtudiant', function () {
    session_start();
    if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="etudiant") {
     $cntr= new EtudiantController();
    $cntr->showEspaceEtudiantAuthController($_SESSION["mail"]);

    }else{
         $cntr= new EtudiantController();
        $cntr->showEspaceEtudiantController();}
   
});

route('/espaceEtudiantAuth', function () {
    session_start();
    if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="etudiant") {
     $cntr= new EtudiantController();
    $cntr->showEspaceEtudiantAuthController($_SESSION["mail"]);

    } else{
        require_once('./Vue/eror.php');
 
    }
    
});

route('/admin', function () {
    session_start();
    if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="admin") {
        $cntr= new AdminController();
    $cntr->showAdminPanelController();
    } else{
        require_once('./Vue/eror.php');
    }
   
});
route('/espaceAdmin', function () {
     session_start();
     if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="admin") {
        $cntr= new AdminController();
        $cntr->showAdminPanelController();
     } else{
         require_once('./Vue/eror.php');
     }

 });
 

route('/enseignant', function () {
    session_start();
   if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="enseignant") {
    $cntr= new EnseignantController();
    $cntr->showEnseignantPanelController();
    } else{
        require_once('./Vue/eror.php');
    }
    
    
});

route('/ajouterNote', function () {
    session_start();
    if (isset($_SESSION['mail']) && isset($_SESSION['password']) && $_SESSION["droit"]=="enseignant") {
        $cntr= new EnseignantController();
        $cntr->showAddNoteController();
     } else{
         require_once('./Vue/eror.php');
     }
    
});
route('/reception', function () {
        $cntr= new EnseignantController();
        $cntr->afficheHeureReception();
     
    
});

route('/logOut', function () {
    $cntr= new Controller();
    $cntr->logOut();
});


$action = $_SERVER['REQUEST_URI'];
dispatch($action);