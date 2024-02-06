<?php
$obAdmin = new database();
$obAdmin->constructor();
$obAdmin->conectar_db();

if(isset($_POST{"regresar"})){
    header("Location: zona_admin.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
</head>
<body>
    <h1>ZONA DE TICKETS</h1>

    <form action="" method="post">
        <input type="submit" value="VOLVER" name="regresar">

    </form>
    
</body>
</html>