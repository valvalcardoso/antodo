<?php

include "DBOperations.class.php";

//Faz as operações do Model com a herança da DBOperations.

class Model extends DBOperations{

    //Nesse bloco,além de iniciar o construtor dessa classe também inicia o da classe pai.
    public function __construct($database,$email,$password){

        //Inicialização da classe pai.
        parent::__construct($database,$email,$password);

        $this->database = $database;
        $this->email = $email;
        $this->password = $password;
    }

    //Verificação de login.
    public function verifyLogin($table){
        return $this->getLoginAutentication($table);
    }

    //Retorna o nome de usuário
    public function getUsername(){
        return $this->selectWhere('usuário','nomeUsuário','email',$this->email)[0][0];
    }

    //Retorna todos os dados de um campo relacionado ao usuário
    public function getAllUserTablesData($arrayTables){
        $data = [];
        foreach($arrayTables as $table){
            $data["$table"] = $this->selectWhere("$table",'*','idusuário',$this->getId());
        }
        return $data;
    }
}

?>