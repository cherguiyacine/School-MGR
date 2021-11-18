<?php
require_once('Controller/EnseignantController.php');

class EnseignantVue {

  public function showEnseignantPanelVue(){
   
    $title = 'Enseignant';
 
$content = ob_start();
    ?>



<?php
$content= ob_get_clean();
require_once('templateEnseignant.php');
  }
  public function showAddNoteVue($modules){
   
    $title = 'Ajouter Note';
 
$content = ob_start();
    ?>

<body class="antialiased text-gray-900 bg-blue-600">

    <form class="form-horizontal w-3/4 mx-auto" method="POST" action="">

        <div class="card bg-white max-w-md p-10 md:rounded-lg  mx-auto mt-10">
            <div class="title">
                <h1 class="font-bold text-center text-3xl">Ajouter Note</h1>
            </div>


            <div class="flex items-center space-x-2 mt-5">

                <div class="flex flex-col">
                    <label for="module" class="font-bold py-4 text-sm ml-2">Module</label>
                    <select name="idmodule" id="type_user" style="width:165px;border:black solid 2px;">
                        <?php
                    foreach ($modules as $module) {
                    ?>
                        <option value="<?php echo  $module["idmodule"]; ?>">
                            <?php echo $module["titre"]; ?>
                        </option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="title" class="font-bold py-3 text-sm ml-2">Niveau Etudiant</label>
                    <select name="cycle" id="type_user" style="width:165px;border:black solid 2px;"
                        class="mt-2 md:rounded-sm ml-2">
                        <option value="0">Primaire</option>
                        <option value="1">Moyen</option>
                        <option value="2">Secondaire</option>

                    </select>
                </div>
            </div>
            <div class="flex items-center space-x-2 mt-5">


                <div class="flex flex-col">
                    <label for="title" class="font-bold py-3 text-sm">Niveau</label>
                    <div class="relative focus-within:text-gray-600 text-gray-400">
                        <input name="niveau"
                            class=" appearance-none border border-gray-200 py-1 focus:outline-none focus:border-gray-500"
                            type="number" placeholder="Niveau">
                    </div>
                </div>
                <div class="flex flex-col">
                    <label for="title" class="font-bold py-3 text-sm">Groupe</label>
                    <div class="relative focus-within:text-gray-600 text-gray-400">
                        <input name="groupe"
                            class=" appearance-none border border-gray-200 py-1  focus:outline-none focus:border-gray-500"
                            type="number" placeholder="Groupe">
                    </div>
                </div>
            </div>

            <div class="submit">
                <input type="submit"
                    class=" w-full bg-blue-600 shadow-lg text-white px-4 py-2 hover:bg-blue-700 mt-8 text-center font-semibold focus:outline-none"
                    value="Submit" name="submit-group">

            </div>
        </div>


    </form>
    <?php
        if (isset($_POST['submit-group'])) {
          $groupe=  $_POST["groupe"];
          $niveau= $_POST["niveau"];
          $cycle= $_POST["cycle"];
          $module =  $_POST["idmodule"];
       
          $enseignantController = new EnseignantController();
          $etudiants= $enseignantController->getListEtudiantByIdClasseController();
                   ?>


    <form class="text-gray-900  mx-10" method="POST" action="updateNoteGroupeFromEnseignant">

        <div class="p-4 flex">
            <h1 class="text-3xl">
                Etudiant
            </h1>
        </div>
        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">Nom</th>
                        <th class="text-left p-3 px-5">Prenom</th>
                        <th class="text-left p-3 px-5">Note</th>

                        <th></th>
                    </tr>
                    <?php
                foreach ($etudiants as $etudiant) {
                    $note=   $enseignantController->getNoteEtudiantByIdController($etudiant["idEtudiant"]);
                    if($note){
                      $mark = $note["note"];
                    }else{
                      $mark=0;
                    }
                    echo " <tr class='border-b hover:bg-orange-100 bg-gray-100'>
                    <td class='p-3 px-5'>
                        <p>".$etudiant['nom']."</p>
                    </td>
                    <td class='p-3 px-5'>
                        <p>".$etudiant['prenom']."</p>
                    </td>
                    
                    <td class='p-3 px-5'>
                        <input name='mark-$etudiant[idEtudiant]' value='$mark' ></input>
                        <input type='hidden' name='id-$etudiant[idEtudiant]' value=" . $etudiant['idEtudiant']. ">
                        <input type='hidden' name='groupe' value=" . $groupe. ">
                        <input type='hidden' name='niveau' value=" . $niveau. ">
                        <input type='hidden' name='cycle' value=" . $cycle. ">
                        <input type='hidden' name='moduleid' value=" . $module. ">

                    </td>
                  
                    <td class='p-3 px-5 flex justify-end'>
                    <form action='#' method='post'>
                    </form>
                    <form action='showStudentInfoDetailsFromEnseignant' method='post'>
                        <input type='hidden' name='idEtudiant' value=" . $etudiant['idEtudiant'] . ">

                        <button type='submit'
                            class='mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline'>Emploi
                            du temps</button>
                    </form>
                    <form action='showStudentInfoDetailsFromEnseignant' method='post'>
                    <input type='hidden' name='idEtudiant' value=" . $etudiant['idEtudiant'] . ">

                    <button type='submit'
                        class='mr-3 text-sm bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline'>Voir
                        profil</button>
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
        <center> <button type='submit'
                class='mb-12  text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline'>Sauvgardez
                les notes</button></center>
    </form>


    <?php
        }
        ?>
</body>



<?php
$content= ob_get_clean();
require_once('templateEnseignant.php');
  }
  
}
?>