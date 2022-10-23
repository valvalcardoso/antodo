<?php

include '../database/database.php';
include '../lib/Model.class.php';

session_start();

if(isset($_SESSION['dataRequire'])){
    unset($_SESSION['dataRequire']);
    
    $model = new Model($connect,$_SESSION['email'],$_SESSION['senha']);

    $_SESSION['backData'] = $model->getUsername();
    header("location:../index.php");
}

?>