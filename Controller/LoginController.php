<?php

require_once('Model/UserModel.php');
require_once('Vue/LoginVue.php');



class LoginController {

    public function loginViewController()
    {
        
        $LoginVue = new LoginVue();
        $LoginVue->view();
    }

    function loginVerifyController($mail,$password)
    {

         $usermodel = new UserModel();
            $user=  $usermodel->getUser($mail);
    echo $user["type_user"];
         
      if ($user && password_verify($password, password_hash($user['hash_pwd'], PASSWORD_DEFAULT))) {
                // on la démarre :)
                
        session_start();
        $_SESSION["droit"]="";
        $_SESSION['mail'] = $_POST['mail'];
        $_SESSION['password'] = $_POST['password'];
        $user_type=$user["type_user"];
        echo $user_type;
        //0 admin 1 Etudiant 2 Prof 3 Parent
       switch ($user_type) {
            case 0:
                $_SESSION["droit"]="admin";
                header('location: espaceAdmin');
                break;
            case 1:
                $_SESSION["droit"]="etudiant";
                header('location: espaceEtudiantAuth');
                break;
            case 2:
                $_SESSION["droit"]="enseignant";
                header('location: enseignant');
                break;

            case 3:
                $_SESSION["droit"]="parent";
                header('location: espaceParentAuth');
                break;

            default:
        }
    
    } else {
        // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
        echo '<script language="javascript">';
        echo 'alert("Membre non reconnu...")';
        echo '</script>';
        // puis on le redirige vers la page d'accueil
        //La redirection HTML ou redirection temporisée meta refresh indique au navigateur web de recharger la page visitée ou de charger une autre page au bout d’une durée définie.
        echo '<meta http-equiv="refresh" content="0;URL=Home">';
    }
    }    
    
}

?>