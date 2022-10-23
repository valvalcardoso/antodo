<?php

include '../lib/Model.class.php';
include '../database/database.php';

session_start();

//Verifica se na sessão tem algum dado 'email' e 'senha'.
if(isset($_SESSION['email']) && isset($_SESSION['senha'])){

    try{
        //Inicia o objeto model.
        $model = new Model($connect,$_SESSION['email'],$_SESSION['senha']);

        //Faz uma verificação atráves da tabela usuário.
        if($model->verifyLogin('usuário')){
            $_SESSION['logado'] = true;
            header("location:../index.php");
        }
        else{
            session_unset();
            $_SESSION['loginError'] = 'unsigned';
            header("location:../index.php");
        }
    }
    catch(Exception $error){
        echo json_encode($error->getMessage());
    }
    
}

?>