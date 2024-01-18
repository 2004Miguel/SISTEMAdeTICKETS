<?php
include "db.php";
$ob1=new database();
$ob1->constructor();
$ob1->conectar_db();

if(isset($_POST["btn_registrar"])){
    header('Location: registro.php');
}

if(isset($_POST["btn_iniciar"])){
    if($ob1->iniciar_sesion($_POST["user"], $_POST["password"])==1){
        header("Location: informe_problemas.php");
    }else{
        print("El usuario o contraseña no son correctos");

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesio</title>
</head>
<body>
    <h1>INICIO DE SESION</h1>

    <form action="" method="post">
        <label for="user">Usuario</label>
        <input type="text" id="user" name="user">
        <br></br>

        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password">
        <br></br>

        <input type="submit" value="INICIAR" name="btn_iniciar">
        <input type="submit" value="REGISTRAR" name="btn_registrar">
    </form>
    
</body>
</html>