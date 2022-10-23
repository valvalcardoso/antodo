<?php 

class LoginView{

    private $alertElement;

    public function __construct($alertElement){
        $this->alertElement = $alertElement;

        if(isset($_SESSION['loginError'])){

            unset($_SESSION['loginError']);
            
            echo $this->getAlert();
        }

    }

    private function getAlert(){
        $element = $this->alertElement;

        $script = "
        <script>
        document.getElementById('$element').innerHTML = 'usuário ou senha inválidos';
        </script>
        ";

        return $script;
    }
}

class HomeView{
    public function __construct(){
        if(!isset($_SESSION['email']) && !isset($_SESSION['senha'])){
            header("location:../index.php");
        }
    }
}

?>