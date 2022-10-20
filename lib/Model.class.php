<?php

class Model{

    private $database;
    private $email;
    private $passsword;

    public function __construct($database,$email,$password){
        $this->database = $database;
        $this->email = $email;
        $this->password = $password;
    }

    public function verifyLogin($table){
        return $this->getAutentication($table);
    }

    private function getAutentication($table){
        $cmd = "SELECT * FROM $table";
        $query = $this->database->query($cmd);
        $signed = False;

        foreach($query as $key){
            if($key['email'] == $this->email && $key['senha'] == $this->password){
                $signed = True;
            }
        }
        return $signed;
    }
}

?>
