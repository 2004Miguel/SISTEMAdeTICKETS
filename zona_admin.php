<?php
if(isset($_POST["volver"])){
    header("Location: index.php");
}

if(isset($_POST["openTicket"])){
    header("Location: informe_problemas.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>BIEN VENIDO ADMINISTRADOR</h1>
    <h2>Elija que quiere hacer</h2>

    <form action="" method="post">
        <input type="submit" value="VER TICKETS">
        <br></br>
        <input type="submit" value="CERRAR TICKETS">
        <br></br>
        <input type="submit" value="ABRIR TICKET" name="openTicket">
        <br></br>
        <input type="submit" value="CERRAR SESIÓN" name="volver">
    </form>
    
</body>
</html>