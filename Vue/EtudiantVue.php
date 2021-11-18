<?php
class EtudiantVue {

  public function __construct() {
    ;
  }

  public function showEtudiantInfoVue($etudiant){
    $title = 'Info Eleve';

    $content = ob_start();
    require("Vue/MenuBar.php"); 

    ?>
<!-- component -->
<form method="POST" action="logOut">
    <button type="submit"
        class="mt-10 ml-5 bg-blue-700 text-white border border-blue-700 font-bold py-2 px-6 rounded-lg">
        Déconnecter
    </button>
</form>

<div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mt-28 mx-auto">
    <div class="flex justify-center md:justify-end -mt-16">
        <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="img/studentLogo.png">
    </div>
    <div>
        <h2 class="text-gray-800 text-3xl font-semibold">Carte Etudiant</h2>

    </div>
    <div class="flex flex-col text-sm pt-5">
        <label for="title" class="font-bold ">Email</label>
        <p class="mt-2 text-gray-600"><?php echo $etudiant["mail"]; ?></p>
    </div>
    <div class="flex flex-col text-sm pt-5">
        <label for="title" class="font-bold ">Date Naissance</label>
        <p class="mt-2 text-gray-600"><?php echo $etudiant["dateNaiss"]; ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold">Numero Telephone</label>
        <p class="mt-2 text-gray-600"><?php echo  "0".$etudiant["numero"]; ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold ">Addresse</label>
        <p class="mt-2 text-gray-600"><?php echo $etudiant["adress"]; ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold ">Cycle</label>
        <p class="mt-2 text-gray-600">
            <?php  
            	switch ($etudiant["cycle"]) {
                    case "0":
                        echo "Primaire"; 
                            break;
                    case "1":
                        echo "Moyen"; 
                        //header('location: Home');
                        break;
                    case "2":
                        echo "Secondaire"; 
                       break;                    
                        
                        default:
                } 
            ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold ">Niveau</label>
        <p class="mt-2 text-gray-600">
            <?php echo $etudiant["niveau"]; ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold ">Groupe</label>
        <p class="mt-2 text-gray-600">
            <?php echo $etudiant["groupe"] ?></p>
    </div>


    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold ">extra scolaire</label>
        <p class="mt-2 text-gray-600">
            <?php echo $etudiant["activExtra"]; ?></p>
    </div>

    <div class="flex justify-end">
        <a href="#"
            class="text-xl font-medium uppercase text-indigo-500"><?php echo $etudiant["nom"]." ".$etudiant["prenom"] ; ?></a>
    </div>
</div>

<?php
$content= ob_get_clean();
require_once('templateAccueil.php');
  }

