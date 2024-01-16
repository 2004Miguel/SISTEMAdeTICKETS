<?php
include "db.php";
$ob2=new database();
$ob2->constructor();
$ob2->conectar_db();

if(isset($_POST["return"])){
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
</head>
<body>

    <h1>REGISTRO</h1>
    
    <form action="" method="post">
        <label for="txt_userRegister">Ingrese su nombre o alías</label>
        <input type="text" id="txt_userRegister" name="txt_userRegister">
        <br></br>

        <label for="">Ingrese una constraseña segura</label>
        <input type="text" id="txt_password" name="txt_password">
        <br></br>

        <input type="submit" name="btn_registrar" value="REGISTRAR">
        <input type="submit" value="VOLVER" name="return">
    </form>

    
</body>
</html>