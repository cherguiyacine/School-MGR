<?php
class RepaVue {

  public function __construct() {
    ;
  }



  public function show_showRepa_view($repa){
    $title = 'Repa';
 
    $content = ob_start();
        ?>
<form class="form-horizontal   mx-auto" method="POST" action="AddRepa" enctype="multipart/form-data">
    <div class=" card bg-white  p-10 md:rounded-lg   mt-10">
        <div class="title">
            <h1 class="font-bold text-center text-3xl">Ajouter Repas</h1>
        </div>
        <div class="class=form-horizontal w-auto mx-auto  py-10">
            <div class="shadow overflow-hidden rounded border-b border-gray-200 ">
                <table class="min-w-full bg-white">
                    <thead class="bg-blue-600 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Date</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Repas</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Desert</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">

                        <tr>
                            <td class="text-left py-3 px-4"> <input id="today" name="date" class=" appearance-none
                            border border-gray-200 p-2 focus:outline-none focus:border-gray-500" type="date"
                                    placeholder="Date" required></td>
                            <td class="w-1/3 text-left py-3 px-4">
                                <input value="<?php echo $repa["repa"]; ?>" name="repa" class=" appearance-none
                            border border-gray-200 p-2 focus:outline-none focus:border-gray-500" type="text"
                                    placeholder="Repas" required>
                            </td>
                            <td class="text-left py-3 px-4"> <input value="<?php echo $repa["desert"]; ?>" name="desert"
                                    class=" appearance-none
                            border border-gray-200 p-2 focus:outline-none focus:border-gray-500" type="text"
                                    placeholder="Desert" required></td>

                        </tr>



                    </tbody>
                </table>
            </div>
            <div class="submit  ">
                <button type="submit" name="submit"
                    class=" w-20   bg-blue-600 shadow-lg text-white  py-2 hover:bg-blue-700 mt-8 text-center font-semibold focus:outline-none ">Submit</button>

            </div>
        </div>

    </div>

</form>

<script>
var today = new Date();
var dd = today.getDate();

var mm = today.getMonth() + 1;
var yyyy = today.getFullYear();
if (dd < 10) {
    dd = '0' + dd;
}

if (mm < 10) {
    mm = '0' + mm;
}
today = yyyy + '-' + mm + '-' + dd;
document.querySelector("#today").valueAsDate = new Date();
document.querySelector("#today").setAttribute('min', today);
document.querySelector("#today").setAttribute('max', today);
</script>
<?php
    $content= ob_get_clean();
    require_once('template.php');


  }


  }
?>