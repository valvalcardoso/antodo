<?php

include '../database/database.php';
include '../lib/Model.class.php';

session_start();

if(isset($_SESSION['dataRequire'])){

    unset($_SESSION['dataRequire']);

    $model = new Model($connect,$_SESSION['email'],$_SESSION['senha']);

    $data = $model->getAllUserTablesData($tables['user']);

    $cont = 0;

    foreach($data['projeto'] as $projeto){
        $data['atividade'][$cont] = $model->selectWhere(
            'atividade',
            '*',
            'idProjeto',
            $projeto['idProjeto']);

        $cont += 1;
    }
    
    $_SESSION['backData'] = $data;
    
    header("location:../index.php");
}

?>