<?php
class LoginVue {

  public function __construct() {
    ;
  }

  public function view(){
    $content=[];
    $content=$this->affiche($content);
   // $content=$this->affiche2($content);

  }

  public function affiche($content){
    

?>
<!-- component -->




<div class=" m-10 ">
    <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0 border-8 ">
        <div class="flex rounded-lg shadow-lg w-full sm:w-3/4 lg:w-1/2 bg-white sm:mx-0 border-8 border-blue-200">
            <div class="flex flex-col w-full md:w-1/2 p-4">
                <div class="flex flex-col flex-1 justify-center mb-8">
                    <h1 class="text-4xl text-center font-thin">Bienvenue</h1>
                    <div class="w-full mt-4">
                        <form class="form-horizontal w-3/4 mx-auto" method="POST" action="loginForm">
                            <div class="flex flex-col mt-4">
                                <label>Email</label>
                                <input id="email" type="text" class="flex-grow h-8 px-2 border rounded border-grey-400"
                                    name="mail" value="" placeholder="Email">
                            </div>
                            <div class="flex flex-col mt-4">
                                <label>Password</label>
                                <input id="password" type="password"
                                    class="flex-grow h-8 px-2 rounded border border-grey-400" name="password" required
                                    placeholder="Password">
                            </div>
                            <div class="flex items-center mt-4">
                                <input type="checkbox" name="remember" id="remember" class="mr-2"> <label for="remember"
                                    class="text-sm text-grey-dark">Remember Me</label>
                            </div>
                            <div class="flex flex-col mt-8">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded">
                                    Login
                                </button>
                            </div>
                        </form>
                        <div class="text-center mt-4">
                            <a class="no-underline hover:underline text-blue-dark text-xs" href="#">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:block md:w-1/2 rounded-r-lg"
                style="background: url('img/logoAccueil.png'); background-size: cover; background-position: center center;">
            </div>
        </div>
    </div>
</div>


<?php


  }


  
  }
?>