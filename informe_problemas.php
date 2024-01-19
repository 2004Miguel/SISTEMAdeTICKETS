<?php
session_start();
include "db.php";

$ob3=new database();
$ob3->constructor();//Se declaran los datos necesarios para establecer conexion con la db
$ob3->conectar_db();

if(isset($_POST["back"])){
    header("Location: index.php");
}

if(isset($_POST["informar"])){
    $problema=$_POST["problem"];
    $id_person=$_SESSION["name_user"];

    if($ob3->insert_problema($problema)==1){
        $ob3->ultimo_problema_registrado();

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de problemas</title>
</head>
<body>
    <h1>COMPLETA EL SIGUIENTE FORMULARIO PARA INFORMAR DEL PROBLEMA POR FAVOR</h1>
    <form action="" method="POST">
        <label for="descripcion">Descripción</label>
        <textarea name="problem" id="" cols="110" rows="10" maxlength=500 spellcheck="true" placeholder="DESCRIPCIÓN DEL PROBLEMA(MÁXIMO 500 CARÁCTERES)"></textarea>
        <br></br>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value=<?php echo $_SESSION["name_user"] ?> readonly>
        <br></br>

        <input type="submit" name="back" value="VOLVER">
        <input type="submit" name="informar" value="ENVIAR">
    </form>

    
</body>
</html>