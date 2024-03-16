<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <h1>Detalles del ticket</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Creador del ticket</label>
            <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Cargo</label>
            <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputAddress" placeholder="ejemplo@algo.com">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Descripción del problema</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-12">
            <button type="button" class="btn btn-warning"><a href="ver_tickets.php">Volver</a></button>
        </div>
    </form>
    <!--
        PRUEBA PARA HACER LA CONSULTA DE DETALLES DEL TICKET: 

        SELECT problema.descripcion, usuario.nombre, usuario.cargo, usuario.email 
        FROM ticket 
        INNER JOIN usuario ON usuario.id_usuario=ticket.id_usuario
        INNER JOIN problema ON ticket.id_problema=problema.id_problema;
     -->

    
</body>
</html>