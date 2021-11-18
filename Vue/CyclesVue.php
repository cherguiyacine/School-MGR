<?php
class CyclesVue {

  public function __construct() {
    ;
  }

  public function showPrimairePageVue($articles){
       $title = 'Pimaire';
 
       $repaController = new RepaController();
       $repa= $repaController->getRepaTodayController();
       if($repa){
             $repas=$repa["repa"];
             $desert=$repa["desert"];
       }else{
        $repas="aucun repas";
        $desert="aucun desert";
       }
       $content = ob_start();
       require("Vue/MenuBar.php"); 

      ?>

<div class="title py-2">
    <h1 class="font-bold text-center text-3xl">Primaire</h1>
</div>

<div class="grid  grid-cols-4 gap-4 ">
    <div class="max-w-sm border border-gray-400 bg-white rounded overflow-hidden shadow-lg   my-6 ml-4">
        <div style="height: 250px;">


            <img class="h-full w-full" src="img/calendar.jpg" alt="image">
        </div>

        <div class="px-6 py-4">
            <div class="font-bold text-xl text-blue-400"> Emplois du temps global</div>
            <p class="text-grey-darker text-base">
                Ce document, communément appelé emploi du temps ou par son synonyme, planning, ou parfois par son abrégé
                edt, est par définition un tableau à double entrées horaires/jours qui comporte les activités ou
                matières prévues de la semaine
            </p>

        </div>


        <div class=" px-6 mb-2 ">
            <form action="#" class="form-container" method='POST'>
                <div class=" submit">
                    <button type="submit" name="submit"
                        class=" bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full ">Afficher</button>
                </div>
            </form>

        </div>
    </div>
    <div class="max-w-sm border border-gray-400 bg-white rounded overflow-hidden shadow-lg   my-6 ">
        <div style="height: 250px;">


            <img class="h-full w-full" src="img/enseignant.jpeg" alt="image">
        </div>

        <div class="px-6 py-4">
            <div class="font-bold text-xl text-blue-400"> Liste des enseignants et heure de réception </div>
            <p class="text-grey-darker text-base">
                Cette Liste concernne les enseingnant du cycle primaire et leur heure de reception
                Cette Liste concernne les enseingnant du cycle primaire et leur heure de reception
                Cette Liste concernne les enseingnant du cycle primaire et leur heure de reception

            </p>

        </div>

        <div class=" px-6 mb-2 ">
            <form action="reception" class="form-container" method='POST'>
                <div class=" submit">
                    <button type="submit" name="submit"
                        class=" bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full ">Afficher</button>
                </div>
            </form>

        </div>
    </div>

    <div class="max-w-sm border border-gray-400 bg-white rounded overflow-hidden shadow-lg   my-6 ">
        <div style="height: 250px;">


            <img class="h-full w-full" src="img/information.jpg" alt="image">
        </div>

        <div class="px-6 py-4">
            <div class="font-bold text-xl text-blue-400">Informations pratiques </div>
            <p class="text-grey-darker text-base">
                Informaion pratique Cette Liste concernne les enseingnant du cycle primaire et leur heure de reception
                Informaion pratique Cette Liste concernne les enseingnant du cycle primaire et leur heure de reception
                Informaion pratique Cette Liste concernne les enseingnant du cycle primaire et leur heure de reception

            </p>

        </div>

        <div class=" px-6 mb-2 ">
            <form action="#" class="form-container" method='POST'>
                <div class=" submit">
                    <button type="submit" name="submit"
                        class=" bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full ">Afficher</button>
                </div>
            </form>

        </div>
    </div>

    <div class="max-w-sm border border-gray-400 bg-white rounded overflow-hidden shadow-lg my-6 mr-4">
        <div style="height: 250px;">


            <img class="h-full w-full" src="img/children.jpg" alt="image">
        </div>

        <div class="px-6 py-4">
            <div class="font-bold text-xl text-blue-400"> Informations sur la restauration</div>
            <p class="text-grey-darker text-base">
                Le Restaurant se situe à l’intérieur de l’Ecole CHERGUI de ORAN sur le territoire de la commune de « el
                hemri », Il est rattaché administrativement à la résidence de l'école , Sa
                capacité de restauration
                est de 1000 repas / jour.
            </p>

        </div>

        <div class="px-6 mb-2">
            <form action="#" class="form-container" method='POST'>
                <div class="submit">
                    <button type="submit" name="submit"
                        class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full ">Afficher</button>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

        <div
            class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                viewBox="0 0 18 18">
                <path
                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                </path>
            </svg>
            <span class="text-sm">(Esc)</span>
        </div>

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Repas d'aujourd'hui</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>

            <!--Body-->
            <label for="description" class="font-bold mt-4 mb-2">Repas</label>
            <p class="mb-5"><?php echo $repas ?></p>

            <label for="description" class="font-bold mt-4 mb-2">Desert</label>

            <p><?php echo $desert ?></p>


            <!--Footer-->
            <div class="flex justify-end pt-2">
                <button
                    class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2"></button>
                <button
                    class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Fermer</button>
            </div>

        </div>
    </div>
</div>
<div class="title">
    <h1 class="font-bold  text-3xl  pl-20 mt-12">Article intéressant </h1>
</div>
<div class="grid grid-cols-4 gap-2 px-8">

    <?php
        $articleController=new ArticleController();
        $cpt = -1;
        $bcl =0;
        foreach ($articles as $article) {
          if(str_contains($article["user_type"], 'Primaire')){

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

  public function showMoyenPageVue($articles){
    $title = 'Moyen';

    $repaController = new RepaController();
    $repa= $repaController->getRepaTodayController();
    if($repa){
          $repas=$repa["repa"];
          $desert=$repa["desert"];
    }else{
     $repas="aucun repas";
     $desert="aucun desert";
    }
    $content = ob_start();
    require("Vue/MenuBar.php"); 

   ?>
<div class="title py-2">
    <h1 class="font-bold text-center text-3xl">Moyen</h1>
</div>


<div class="grid  grid-cols-4 gap-4 ">
    <div class="max-w-sm border border-gray-400 bg-white rounded overflow-hidden shadow-lg   my-6 ml-4">
        <div style="height: 250px;">


            <img class="h-full w-full" src="img/calendar.jpg" alt="image">
        </div>

        <div class="px-6 py-4">
            <div class="font-bold text-xl text-blue-400"> Emplois du temps global</div>
            <p class="text-grey-darker text-base">
                Ce document, communément appelé emploi du temps ou par son synonyme, planning, ou parfois par son abrégé
                edt, est par définition un tableau à double entrées horaires/jours qui comporte les activités ou
                matières prévues de la semaine
            </p>

        </div>



        <div class=" px-6 mb-2 ">
            <form action="#" class="form-container" method='POST'>
                <div class=" submit">
                    <button type="submit" name="submit"
                        class=" bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full ">Afficher</button>
                </div>
            </form>

        </div>
    </div>
    <div class="max-w-sm border border-gray-400 bg-white rounded overflow-hidden shadow-lg   my-6 ">
        <div style="height: 250px;">


            <img class="h-full w-full" src="img/enseignant.jpeg" alt="image">
        </div>

        <div class="px-6 py-4">
            <div class="font-bold text-xl text-blue-400"> Liste des enseignants et heure de réception </div>
            <p class="text-grey-darker text-base">
                Cette Liste concernne les enseingnant du cycle primaire et leur heure de reception
                Cette Liste concernne les enseingnant du cycle primaire et leur heure de reception
                Cette Liste concernne les enseingnant du cycle primaire et leur heure de reception

            </p>

        </div>

        <div class=" px-6 mb-2 ">
            <form action="reception" class="form-container" method='POST'>
                <div class=" submit">
                    <button type="submit" name="submit"
                        class=" bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full ">Afficher</button>
                </div>
            </form>

        </div>
    </div>

    <div class="max-w-sm border border-gray-400 bg-white rounded overflow-hidden shadow-lg   my-6 ">
        <div style="height: 250px;">


            <img class="h-full w-full" src="img/information.jpg" alt="image">
        </div>

        <div class="px-6 py-4">
            <div class="font-bold text-xl text-blue-400">Informations pratiques </div>
            <p class="text-grey-darker text-base">
                Informations pratiques Informations pratiques Informations pratiques Informations pratiques Informations
                pratiques Informations pratiques Informations pratiquesInformations pratiques Informations pratiques
                Informations pratiques Informations pratiques Informations pratiques
            </p>

        </div>

        <div class=" px-6 mb-2 ">
            <form action="#" class="form-container" method='POST'>
                <div class=" submit">
                    <button type="submit" name="submit"
                        class=" bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full ">Afficher</button>
                </div>
            </form>

        </div>
    </div>

    <div class="max-w-sm border border-gray-400 bg-white rounded overflow-hidden shadow-lg my-6 mr-4">
        <div style="height: 250px;">


            <img class="h-full w-full" src="img/children.jpg" alt="image">
        </div>

        <div class="px-6 py-4">
            <div class="font-bold text-xl text-blue-400"> Informations sur la restauration</div>
            <p class="text-grey-darker text-base">
                Le Restaurant se situe à l’intérieur de l’Ecole CHERGUI de ORAN sur le territoire de la commune de « el
                hemri », Il est rattaché administrativement à la résidence de l'école , Sa
                capacité de restauration
                est de 1000 repas / jour.
            </p>

        </div>

        <div class="px-6 mb-2">
            <form action="#" class="form-container" method='POST'>
                <div class="submit">
                    <button type="submit" name="submit"
                        class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full ">Afficher</button>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

        <div
            class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                viewBox="0 0 18 18">
                <path
                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                </path>
            </svg>
            <span class="text-sm">(Esc)</span>
        </div>

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Repas d'aujourd'hui</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>

            <!--Body-->
            <label for="description" class="font-bold mt-4 mb-2">Repas</label>
            <p class="mb-5"><?php echo $repas ?></p>

            <label for="description" class="font-bold mt-4 mb-2">Desert</label>

            <p><?php echo $desert ?></p>


            <!--Footer-->
            <div class="flex justify-end pt-2">
                <button
                    class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2"></button>
                <button
                    class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Fermer</button>
            </div>

        </div>
    </div>
</div>
<div class="title">
    <h1 class="font-bold  text-3xl  pl-20 mt-12">Article intéressant </h1>
</div>
<div class="grid grid-cols-4 gap-2 px-8">

    <?php
        $articleController=new ArticleController();
        $cpt = -1;
        $bcl =0;
        foreach ($articles as $article) {
          if(str_contains($article["user_type"], 'Moyen')){

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
public function showSecondairePageVue($articles){
    $title = 'Secondaire';

    $repaController = new RepaController();
    $repa= $repaController->getRepaTodayController();
    if($repa){
          $repas=$repa["repa"];
          $desert=$repa["desert"];
    }else{
     $repas="aucun repas";
     $desert="aucun desert";
    }
    $content = ob_start();
    require("Vue/MenuBar.php"); 

   ?>
<div class="title py-2">
    <h1 class="font-bold text-center text-3xl">Secondaire</h1>
</div>

<div class="grid  grid-cols-4 gap-4 ">
    <div class="max-w-sm border border-gray-400 bg-white rounded overflow-hidden shadow-lg   my-6 ml-4">
        <div style="height: 250px;">


            <img class="h-full w-full" src="img/calendar.jpg" alt="image">
        </div>

        <div class="px-6 py-4">
            <div class="font-bold text-xl text-blue-400"> Emplois du temps global</div>
            <p class="text-grey-darker text-base">
                Ce document, communément appelé emploi du temps ou par son synonyme, planning, ou parfois par son abrégé
                edt, est par définition un tableau à double entrées horaires/jours qui comporte les activités ou
                matières prévues de la semaine
            </p>

        </div>



        <div class=" px-6 mb-2 ">
            <form action="#" class="form-container" method='POST'>
                <div class=" submit">
                    <button type="submit" name="submit"
                        class=" bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full ">Afficher</button>
                </div>
            </form>

        </div>
    </div>
    <div class="max-w-sm border border-gray-400 bg-white rounded overflow-hidden shadow-lg   my-6 ">
        <div style="height: 250px;">


            <img class="h-full w-full" src="img/enseignant.jpeg" alt="image">
        </div>

        <div class="px-6 py-4">
            <div class="font-bold text-xl text-blue-400"> Liste des enseignants et heure de réception </div>
            <p class="text-grey-darker text-base">
                Cette Liste concernne les enseingnant du cycle primaire et leur heure de reception
                Cette Liste concernne les enseingnant du cycle primaire et leur heure de reception
                Cette Liste concernne les enseingnant du cycle primaire et leur heure de reception

            </p>

        </div>

        <div class=" px-6 mb-2 ">
            <form action="reception" class="form-container" method='POST'>
                <div class=" submit">
                    <button type="submit" name="submit"
                        class=" bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full ">Afficher</button>
                </div>
            </form>

        </div>
    </div>

    <div class="max-w-sm border border-gray-400 bg-white rounded overflow-hidden shadow-lg   my-6 ">
        <div style="height: 250px;">


            <img class="h-full w-full" src="img/information.jpg" alt="image">
        </div>

        <div class="px-6 py-4">
            <div class="font-bold text-xl text-blue-400">Informations pratiques </div>
            <p class="text-grey-darker text-base">
                Informations pratiques Informations pratiques
                Informations pratiques Informations pratiques

                Cette Liste concernne les enseingnant du cycle primaire et leur heure de reception
                Cette Liste concernne les enseingnant du cycle primaire et leur heure de reception
            </p>

        </div>

        <div class=" px-6 mb-2 ">
            <form action="#" class="form-container" method='POST'>
                <div class=" submit">
                    <button type="submit" name="submit"
                        class=" bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full ">Afficher</button>
                </div>
            </form>

        </div>
    </div>

    <div class="max-w-sm border border-gray-400 bg-white rounded overflow-hidden shadow-lg my-6 mr-4">
        <div style="height: 250px;">


            <img class="h-full w-full" src="img/children.jpg" alt="image">
        </div>

        <div class="px-6 py-4">
            <div class="font-bold text-xl text-blue-400"> Informations sur la restauration</div>
            <p class="text-grey-darker text-base">
                Le Restaurant se situe à l’intérieur de l’Ecole CHERGUI de ORAN sur le territoire de la commune de « el
                hemri », Il est rattaché administrativement à la résidence de l'école , Sa
                capacité de restauration
                est de 1000 repas / jour.
            </p>

        </div>

        <div class="px-6 mb-2">
            <form action="#" class="form-container" method='POST'>
                <div class="submit">
                    <button type="submit" name="submit"
                        class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full ">Afficher</button>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

        <div
            class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                viewBox="0 0 18 18">
                <path
                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                </path>
            </svg>
            <span class="text-sm">(Esc)</span>
        </div>

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Repas d'aujourd'hui</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>

            <!--Body-->
            <label for="description" class="font-bold mt-4 mb-2">Repas</label>
            <p class="mb-5"><?php echo $repas ?></p>

            <label for="description" class="font-bold mt-4 mb-2">Desert</label>

            <p><?php echo $desert ?></p>


            <!--Footer-->
            <div class="flex justify-end pt-2">
                <button
                    class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2"></button>
                <button
                    class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Fermer</button>
            </div>

        </div>
    </div>
</div>
<div class="title">
    <h1 class="font-bold  text-3xl  pl-20 mt-12">Article intéressant </h1>
</div>
<div class="grid grid-cols-4 gap-2 px-8">

    <?php
        $articleController=new ArticleController();
        $cpt = -1;
        $bcl =0;
        foreach ($articles as $article) {
          if(str_contains($article["user_type"], 'Secondaire')){

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


public function afficheHeureReceptionVue(){
    $title = 'Reception';

    $content = ob_start();
    require("Vue/MenuBar.php"); 
    $EnseingnantController = new EnseignantController() ;    
    $receptions = $EnseingnantController->getReception() ;
   
    
    ?>



<div class="p-12">
    <div class="w-96 m-auto ">
        <div
            class="  border-8 border-blue-200 grid-flow-row overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
            <h1 class="font-bold text-center text-3xl mx-auto mt-6">Heure Reception</h1>

            <?php     foreach ( $receptions  as $reception) {
 ?>
            <div class=" col-span-3 row-span-1">
                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <label for="title" class="font-bold mb-2"><?php         echo  $reception["nom"];?></label>
                    </h1>
                    <h1 class="text-lg">
                        <label for="title" class="font-bold mb-2"><?php         echo  $reception["prenom"];?></label>
                    </h1>
                    <p class="text-grey-darker text-sm ml-5"><?php         echo  $reception["jour"];?></p>

                    <p class="text-grey-darker text-sm ml-5"><?php               echo  $reception["heuredebut"];
?></p>
                    <p class="text-grey-darker text-sm ml-5"><?php                 echo  $reception["heurefin"];
?></p>

                </header>
            </div>
            <?php } ?>

        </div>
    </div>
</div>

<?php
$content= ob_get_clean();
require_once('templateAccueil.php');
  }

  }
?>