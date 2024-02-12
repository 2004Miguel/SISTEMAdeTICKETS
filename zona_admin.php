<?php
include "db.php";

$admin = new database();
$admin->constructor();
$admin->conectar_db();

if(isset($_POST["volver"])){
    header("Location: index.php");
}

if(isset($_POST["openTicket"])){
    header("Location: informe_problemas.php");
}

if(isset($_POST["verTickets"])){
    header("Location: ver_tickets.php");
    //$admin->verTicketsAbiertos($_SESSION["name_user"]);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <h1>BIENVENIDO ADMINISTRADOR</h1>
    <h2>Elija que quiere hacer</h2>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <form action="" method="post">
        <button type="submit" value="VER TICKETS" class="btn btn-primary" name="verTickets">Ver tickets</button>
        <br></br>
        <button type="submit" value="ABRIR TICKET" class="btn btn-primary" name="openTicket">Abrir ticket</button>
        <br></br>
        <button type="submit" value="CERRAR SESIÓN" class="btn btn-primary" name="volver">Volver</button>
    </form>
    
</body>
</html>