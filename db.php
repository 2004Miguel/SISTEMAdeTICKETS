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
        $this->con=mysqli_connect($this->server, $this->user, $this->password, $this->db);

        if($con){
            echo "CONEXIÓN EXITOSA";
        }else{
            echo "Error al conectar con la base de datos";
        }

    }

    public function registrar($apellidop, $cargop, $contrasenap, $emailp, $nombrep, $idp){
        $query="INSERT INTO usuario (apellido, cargo, contrasena, email, id_usuario, nombre) VALUES ('$apellidop', '$cargop', '$contrasenap', '$emailp', '$idp', '$nombrep')";
        $resul=mysqli_query($this->con, $query);
        if($resul){
            print("Usuario registrado con exito");
        }else{
            print("Error al registrar el usuario");
        }


    }

}

?>