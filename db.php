<?php

class database{
    public $server;
    public $user;
    public $password;
    public $db;

    public function constructor(){
        $this->server="localhost";
        $this->user="root";
        $this->password="8del2del2004";
        $this->db="Tickets";
    }

    public function conectar_db(){
        $con=mysqli_connect($this->server, $this->user, $this->password, $this->db);

        if($con){
            echo "CONEXIÓN EXITOSA";
        }else{
            echo "Error al conectar con la base de datos";
        }

    }

}

?>