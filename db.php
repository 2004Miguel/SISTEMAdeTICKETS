<?php

class database{
    public $server;
    public $user;
    public $password;
    public $db;
    public $con;

    public function constructor(){
        $this->server="localhost";
        $this->user="root";
        $this->password="8del2del2004";
        $this->db="Tickets";
    }

    public function conectar_db(){
        $this->con=mysqli_connect($this->server, $this->user, $this->password, $this->db);

        if($this->con){
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
        mysqli_close($this->con);
    }

    public function verificr_registro($idpara){
        $query="SELECT id_usuario FROM usuario WHERE id_usuario='$idpara'";
        $resul=mysqli_query($this->con, $query);//mysqli_query devuelve un objeto de mysqli_result

        if($resul->num_rows>0){//significa que ya está registrado
            return 0;
        }else{
            return 1;//no está registrado
        }
    }

    public function iniciar_sesion($idpara, $passwordp){
        $query="SELECT id_usuario, contrasena FROM usuario WHERE id_usuario='$idpara' AND contrasena='$passwordp'";
        $resul=mysqli_query($this->con, $query);

        if($resul->num_rows>0){
            return 1;//id y contraseña son válidos
        }else{
            return 0;//id o contraseña no son válidos
        }
    }

    public function insert_problema($descripcionp){
        $query="INSERT INTO problema (descripcion) VALUES ('$descripcionp')";
        $con=mysqli_query($this->con, $query);

        if($con){
            print("Problema notificado");
            return 1;//se registro el problema con exito
        }else{
            print("Error al notificar el problema");
            return 0;//no se pudo registrar el problema
        }
    }

    public function ultimo_problema_registrado(){
        $query="SELECT id_problema FROM problema 
        ORDER BY id_problema DESC
        LIMIT 1";

        $resul=mysqli_query($this->con, $query);
        $row=$resul->fetch_array();

        if($resul){
            //echo $row[0];   
            return $row[0];
        }else{
            print("Ocurrió un error");
        }
    }

    public function fecha_actual(){
        $consulta="SELECT NOW()";
        $result=mysqli_query($this->con, $consulta);
        $row=mysqli_fetch_row($result);

        return $row[0];
    }

    public function abrir_ticket($id_userp, $id_pro, $fechaa){
        $estado="abierto";
    
        $query="INSERT INTO ticket (estado, fecha_apertura, id_problema, id_usuario) 
        VALUES ('$estado', '$fechaa', '$id_pro', '$id_userp')";
        
        $resul=mysqli_query($this->con, $query);
    }

    public function verTicketsAbiertos($id_user){
        /*
        $estado = "abierto";
        if($id_user != 123){
            $query = "SELECT * FROM ticket WHERE id_usuario='$id_user' AND estado='$estado'";

        }else{
            $query = "SELECT * FROM ticket WHERE estado='$estado'";

        }
        $resul = mysqli_query($this->con, $query);

        
        while($row = mysqli_fetch_row($resul)){
            print $row[0];
            print " ";
            print $row[1];
            print " ";
            print $row[2];
            print " ";
            print $row[3];
            print " ";
            print $row[4];
            print " ";
            print $row[5];
            print " ";
            echo "<br></br>";
        }*/        
    }

    public function cerrarTicket($id_ticketp){
        $estado = "cerrado";
        $query="UPDATE ticket SET estado='$estado' WHERE id_ticket='$id_ticketp'";
        $resul=mysqli_query($this->con, $query);
        if($resul == true){
            print("Ticket cerrado");
        }else{
            print("error al cerrar el ticket");
        }
    }

    
}
?>