<?php
session_start();
include "db.php";

$ob1=new database();
$ob1->constructor();
$ob1->conectar_db();

if(isset($_POST["btn_registrar"])){
    header('Location: registro.php');
}

$_SESSION["name_user"]=$_POST["user"];

if(isset($_POST["btn_iniciar"])){
    if($ob1->iniciar_sesion($_POST["user"], $_POST["password"])==1){
        if($_POST["user"]==123 & $_POST["password"]=="nomelase"){
            header("Location: zona_admin.php");

        }else{
            header("Location: informe_problemas.php");
        }
    }else{
        print("El usuario o contraseña no son correctos");
    }
}

if(isset($_POST["evidence"])){
    header("Location: prueba.php"); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>INICIO DE SESION</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!--
    <form action="" method="post">
        <label for="user">Usuario</label>
        <input type="text" id="user" name="user">
        <br></br>

        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" autocomplete="new-password">
        <br></br>

        <input type="submit" value="INICIAR" name="btn_iniciar">
        <input type="submit" value="REGISTRAR" name="btn_registrar">
        <input type="submit" value="PRUEBAS" name="evidence">
    </form>
    -->
    <form method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" autocomplete="new-password">
        </div>
        <button type="submit" class="btn btn-primary" name="btn_iniciar">Iniciar sesión</button>
        <button type="submit" class="btn btn-primary" name="btn_registrar">Registrarse</button>
    </form>
    
</body>
</html>