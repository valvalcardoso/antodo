<?php

//Responsável por fazer os controle das requisições Ajax.
class AjaxController{

    public $noRequires;

    //No construtor as requisições vão ser verificadas e redirecionadas.
    protected function __construct(){

        $this->noRequires = false;

        //Requisição para pegar o nome de usuário.
        if(isset($_POST['RequestData'])){
            $_SESSION['dataRequire'] = $_POST['RequestData'];
            $this->getQuery();
        }

        //Requisição que verifica se tem algum dado do banco.
        elseif(isset($_SESSION['backData'])){
            $backData = $_SESSION['backData'];
            unset($_SESSION['backData']);
            $this->sendMsg($backData);
            
        }

        else{
            $this->noRequires = true;
        }
    }

    //Redireciona para a página de solicitações.
    private function getQuery(){
        header("location:model/query.php");
    }

    //Envia respostas para o javascript.
    private function sendMsg($msg){
        echo json_encode($msg);
    }
}

?>