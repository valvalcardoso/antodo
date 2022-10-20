<?php

include '../lib/Model.class.php';
include '../database/database.php';

session_start();

if(isset($_SESSION['email']) && isset($_SESSION['senha'])){

    $model = new Model($connect,$_SESSION['email'],$_SESSION['senha']);

    if($model->verifyLogin('usuário')){
        $_SESSION['logado'] = true;
        header("location:../index.php");
    }
    else{
        $_SESSION['loginError'] = 'USUÁRIO INVÁLIDO';
        header("location:../index.php");
    }
}

?>
