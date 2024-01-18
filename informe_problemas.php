<?php
session_start();
include "db.php";

if(isset($_POST["back"])){
    header("Location: index.php");
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
        <textarea name="" id="" cols="110" rows="10"></textarea>
        <br></br>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value=<?php echo $_SESSION["name_user"] ?> readonly>
        <br></br>

        <input type="submit" name="back" value="VOLVER">
    </form>

    
</body>
</html>