<?php
class ArticleVue {

  public function __construct() {
    ;
  }



  public function affiche($article){
    $link = $article["imgURL"];
    $src = "img/$link";
    ?>
<!-- component -->
<div class="max-w-sm border border-gray-400 bg-white rounded overflow-hidden shadow-lg  m-8">
    <div style="height: 200px;">

        <?php
        echo '<img  class="h-full w-4/5	mx-auto my-4 rounded-md overflow-hidden  shadow "  src=' . $src . ' alt="image">'
?>
    </div>

    <div class="px-6 py-4">
        <div class="font-bold text-xl text-blue-400"><?php echo $article["titre"] ?></div>
        <p class="text-grey-darker text-base">
            <?php
            echo  substr($article['description'],0,25).'...';
            ?>
        </p>

    </div>
    <div class="px-6 ">
        <form action="article_details" class="form-container" method='POST'>
            <?php echo "<input type='hidden' name='idArticle' value=" . $article["idArticle"] . "></input>" ?>
            <button class="text-blue-500 text-xs " type="submit" class="btn">Afficher l'article</button>
        </form>

    </div>
</div>



<?php

  }


  public function show_addArticle_view(){
    $title = 'Ajouter Article';
 
$content = ob_start();
    ?>

<body class="antialiased text-gray-900 bg-blue-600">

    <form class="form-horizontal w-3/4 mx-auto" method="POST" action="AddArticle" enctype="multipart/form-data">

        <div class=" card bg-white max-w-md p-10 md:rounded-lg  mx-auto mt-10">
            <div class="title">
                <h1 class="font-bold text-center text-3xl">Ajouter Article</h1>
            </div>

            <div class="form mt-4">
                <div class="flex flex-col text-sm">
                    <label for="title" class="font-bold mb-2">Titre</label>
                    <input name="title"
                        class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                        type="text" placeholder="Enter a title">
                </div>

                <div class="text-sm flex flex-col">
                    <label for="description" class="font-bold mt-4 mb-2">Description</label>
                    <textarea name="description"
                        class=" appearance-none w-full border border-gray-200 p-2 h-40 focus:outline-none focus:border-gray-500"
                        placeholder="Enter your description"></textarea>
                </div>
                <div class="text-sm flex flex-col">
                    <label for="description" class="font-bold mt-4 mb-2">Cette article concerne</label>

                </div>
                <input type="Checkbox" name="Tous"> Tous <br>
                <input type="Checkbox" name="Enseignants"> Enseignants <br>
                <input type="Checkbox" name="Primaire"> Primaire <br>
                <input type="Checkbox" name="Moyen"> Moyen <br>
                <input type="Checkbox" name="Secondaires"> Secondaires <br>
                <input type="Checkbox" name="Parents"> Parents <br>

            </div>
            <div class="flex flex-col text-sm py-3">
                <label for="title" class="font-bold mb-2">Selectionner une image</label>
                <input type="file" name="fileToUpload" id="fileToUpload">

            </div>


            <div class="submit">
                <button type="submit" name="submit"
                    class=" w-full bg-blue-600 shadow-lg text-white px-4 py-2 hover:bg-blue-700 mt-8 text-center font-semibold focus:outline-none ">Submit</button>
            </div>
        </div>


    </form>

</body>
<?php
$content= ob_get_clean();
require_once('template.php');
  }
 
 public function showArticleDetail_view($article){

  $title = 'Article ';
 
  $content = ob_start();
  require("Vue/MenuBar.php"); 


   ?>
<div class="title">
    <h1 class="font-bold  text-3xl  pl-20">Detail Article </h1>
</div>
<div class="w-full border-b flex flex-row flex-wrap items-center p-1 ">


    <div class=" card bg-white  md:rounded-lg px-20 pb-10 mb-10  m-96 mt-10">
        <div class="title py-2">
            <h1 class="font-bold text-center text-3xl"> <?php echo $article['titre'] ?>
            </h1>
        </div>

        <?php
          $link = $article["imgURL"];
          $src = "img/$link"; // source file of the image
        ?>
        <div style="height: 300px;">

            <?php
echo '<img  class="h-full w-4/5	mx-auto my-4 rounded-md overflow-hidden  shadow "  src=' . $src . ' alt="image">'
?>
        </div>
        <div class="form mt-4">
            <div class="flex flex-col text-sm">
                <label for="title" class="font-bold mb-2"><?php
        echo $article['description'] ;?></label>

            </div>

        </div>



        <?php
    ?>
    </div>
    <?php
$content= ob_get_clean();
require_once('templateAccueil.php');
 }
  }
?>