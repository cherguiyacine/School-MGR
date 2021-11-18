<?php
class UserVue {

  public function __construct() {
    ;
  }



  public function afficheAddUser(){
    $title = 'Ajouter Utilisateur';
 
    $content = ob_start();
        ?>
<form class="form-horizontal w-3/4 mx-auto" method="POST" action="createUser" enctype="multipart/form-data">

    <div class=" card bg-white max-w-md py-20 px-10 md:rounded-lg  mx-auto mt-10 flex flex-col">
        <div class="title card-header">
            <h1 class="font-bold text-center text-3xl">Ajouter Utilisateur</h1>
        </div>
        <div class="my-auto">
            <div class="form mt-4">
                <div class="flex flex-col text-sm py-3">
                    <label for="title" class="font-bold mb-2">Nom Utilisateur</label>
                    <input name="nom"
                        class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                        type="text" placeholder="Nom" required>
                </div>
                <div class="flex flex-col text-sm py-3">
                    <label for="title" class="font-bold mb-2">Prenom Utilisateur</label>
                    <input name="prenom"
                        class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                        type="text" placeholder="Prenom" required>
                </div>
                <div class="flex flex-col text-sm py-3">
                    <label for="title" class="font-bold mb-2">Date De Naissance</label>
                    <input name="dateNaissance"
                        class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                        type="date" placeholder="Date Naissance">
                </div>
                <div class="flex flex-col text-sm py-3">
                    <label for="title" class="font-bold mb-2">Adress Utilisateur</label>
                    <input name="adress"
                        class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                        type="text" placeholder="Adress" required>
                </div>
                <div class="flex flex-col text-sm py-3">
                    <label for="title" class="font-bold mb-2">Numero TLP Utilisateur</label>
                    <input name="numero" pattern="[0]{1}[5-7]{1}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}"
                        class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                        type="tel" placeholder="07-90-90-90-90" required>
                </div>
                <div class="flex flex-col text-sm py-3">
                    <label for="title" class="font-bold mb-2">Email Utilisateur</label>
                    <input name="email"
                        class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                        type="email" placeholder="Email" required>
                </div>
                <label for="title" class="font-bold mb-2 py-3 text-sm">Type de votre user</label>
                <select onChange="sndReq()" name="type_user" id="type_user" value="yacine"
                    style="width:165px;border:black solid 2px;" class="mt-2 md:rounded-sm ml-2">
                    <option value="0">Admin</option>
                    <option value="1">Etudiant</option>
                    <option value="2">Prof</option>
                    <option value="3">Parent</option>

                </select>
            </div>
            <div id="etudiantForm" class="flex flex-col text-sm py-3">
                <div class="flex flex-col text-sm py-3">
                    <label for="title" class="font-bold">Email Parent</label>
                    <input name="emailParent"
                        class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                        type="email" placeholder="Email Parent">
                </div>
                <div class="form mt-2">

                    <label for="title" class="font-bold py-3 text-sm">Niveau Etudiant</label>
                    <select name="cycle" id="type_user" style="width:165px;border:black solid 2px;"
                        class="mt-2 md:rounded-sm ml-2">
                        <option value="0">Primaire</option>
                        <option value="1">Moyen</option>
                        <option value="2">Secondaire</option>

                    </select>
                </div>

                <div class="flex items-center space-x-4 mt-5">

                    <div class="flex flex-col">
                        <label for="title" class="font-bold mb-2">Niveau</label>
                        <div class="relative focus-within:text-gray-600 text-gray-400">
                            <input name="niveau"
                                class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                                type="number" placeholder="Niveau">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <label for="title" class="font-bold mb-2">Groupe</label>
                        <div class="relative focus-within:text-gray-600 text-gray-400">
                            <input name="groupe"
                                class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                                type="number" placeholder="Groupe">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col text-sm py-3">
                    <label for="title" class="font-bold mb-2">Les activités extrascolaires</label>
                    <textarea name="paraActiv"
                        class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                        type="text" placeholder="Enter a paragraphe"> </textarea>
                </div>
            </div>
            <div class="submit">
                <button type="submit" name="submit"
                    class=" w-full bg-blue-600 shadow-lg text-white px-4 py-2 hover:bg-blue-700 mt-8 text-center font-semibold focus:outline-none ">Submit</button>
            </div>
        </div>
    </div>
</form>



<script type="text/javascript">
$("#etudiantForm").hide();

function sndReq() {

    var selbox = document.getElementById("type_user");
    var idx = selbox.selectedIndex;
    var teamValue = selbox.options[idx].value;

    if (teamValue == 1) {
        console.log(teamValue);
        $("#etudiantForm").show();
    } else {
        $("#etudiantForm").hide();
    }
}
</script>


<?php
    $content= ob_get_clean();
    require_once('template.php');


  }


  }
?>