  public function showEtudiantInfoVueFromEns($etudiant){
    $title = 'Info Eleve';

    $content = ob_start();
    ?>
<!-- component -->


<div class="max-w-md py-4 px-16 bg-white shadow-lg rounded-lg mt-28 mb-10 mx-auto">
    <div class="flex justify-center md:justify-end -mt-16">
        <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="img/studentLogo.png">
    </div>
    <div>
        <h2 class="text-gray-800 text-3xl font-semibold">Carte Etudiant</h2>

    </div>
    <div class="flex flex-col text-sm pt-5">
        <label for="title" class="font-bold ">Email</label>
        <p class="mt-2 text-gray-600"><?php echo $etudiant["mail"]; ?></p>
    </div>
    <div class="flex flex-col text-sm pt-5">
        <label for="title" class="font-bold ">Date Naissance</label>
        <p class="mt-2 text-gray-600"><?php echo $etudiant["dateNaiss"]; ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold">Numero Telephone</label>
        <p class="mt-2 text-gray-600"><?php echo  "0".$etudiant["numero"]; ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold ">Addresse</label>
        <p class="mt-2 text-gray-600"><?php echo $etudiant["adress"]; ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold ">Cycle</label>
        <p class="mt-2 text-gray-600">
            <?php  
            	switch ($etudiant["cycle"]) {
                    case "0":
                        echo "Primaire"; 
                            break;
                    case "1":
                        echo "Moyen"; 
                        //header('location: Home');
                        break;
                    case "2":
                        echo "Secondaire"; 
                       break;                    
                        
                        default:
                } 
            ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold ">Niveau</label>
        <p class="mt-2 text-gray-600">
            <?php echo $etudiant["niveau"]; ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold ">Groupe</label>
        <p class="mt-2 text-gray-600">
            <?php echo $etudiant["groupe"] ?></p>
    </div>


    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold ">extra scolaire</label>
        <p class="mt-2 text-gray-600">
            <?php echo $etudiant["activExtra"]; ?></p>
    </div>

    <div class="flex justify-end">
        <a href="#"
            class="text-xl font-medium uppercase text-indigo-500"><?php echo $etudiant["nom"]." ".$etudiant["prenom"] ; ?></a>
    </div>
</div>

<?php
$content= ob_get_clean();
require_once('templateEnseignant.php');
  }

  
  public function showEtudiantNotesVue($notes,$etudiant){
    $title = 'Note Eleve';

    $content = ob_start();
    require("Vue/MenuBar.php"); 

    ?>
<!-- component -->
<form method="POST" action="logOut">
    <button type="submit"
        class="mt-10 ml-5 bg-blue-700 text-white border border-blue-700 font-bold py-2 px-6 rounded-lg">
        Déconnecter
    </button>
</form>

<div class="text-gray-900  mx-10">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Notes
        </h1>
    </div>
    <div class="p-4 flex">
        <a href="#" class="text-xl font-medium uppercase text-indigo-500">
            <?php echo $etudiant["nom"]." ".$etudiant["prenom"] ; ?>
        </a>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Module</th>
                    <th class="text-left p-3 px-5">Note</th>
                    <th class="text-left p-3 px-5">Remarque</th>
                    <th class="text-left p-3 px-5">Coefficient</th>
                </tr>
                <?php
                foreach ($notes as $note) {
                    echo " <tr class='border-b hover:bg-orange-100 bg-gray-100'>
                    <td class='p-3 px-5'>
                        <p>".$note['titre']."</p>
                    </td>
                    <td class='p-3 px-5'>
                        <p>".$note['note']."</p>
                    </td>
                    <td class='p-3 px-5'>
                        <p>".$note['remarque']."</p>

                    </td>
                    <td class='p-3 px-5'>
                        <p>".$note['coeff']."</p>

                    </td> 
                </tr>";
                }

                ?>

            </tbody>
        </table>
    </div>
</div>
<?php
$content= ob_get_clean();
require_once('templateAccueil.php');
  }
  
