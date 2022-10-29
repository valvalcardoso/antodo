<?php

include '../database/database.php';
include '../lib/Model.class.php';

session_start();

if(isset($_SESSION['dataRequire'])){

    unset($_SESSION['dataRequire']);

    $model = new Model($connect,$_SESSION['email'],$_SESSION['senha']);

    $data = $model->getAllUserTablesData($tables['user']);

    foreach($data['projeto'] as $projeto){
        $data['atividade'] = $model->selectWhere(
            'atividade',
            '*',
            'idProjeto',
            $projeto['idProjeto']);
    }
    
    $_SESSION['backData'] = $data;
    
    header("location:../index.php");
}

?>