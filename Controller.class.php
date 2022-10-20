<?php

class HomeController{

    public function __construct(){
        if(isset($_SESSION['logado'])){
            $this->getHome();
        }

        elseif(isset($_POST['email']) && isset($_POST['senha'])){
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['senha'] = $_POST['senha'];

            $this->getAutentication();
        }

        elseif(isset($_SESSION['loginError'])){
            $this->sendToLogin($_SESSION['loginError']);
        }

        else{
            $this->getLogin();
        }
    }

    private function getLogin(){
        header("location:view/login.html");
    }

    private function getHome(){
        header("location:view/home.php");
    }

    private function sendToLogin($msg){
        echo json_encode($msg);
    }

    private function sendToHome($msg){
        echo json_encode($msg);
    }

    private function getAutentication(){
        header("location:model/autentication.php");
    }
}

?>