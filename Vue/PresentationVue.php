<?php
class PresentationVue {


  public function show_addPresentation_view(){
    $title = 'Ajouter Presentation';
 
$content = ob_start();
    ?>


<form class="form-horizontal w-3/4 mx-auto" method="POST" action="addPresentationDeLecole"
    enctype="multipart/form-data">

    <div class=" card bg-white max-w-md p-10 md:rounded-lg  mx-auto mt-10">
        <div class="title">
            <h1 class="font-bold text-center text-3xl">Ajouter Presentation</h1>
        </div>

        <div class="form mt-4">
            <div class="flex flex-col text-sm py-3">
                <label for="title" class="font-bold mb-2">Titre</label>
                <textarea name="para" id="para"
                    class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                    type="text" placeholder="Enter a paragraphe"> </textarea>
            </div>
            <div class="flex flex-col text-sm py-3">
                <label for="title" class="font-bold mb-2">Selectionner une image</label>
                <input type="file" name="fileToUpload" id="fileToUpload">

            </div>

        </div>



        <div class="submit">
            <button type="submit" value="Upload Image" name="submit"
                class=" w-full bg-blue-600 shadow-lg text-white px-4 py-2 hover:bg-blue-700 mt-8 text-center font-semibold focus:outline-none ">Submit</button>
        </div>
    </div>


</form>



<?php
$content= ob_get_clean();
require_once('template.php');
  }

  public function showPresentationEcole_view($presentation){
   
    $title = 'Ajouter Presentation';
 
    $content = ob_start();
    require("Vue/MenuBar.php"); 
?>
<div class=" card bg-white  md:rounded-lg px-20 pb-10 mb-10  m-96 mt-10">
    <div class="title py-2">
        <h1 class="font-bold text-center text-3xl">Presentation</h1>
    </div>
    <?php
    foreach ($presentation as $paragraph_image) {
        $link = $paragraph_image["img_url"];
        $src = "img/$link"; // source file of the image
        ?>




    <div class="form mt-4">
        <div class="flex flex-col text-sm">
            <label for="title" class="font-bold mb-2"><?php
        echo $paragraph_image['para'];?></label>

        </div>


        <div class="col-span-3 row-span-4 w-full  p-1 m-1 ">
            <a href="#">
                <img src=<?php echo     $src; ?>>
            </a>
        </div>


    </div>



    <?php
      
    }

    ?>
</div>
<?php

$content= ob_get_clean();
require_once('templateAccueil.php');

}



}
?>