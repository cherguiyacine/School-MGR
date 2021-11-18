<?php
class ParentVue {


  public function showEspaceParentView($articles){

    $title = 'Espace Parent';

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

  
  public function showPresentationEcole_view($presentation){
   
    $title = 'Ajouter Presentation';
 
    $content = ob_start();
    require("Vue/MenuBar.php"); 

    foreach ($presentation as $paragraph_image) {
        $link = $paragraph_image["img_url"];
        $src = "img/$link"; // source file of the image
        echo $paragraph_image['para'];
        echo '<br>';
        echo '<img style="margin: auto;" src=' . $src . '  width="20%" height="20%"> ';
        echo '<br>';
    }
    $content= ob_get_clean();
require_once('templateAccueil.php');
  
  }

  public function   showEspaceParentAuthView($Enfants,$infoPerso){
   
    $title = 'Ajouter Presentation';
 
    $content = ob_start();
    require("Vue/MenuBar.php"); 
    $this->showParentInfoVue($infoPerso);
    ?>



<div class="text-gray-900  mx-10">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Mes Enfants
        </h1>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Nom</th>
                    <th class="text-left p-3 px-5">Prenom</th>
                    <th class="text-left p-3 px-5">addresse</th>
                    <th class="text-left p-3 px-5">Numero</th>

                    <th></th>
                </tr>
                <?php
                foreach ($Enfants as $enfant) {
                    echo " <tr class='border-b hover:bg-orange-100 bg-gray-100'>
                    <td class='p-3 px-5'>
                        <p>".$enfant['nom']."</p>
                    </td>
                    <td class='p-3 px-5'>
                        <p>".$enfant['prenom']."</p>
                    </td>
                    <td class='p-3 px-5'>
                        <p>".$enfant['adress']."</p>

                    </td>
                    <td class='p-3 px-5'>
                        <p>0".$enfant['numero']."</p>

                    </td>
                    <td class='p-3 px-5 flex justify-end'>
                    <form action='showStudentInfoDetailsFromParent' method='post'>
                        <input type='hidden' name='idEtudiant' value=" . $enfant['idEtudiant'] . ">
                        <input type='hidden' name='idUser' value=" . $enfant['idUsers'] . ">

                        <button type='submit'
                            class='mr-3 text-sm bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline'>Voir
                            profil</button>
                    </form>
                    <form action='showStudentSeancesDetailsFromParent' method='post'>
                        <input type='hidden' name='idEtudiant' value=" . $enfant['idEtudiant'] . ">
                        <input type='hidden' name='idUser' value=" . $enfant['idUsers'] . ">

                        <button type='submit'
                            class='mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline'>Emploi
                            du temps</button>
                    </form>
                    <form action='showStudentNotesDetailsFromParent' method='post'>
                        <input type='hidden' name='idEtudiant' value=" . $enfant['idEtudiant'] . ">
                        <input type='hidden' name='idUser' value=" . $enfant['idUsers'] . ">

                        <button type='submit'
                            class='mr-3 text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline'>Note
                            et remarque</button>
                    </form>
                </td>
                    <td >
                  
        
                  </td>
                </tr>
";
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

  
  public function showParentInfoVue($infoPerso){
 
?>

<form method="POST" action="logOut">
    <button type="submit"
        class="mt-10 ml-5 bg-blue-700 text-white border border-blue-700 font-bold py-2 px-6 rounded-lg">
        Déconnecter
    </button>
</form>
<div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mb-10 mt-10 mx-auto">
    <div class="flex justify-center md:justify-end -mt-16">
        <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="img/studentLogo.png">
    </div>
    <div>
        <h2 class="text-gray-800 text-3xl font-semibold">Informations du tuteur principal </h2>

    </div>
    <div class="flex flex-col text-sm pt-5">
        <label for="title" class="font-bold ">Email</label>
        <p class="mt-2 text-gray-600"><?php echo $infoPerso["mail"]; ?></p>
    </div>
    <div class="flex flex-col text-sm pt-5">
        <label for="title" class="font-bold ">Date Naissance</label>
        <p class="mt-2 text-gray-600"><?php echo $infoPerso["dateNaiss"] ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold">Numero Telephone</label>
        <p class="mt-2 text-gray-600"><?php echo  "0".$infoPerso["numero"]; ?></p>
    </div>
    <div class="flex flex-col text-sm py-2">
        <label for="title" class="font-bold ">Addresse</label>
        <p class="mt-2 text-gray-600"><?php echo $infoPerso["adress"]; ?></p>
    </div>
    <div class="flex justify-end">
        <a href="#"
            class="text-xl font-medium uppercase text-indigo-500"><?php echo $infoPerso["nom"]." ".$infoPerso["prenom"] ; ?></a>
    </div>
</div>


<?php
  }

}
?>