<?php
include "db.php";
$ob2=new database();
$ob2->constructor();
$ob2->conectar_db();

if(isset($_POST["return"])){
    header('Location: index.php');
}

if(isset($_POST["btn_registrar"])){
    $nombre=$_POST["txt_userRegister"];
    $apellido=$_POST["surname"];
    $cargo=$_POST["cargo"];
    $email=$_POST["email"];
    $contrasena=$_POST["txt_password"];
    $id=$_POST["iden"]; 

    if($ob2->verificr_registro($id)==1){//si la función devuelve 1, se registra, sino no. 
        $ob2->registrar($apellido, $cargo, $contrasena, $email, $nombre, $id);
    }else{
        print("El id ya está asociado a otra cuenta");
    }
    
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
        <input type="text" id="txt_userRegister" name="txt_userRegister" autocomplete="name" >
        <br></br>

        <label for="surname">Ingrese sus <b>apellidos</b> por favor</label>
        <input type="text" name="surname" id="surname" autocomplete="family-name" >
        <br></br>

        <label for="cargo">Insgrese su <b>cargo</b> por favor</label>
        <input type="text" name="cargo" id="cargo" >
        <br></br>

        <label for="email">Ingrese su <b>email</b> por favor</label>
        <input type="email" name="email" id="email" autocomplete="email" >
        <br></br>

        <label for="iden">Ingrese su identificación por favor</label>
        <input type="number" name="iden" id="iden">
        <br></br>

        <label for="">Ingrese una <b>constraseña</b> segura</label>
        <input type="text" id="txt_password" name="txt_password" autocomplete="current-password" >
        <br></br>

        <input type="submit" name="btn_registrar" value="REGISTRAR">
        <input type="submit" value="VOLVER" name="return" >
    </form>

    
</body>
</html>