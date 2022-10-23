<?php

include 'AjaxController.class.php';

//Cuida do controle de requisições em geral.
class HomeController extends AjaxController{
    
    public function __construct(){

        //Verifica se tem alguma variável global 'logado' que dá acesso direto a home.
        if(isset($_SESSION['logado'])){
            unset($_SESSION['logado']);
            $this->getHome();
        }

        //Verifica se tem dados do formulário atráves do método POST.
        elseif(isset($_POST['email']) && isset($_POST['senha'])){
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['senha'] = $_POST['senha'];

            $this->getAutentication();
        }

        //Se existir uma varíavel global 'loginError' ele volta para o login.
        elseif(isset($_SESSION['loginError'])){
            $this->getLogin();
        }

        /*Caso nenhuma das requisições anteriores seja válida,
        ele começa a verifição das requisições Ajax.*/
        else{

            //Inicia a classe pai.
            parent::__construct();

            //Sem nenhuma requisição = Redireciona para o login.
            if($this->noRequires){
                $this->getLogin();
            }
        }

    }

    public function getLogin(){
        header("location:view/login.php");
    }

    private function getHome(){
        header("location:view/home.php");
    }

    private function getAutentication(){
        header("location:model/autentication.php");
    }

}

?>