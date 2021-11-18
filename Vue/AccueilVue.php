<?php
class AccueilVue {

  public function __construct() {
    ;
  }

  public function show_Accueil_view($articles){
       $title = 'Accueil';
 
       $content = ob_start();
      ?>


<div class="cadre">
    <ul class="diaporama">

        <li> <img src="img/calendar.jpg" alt="Photo couverture" title="Photo couverture" />
        </li>
        <li> <img src="img/enseignant.jpeg" alt="Photo couverture" title="Photo couverture" />
        </li>
        <li> <img src="img/p3.jpg" alt="Photo couverture" title="Photo couverture" />
        </li>
        <li> <img src="img/p4.jpg" alt="Photo couverture" title="Photo couverture" />
        </li>
    </ul>
</div>

<?php   require("Vue/MenuBar.php"); ?>
<div class="title">
    <h1 class="font-bold  text-3xl  pl-20 mt-12">Article intéressant </h1>
</div>
<div class="grid grid-cols-4 gap-2 px-8">

    <?php
        $articleController=new ArticleController();
        $cpt = -1;
        $bcl =0;
        foreach ($articles as $article) {
          if(str_contains($article["user_type"], 'tous')){

            $cpt = $cpt + 1;
            if($cpt % 8 ==0){
              $bcl=$bcl+1;

            }
           //   $articleController->show_article_controller($article);
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

  }
?>