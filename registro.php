<?php
include "db.php";
$ob2=new database();
$ob2->constructor();
$ob2->conectar_db();

if(isset($_POST["return"])){
    header('Location: index.php');
}

if(isset($_POST["btn_registrar"])){
    
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
        <label for="txt_userRegister">Ingrese su <b>nombre</b> o alías por favor</label>
        <input type="text" id="txt_userRegister" name="txt_userRegister" required>
        <br></br>

        <label for="surname">Ingrese sus <b>apellidos</b> por favor</label>
        <input type="text" name="surname" id="surname" required>
        <br></br>

        <label for="cargo">Insgrese su <b>cargo</b> por favor</label>
        <input type="text" name="cargo" id="cargo" required>
        <br></br>

        <label for="email">Ingrese su <b>email</b> por favor</label>
        <input type="email" name="email" id="email" required>
        <br></br>

        <label for="">Ingrese una <b>constraseña</b> segura</label>
        <input type="text" id="txt_password" name="txt_password" required>
        <br></br>

        <input type="submit" name="btn_registrar" value="REGISTRAR">
        <input type="submit" value="VOLVER" name="return" required>
    </form>

    
</body>
</html>