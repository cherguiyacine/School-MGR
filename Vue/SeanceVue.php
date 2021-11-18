<?php
class SeanceVue {

  public function __construct() {
    ;
  }




  public function showaddSeance($Enseignants,$classes,$modules){
    $title = 'Ajouter Seance';
 
$content = ob_start();
    ?>


<body class="antialiased text-gray-900 bg-blue-600">

    <form class="form-horizontal w-3/4 mx-auto" method="POST" action="AddSeance" enctype="multipart/form-data">

        <div class=" card bg-white max-w-md p-10 md:rounded-lg  mx-auto mt-10">
            <div class="title">
                <h1 class="font-bold text-center text-3xl">Ajouter Seance</h1>
            </div>
            <div class="grid grid-flow-col grid-cols-2  gap-4">

                <div class="text-sm flex flex-col">
                    <label for="description" class="font-bold mt-4 mb-2">Jour</label>
                    <select name="Jour" id="type_user" style="width:165px;border:black solid 2px;"
                        class="mt-2 md:rounded-sm ">
                        <option>Samedi</option>
                        <option>Dimanche</option>
                        <option>Lundi</option>
                        <option>Mardi</option>
                        <option>Mercredi</option>
                        <option>Jeudi</option>
                    </select>
                </div>
                <div class="text-sm flex flex-col">
                    <label for="description" class="font-bold mt-4 mb-2">Classe</label>
                    <select name="Classe" id="type_user" style="width:200px;border:black solid 2px;"
                        class="mt-2 md:rounded-sm ">
                        <?php
                    foreach ($classes as $classe) {
                        $cycle ="";
                        switch ($classe["cycle"]) {
                                case 0:
                                    $cycle = "Primaire";
                                    break;
                                case 1:
                                    $cycle = "Moyen";
                                    break;
                                case 2:
                                    $cycle = "Secondaire";
                                    break;
                            }
                    ?>
                        <option value="<?php echo  $classe["idClasse"]; ?>">


                            <?php echo $cycle . " Niveau" . $classe["niveau"]." Groupe" . $classe["groupe"]; ?>
                        </option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
            </div>

            <div class="grid grid-flow-col grid-cols-2  gap-4">

                <div class="text-sm flex flex-col">
                    <label for="description" class="font-bold mt-4 mb-2">Enseignant</label>
                    <select name="Enseignant" style="width:165px;border:black solid 2px;" class="mt-2 md:rounded-sm ">
                        <?php
                    foreach ($Enseignants as $enseignant) {
                    ?>
                        <option value="<?php echo  $enseignant["idEnseignant"]; ?>">
                            <?php echo $enseignant["nom"] . " " . $enseignant["prenom"]; ?>
                        </option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
                <div class="text-sm flex flex-col">
                    <label for="description" class="font-bold mt-4 mb-2">Module</label>
                    <select name="Module" style="width:200px;border:black solid 2px;" class="mt-2 md:rounded-sm ">
                        <?php
                    foreach ($modules as $module) {
                    ?>
                        <option value="<?php echo  $module["idmodule"]; ?>">
                            <?php echo $module["titre"] ; ?>
                        </option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
            </div>
            <div class="grid grid-flow-col grid-cols-2  gap-4">

                <div class="text-sm flex flex-col">
                    <label for="description" class="font-bold mt-4 mb-2">Heure Debut</label>
                    <input name="heureDebut"
                        class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                        type="time" placeholder="Heure Debut">
                </div>
                <div class="text-sm flex flex-col">
                    <label for="description" class="font-bold mt-4 mb-2">Heure Fin</label>
                    <input name="heureFin"
                        class=" appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                        type="time" placeholder="Enter a Heure Fin">
                </div>
            </div>

            <div class="submit">
                <button type="submit" name="submit"
                    class=" w-full bg-blue-600 shadow-lg text-white px-4 py-2 hover:bg-blue-700 mt-8 text-center font-semibold focus:outline-none ">Ajouter</button>
            </div>

        </div>



    </form>

</body>

<?php
$content= ob_get_clean();
require_once('template.php');
  }
 

  }
?>