  public function showEtudiantSeancesVue($seances){
    $title = 'Seance Eleve';

    $content = ob_start();
    require("Vue/MenuBar.php"); 

    ?>
<!-- component -->
<form method="POST" action="logOut">
    <button type="submit"
        class="mt-10 ml-5 bg-blue-700 text-white border border-blue-700 font-bold py-2 px-6 rounded-lg">
        Déconnecter
    </button>
</form>
<div class=" card bg-white grid grid-cols-6 gap-4 md:rounded-lg px-20 pb-6 mb-10 mx-20  mt-10">

    <div>
        <div class="title pb-6 pt-3">
            <h1 class="font-bold  text-3xl">Samedi</h1>
        </div>
        <div class="mb-5">
            <?php
                                foreach ($seances as $seance) {
                                    if ($seance['jour'] == "Samedi") {
                                        echo "<div class='mb-5'>";
                                        echo substr($seance['heureDebut'], 0, -3) . " - ";
                                        echo substr($seance['heureFin'], 0, -3);
                                        echo "<br>";
                                        echo $seance['titre'];
                                        echo "</div>";

                                    }
                                }
                                ?>
        </div>
    </div>
    <div>
        <div class="title pb-6 pt-3">
            <h1 class="font-bold  text-3xl">Dimanche</h1>
        </div>
        <div>
            <?php
                                foreach ($seances as $seance) {
                                    if ($seance['jour'] == "Dimanche") {
                                        echo "<div class='mb-5'>";
                                        echo substr($seance['heureDebut'], 0, -3) . " - ";
                                        echo substr($seance['heureFin'], 0, -3);
                                        echo "<br>";
                                        echo $seance['titre'];
                                        echo "</div>";
                                    }
                                }
                                ?>
        </div>
    </div>

    <div>
        <div class="title pb-6 pt-3">
            <h1 class="font-bold  text-3xl">Lundi</h1>
        </div>
        <div>
            <?php
                                foreach ($seances as $seance) {
                                    if ($seance['jour'] == "Mardi") {
                                        echo "<div class='mb-5'>";
                                        echo substr($seance['heureDebut'], 0, -3) . " - ";
                                        echo substr($seance['heureFin'], 0, -3);
                                        echo "<br>";
                                        echo $seance['titre'];
                                        echo "</div>";
                                    }
                                }
                                ?>
        </div>
    </div>
    <div>
        <div class="title pb-6 pt-3">
            <h1 class="font-bold  text-3xl">Mardi</h1>
        </div>
        <div>
            <?php
                                foreach ($seances as $seance) {
                                    if ($seance['jour'] == "Mercredi") {
                                        echo "<div class='mb-5'>";
                                        echo substr($seance['heureDebut'], 0, -3) . " - ";
                                        echo substr($seance['heureFin'], 0, -3);
                                        echo "<br>";
                                        echo $seance['titre'];
                                        echo "</div>";
                                    }
                                }
                                ?>
        </div>
    </div>
    <div>
        <div class="title pb-6 pt-3">
            <h1 class="font-bold  text-3xl">Mercredi</h1>
        </div>
        <div>
            <?php
                                foreach ($seances as $seance) {
                                    if ($seance['jour'] == "Jeudi") {
                                        echo "<div class='mb-5'>";
                                        echo substr($seance['heureDebut'], 0, -3) . " - ";
                                        echo substr($seance['heureFin'], 0, -3);
                                        echo "<br>";
                                        echo $seance['titre'];
                                        echo "</div>";
                                    }
                                }
                                ?>
        </div>
    </div>
    <div>
        <div class="title pb-6 pt-3">
            <h1 class="font-bold  text-3xl">Jeudi</h1>
        </div>
        <div>
            <?php
                                foreach ($seances as $seance) {
                                    if ($seance['jour'] == "Lundi") {
                                        echo "<div class='mb-5'>";
                                        echo substr($seance['heureDebut'], 0, -3) . " - ";
                                        echo substr($seance['heureFin'], 0, -3);
                                        echo "<br>";
                                        echo $seance['titre'];
                                        echo "</div>";

                                        //   echo "<div>" . $eleve_note['note'] . "</div>";
                                    }
                                }
                                ?>
        </div>
    </div>

</div>

<?php
$content= ob_get_clean();
require_once('templateAccueil.php');
  }

  public function aide($seance,$day){
      


  }
  public function showEspaceEtudiantView($articles){

    $title = 'Espace eleve ';

$content = ob_start();
require("Vue/MenuBar.php"); 
$LoginController=new LoginController();
$LoginController->loginViewController();
    ?>
<div class="title">
    <h1 class="font-bold  text-3xl  pl-20">Article intéressant </h1>
</div>
<div class="grid grid-cols-4 gap-2 px-8">

    <?php
        $articleController=new ArticleController();
        $cpt = -1;
        $bcl =0;
        foreach ($articles as $article) {
          if(str_contains($article["user_type"], 'Primaire')||str_contains($article["user_type"], 'Moyen')||str_contains($article["user_type"], 'Secondaires')){

            $cpt = $cpt + 1;
            if($cpt % 8 ==0){
              $bcl=$bcl+1;

            }
?>

    <div class="content content-<?php echo $bcl; ?>">
        <?php $articleController->show_article_controller($article); ?>
    </div>
    <?php          
           
        }
      }
        ?>


</div>

<center>
    <button type="submit"
        class="back mt-5 ml-5 bg-blue-700 text-white border border-blue-700 font-bold py-2 px-6 rounded-lg">
        Precedent
    </button>
    <button type="submit"
        class="next mt-5 ml-5 bg-blue-700 text-white border border-blue-700 font-bold py-2 px-6 rounded-lg">
        Suivant
    </button>
</center>

<script>
var openmodal = document.querySelectorAll('.modal-open')
for (var i = 0; i < openmodal.length; i++) {
    openmodal[i].addEventListener('click', function(event) {
        event.preventDefault()
        toggleModal()
    })
}

const overlay = document.querySelector('.modal-overlay')
overlay.addEventListener('click', toggleModal)

var closemodal = document.querySelectorAll('.modal-close')
for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
}

document.onkeydown = function(evt) {
    evt = evt || window.event
    var isEscape = false
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc")
    } else {
        isEscape = (evt.keyCode === 27)
    }
    if (isEscape && document.body.classList.contains('modal-active')) {
        toggleModal()
    }
};


