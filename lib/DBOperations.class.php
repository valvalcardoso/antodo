<?php 

//Classe responsável por fazer operações com o banco de dados.
class DBOperations{

    //Atributos que serão utilizados nas operações.
    protected $database;
    protected $email;
    protected $password;

    protected function __construct($database,$email,$password){
        $this->database = $database;
        $this->email = $email;
        $this->password = $password;
    }

    //Método que verifica se o email e a senha estão no banco de dados.
    protected function getLoginAutentication($table){

        //Seleciona todos os dados da tabela.
        $query = $this->selectAll($table);
        $signed = False;

        //Percorre os dados.
        foreach($query as $key){
            //verifica se nos campos 'email' e 'senha' tem um dado igual os dos atributos.
            if($key['email'] == $this->email && $key['senha'] == $this->password){
                $signed = True;
            }
        }
        return $signed;
    }

    //Faz uma execução no banco que seleciona todos os seus dados.
    private function selectAll($table){
        $cmd = "SELECT * FROM $table";
        $query = $this->database->query($cmd);

        return $query;
    }

    public function selectWhere($table,$column,$referenceColumn,$referenceData){
        $cmd = "SELECT $column FROM $table WHERE $referenceColumn = '$referenceData'";
        $query = $this->database->query($cmd);
        $data = [];
        foreach($query as $key){
            array_push($data,$key);
        }

        return $data;
    }

    protected function getId(){
        $cmd = "SELECT idUsuário FROM usuário WHERE email = '$this->email'";
        $query = $this->database->query($cmd);
        $data = null;
        foreach($query as $key){
            $data = $key[0];
        }

        return $data;
    }
}


?>