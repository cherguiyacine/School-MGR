<?php
class ContactVue {

  public function show_Contact_view($contact){
   
    $title = 'Ajouter Contact';
 
$content = ob_start();
    ?>

<form class="form-horizontal w-3/4 mx-auto" method="POST" action="AddContact" enctype="multipart/form-data">

    <div class=" card bg-white max-w-md py-20 px-10 md:rounded-lg  mx-auto mt-10 flex flex-col">
        <div class="title card-header">
            <h1 class="font-bold text-center text-3xl">Modifier Contact</h1>
        </div>
        <div class="my-auto">
            <div class="form mt-4">
                <div class="flex flex-col text-sm py-3">
                    <label for="title" class="font-bold mb-2">Address Ecole</label>
                    <input value="<?php echo $contact["address"]; ?>" name="address"
                        class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                        type="text" placeholder="Address" required>
                </div>
                <div class="flex flex-col text-sm py-3">
                    <label for="title" class="font-bold mb-2">Numero Téléphone</label>
                    <input value="<?php echo $contact["numtlp"]; ?>"
                        pattern="[0]{1}[5-7]{1}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" name="tlp"
                        class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                        type="text" placeholder="Téléphone" required>
                </div>
                <div class="flex flex-col text-sm py-3">
                    <label for="title" class="font-bold mb-2">Numero Fax</label>
                    <input value="<?php echo $contact["fax"]; ?>"
                        pattern="[0]{1}[5-7]{1}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" name="fax"
                        class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                        type="text" placeholder="Fax" required>
                </div>

            </div>
            <div class="submit">
                <button type="submit" name="submit"
                    class=" w-full bg-blue-600 shadow-lg text-white px-4 py-2 hover:bg-blue-700 mt-8 text-center font-semibold focus:outline-none ">Submit</button>
            </div>
        </div>
    </div>

</form>


<?php
$content= ob_get_clean();
require_once('template.php');
  }


  public function show_ContactDetails_view($contact)
 {
   
     $title = 'Ajouter Presentation';
 
     $content = ob_start();
     require("Vue/MenuBar.php"); 

?>

<div class="p-12">
    <div class="w-96 m-auto ">
        <div
            class="  border-8 border-blue-200 grid-flow-row overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
            <h1 class="font-bold text-center text-3xl mx-auto mt-6">Contact</h1>

            <div class="col-span-3 row-span-4 p-1 m-1 ">
                <a href="#">
                    <img src="img/logoaccueil.png">
                </a>
            </div>
            <div class=" col-span-3 row-span-1">
                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <label for="title" class="font-bold mb-2">Addresse</label>
                    </h1>
                    <p class="text-grey-darker text-sm ml-5"><?php echo $contact["address"] ; ?></p>
                </header>
            </div>

            <div class="col-span-3 row-span-1">
                <header class="flex items-center  leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <label for="title" class="font-bold mb-2">Numéro Téléphone</label>

                    </h1>
                    <p class="text-grey-darker text-sm ml-5"><?php echo "0".$contact["numtlp"] ; ?></p>
                </header>
            </div>
            <div class="col-span-3 row-span-1">
                <header class="flex items-center  leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <label for="title" class="font-bold mb-2">Fax</label>

                    </h1>
                    <p class="text-grey-darker text-sm ml-5"><?php echo "0".$contact["numtlp"] ; ?></p>
                </header>
            </div>
        </div>
    </div>
</div>


<style>
.hide-scroll-bar {
    -ms-overflow-style: none;
    scrollbar-width: none;
}

.hide-scroll-bar::-webkit-scrollbar {
    display: none;
}
</style>

<?php
$content= ob_get_clean();
require_once('templateAccueil.php');
 } 

}
?>