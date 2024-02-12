<?php
session_start();
include "db.php";

$ob3=new database();
$ob3->constructor();//Se declaran los datos necesarios para establecer conexion con la db
$ob3->conectar_db();

$fecha_apertura=getdate();//Formato de fecha en mysql YYYY-MM-DD hh:mm:ss. hours minutes seconds 


if(isset($_POST["back"])){
    if($_SESSION["name_user"] == 123){
        header("Location: zona_admin.php");
    }else{
        header("Location: index.php");
    }
}

if(isset($_POST["informar"])){
    $problema=$_POST["problem"];//se guarda la descripción del problema
    $id_person=$_SESSION["name_user"];//se guarda el id del usuario
    
    if($ob3->insert_problema($problema)==1){//se inserta el problema. Si se inserta correctamente devuelve 1 sino 0. 
        $id_problem=$ob3->ultimo_problema_registrado();//se obtiene el id del último problema registrado para abrir el ticket

        if($id_problem != 0){
            $date=$ob3->fecha_actual();
            $ob3->abrir_ticket($id_person, $id_problem, $date);//se inserta el tiquet
        }
    }
}

if(isset($_POST["verTickets"])){
    $ob3->verTicketsAbiertos($_SESSION["name_user"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de problemas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <h1>COMPLETA EL SIGUIENTE FORMULARIO PARA INFORMAR DEL PROBLEMA POR FAVOR</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!--
    <form action="" method="POST">
        <label for="descripcion">Descripción</label>
        <textarea name="problem" id="descripcion" cols="110" rows="10" maxlength=500 spellcheck="true" placeholder="DESCRIPCIÓN DEL PROBLEMA(MÁXIMO 500 CARÁCTERES)"></textarea>
        <br></br>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value= /*echo $_SESSION["name_user"]*/ ?> readonly>
        <br></br>

        <input type="submit" name="back" value="VOLVER">
        <input type="submit" name="verTickets" value="VER TICKETS">
        <input type="submit" name="informar" value="ENVIAR">
    </form>
    -->
    
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Descripción</label>
            <textarea name="problem" class="form-control" id="exampleFormControlTextarea1" rows="10" cols="110" maxlength=500 spellcheck="true" placeholder="DESCRIPCIÓN DEL PROBLEMA (MÁXIMO 500 CARÁCTERES"></textarea>
        </div>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value= <?php echo $_SESSION["name_user"] ?> readonly>
        <br></br>

        <button type="submit" class="btn btn-primary" name="back">Volver</button>
        <button type="submit" name="verTickets" class="btn btn-primary">Ver Tickets</button>
        <button type="submit" name="informar" class="btn btn-primary" value="ENVIAR">Enviar</button>
    </form>
    
</body>
</html>