function toggleModal() {
    const body = document.querySelector('body')
    const modal = document.querySelector('.modal')
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
}
</script>
<script>
var counter = 1;
$('.content-' + counter + '').show();
$('body').on('click', '.next', function() {
    $('.content-' + counter + '').hide();

    counter++;
    $('.content-' + counter + '').show();


    if (counter > 1) {
        $('.back').show();
    };


    if (counter > <?php echo $bcl; ?> - 1) {
        $('.next').hide();
    };

});

$('body').on('click', '.back', function() {
    $('.content-' + counter + '').hide();
    counter--;
    $('.content-' + counter + '').show();
    if (counter < 2) {
        $('.back').hide();
    }
    $('.next').show();

});
</script>

<?php
$content= ob_get_clean();
require_once('templateAccueil.php');
  }


  public function showEspaceEtudiantAuthView($notes,$etudiant,$seances){

    $title = 'Espace eleve ';

$content = ob_start();
require("Vue/MenuBar.php"); 

    ?>

<form method="POST" action="logOut">
    <button type="submit"
        class="mt-10 ml-5 bg-blue-700 text-white border border-blue-700 font-bold py-2 px-6 rounded-lg">
        Déconnecter
    </button>
</form>

<div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mt-28 mx-auto">
    <div class="flex justify-center md:justify-end -mt-16">
        <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="img/studentLogo.png">
    </div>
    <div>
        <h2 class="text-gray-800 text-3xl font-semibold">Carte Etudiant</h2>

    </div>
    <div class="flex flex-col text-sm pt-5">
        <label for="title" class="font-bold ">Email</label>
        <p class="mt-2 text-gray-600"><?php echo $etudiant["mail"]; ?></p>
    </div>
    <div class="flex flex-col text-sm pt-5">
        <label for="title" class="font-bold ">Date Naissance</label>
        <p class="mt-2 text-gray-600"><?php echo $etudiant["dateNaiss"]; ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold">Numero Telephone</label>
        <p class="mt-2 text-gray-600"><?php echo  "0".$etudiant["numero"]; ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold ">Addresse</label>
        <p class="mt-2 text-gray-600"><?php echo $etudiant["adress"]; ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold ">Cycle</label>
        <p class="mt-2 text-gray-600">
            <?php  
            	switch ($etudiant["cycle"]) {
                    case "0":
                        echo "Primaire"; 
                            break;
                    case "1":
                        echo "Moyen"; 
                        //header('location: Home');
                        break;
                    case "2":
                        echo "Secondaire"; 
                       break;                    
                        
                        default:
                } 
            ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold ">Niveau</label>
        <p class="mt-2 text-gray-600">
            <?php echo $etudiant["niveau"]; ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold ">Groupe</label>
        <p class="mt-2 text-gray-600">
            <?php echo $etudiant["groupe"] ?></p>
    </div>


    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold ">extra scolaire</label>
        <p class="mt-2 text-gray-600">
            <?php echo $etudiant["activExtra"]; ?></p>
    </div>

    <div class="flex justify-end">
        <a href="#"
            class="text-xl font-medium uppercase text-indigo-500"><?php echo $etudiant["nom"]." ".$etudiant["prenom"] ; ?></a>
    </div>
</div>




<div class="text-gray-900  mx-10">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Notes
        </h1>
    </div>
    <div class="p-4 flex">
        <a href="#" class="text-xl font-medium uppercase text-indigo-500">
            <?php echo $etudiant["nom"]." ".$etudiant["prenom"] ; ?>
        </a>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Module</th>
                    <th class="text-left p-3 px-5">Note</th>
                    <th class="text-left p-3 px-5">Remarque</th>
                    <th class="text-left p-3 px-5">Coefficient</th>
                </tr>
                <?php
                foreach ($notes as $note) {
                    echo " <tr class='border-b hover:bg-orange-100 bg-gray-100'>
                    <td class='p-3 px-5'>
                        <p>".$note['titre']."</p>
                    </td>
                    <td class='p-3 px-5'>
                        <p>".$note['note']."</p>
                    </td>
                    <td class='p-3 px-5'>
                        <p>".$note['remarque']."</p>

                    </td>
                    <td class='p-3 px-5'>
                        <p>".$note['coeff']."</p>

                    </td> 
                </tr>";
                }

                ?>

            </tbody>
        </table>
    </div>
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Emploi du temps
        </h1>
    </div>
    <div class=" card bg-white grid grid-cols-6 gap-4 md:rounded-lg px-20 pb-6 mb-10 mx-20  mt-10">

        <div>
            <div class="title pb-6 pt-3">
                <h1 class="font-bold  text-3xl">Samedi</h1>
            </div>
            <div class="mb-5">
                <?php
                            foreach ($seances as $seance) {
                                if ($seance['jour'] == "Samedi") {
                                    echo "<div class='mb-5'>";
                                    echo substr($seance['heureDebut'], 0, -3) . " - ";
                                    echo substr($seance['heureFin'], 0, -3);
                                    echo "<br>";
                                    echo $seance['titre'];
                                    echo "</div>";

                                }
                            }
                            ?>
            </div>
        </div>
        <div>
            <div class="title pb-6 pt-3">
                <h1 class="font-bold  text-3xl">Dimanche</h1>
            </div>
            <div>
                <?php
                            foreach ($seances as $seance) {
                                if ($seance['jour'] == "Dimanche") {
                                    echo "<div class='mb-5'>";
                                    echo substr($seance['heureDebut'], 0, -3) . " - ";
                                    echo substr($seance['heureFin'], 0, -3);
                                    echo "<br>";
                                    echo $seance['titre'];
                                    echo "</div>";
                                }
                            }
                            ?>
            </div>
        </div>

        <div>
            <div class="title pb-6 pt-3">
                <h1 class="font-bold  text-3xl">Lundi</h1>
            </div>
            <div>
                <?php
                            foreach ($seances as $seance) {
                                if ($seance['jour'] == "Mardi") {
                                    echo "<div class='mb-5'>";
                                    echo substr($seance['heureDebut'], 0, -3) . " - ";
                                    echo substr($seance['heureFin'], 0, -3);
                                    echo "<br>";
                                    echo $seance['titre'];
                                    echo "</div>";
                                }
                            }
                            ?>
            </div>
        </div>
        <div>
            <div class="title pb-6 pt-3">
                <h1 class="font-bold  text-3xl">Mardi</h1>
            </div>
            <div>
                <?php
                            foreach ($seances as $seance) {
                                if ($seance['jour'] == "Mercredi") {
                                    echo "<div class='mb-5'>";
                                    echo substr($seance['heureDebut'], 0, -3) . " - ";
                                    echo substr($seance['heureFin'], 0, -3);
                                    echo "<br>";
                                    echo $seance['titre'];
                                    echo "</div>";
                                }
                            }
                            ?>
            </div>
        </div>
        <div>
            <div class="title pb-6 pt-3">
                <h1 class="font-bold  text-3xl">Mercredi</h1>
            </div>
            <div>
                <?php
                            foreach ($seances as $seance) {
                                if ($seance['jour'] == "Jeudi") {
                                    echo "<div class='mb-5'>";
                                    echo substr($seance['heureDebut'], 0, -3) . " - ";
                                    echo substr($seance['heureFin'], 0, -3);
                                    echo "<br>";
                                    echo $seance['titre'];
                                    echo "</div>";
                                }
                            }
                            ?>
            </div>
        </div>
        <div>
            <div class="title pb-6 pt-3">
                <h1 class="font-bold  text-3xl">Jeudi</h1>
            </div>
            <div>
                <?php
                            foreach ($seances as $seance) {
                                if ($seance['jour'] == "Lundi") {
                                    echo "<div class='mb-5'>";
                                    echo substr($seance['heureDebut'], 0, -3) . " - ";
                                    echo substr($seance['heureFin'], 0, -3);
                                    echo "<br>";
                                    echo $seance['titre'];
                                    echo "</div>";

                                    //   echo "<div>" . $eleve_note['note'] . "</div>";
                                }
                            }
                            ?>
            </div>
        </div>

    </div>
</div>

<?php
$content= ob_get_clean();
require_once('templateAccueil.php');
  }

  }
?>