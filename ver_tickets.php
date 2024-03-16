<?php
if(isset($_POST["regresar"])){
    header("Location: zona_admin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f350240ada.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>ZONA DE TICKETS</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <div class="col-8 p-4">
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th scope="col">Id ticket</th>
                    <th scope="col">Id usuario</th>
                    <th scope="col">Id problema</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Fecha de apertura</th>
                    <th scope="col">Fecha de cierre</th>
                    <th scope="col">Pulse para cerrar el ticket</th>
                    <th scope="col">Pulse para ver detalles del ticket</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "db.php";
                include "cerrarTicket.php";
                $obVerTickets = new database();
                $obVerTickets->constructor();
                $obVerTickets->conectar_db();

                $query = "SELECT * FROM ticket";
                $resul = mysqli_query($obVerTickets->con, $query);

                
                while($datos = $resul->fetch_object()){ ?>
                    <tr>
                    <!--<th scope="row">1</th> -->
                    <td><?= $datos->id_ticket?></td>
                    <td><?= $datos->id_usuario?></td>
                    <td><?= $datos->id_problema?></td>
                    <td><?= $datos->estado?></td>
                    <td><?= $datos->fecha_apertura?></td>
                    <td><?= $datos->fecha_cierre?></td>
                    <td>
                        <a href="ver_tickets.php?idTicket=<?= $datos->id_ticket ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-xmark"></i></a>
                    </td>
                    <td>
                        <a href="detalleTicket.php?idTicket=<?= $datos->id_ticket ?>"><i class="fa-solid fa-circle-info"></i></a>
                    </td>
                </tr>
            
                <?php }
                ?>
                
            </tbody>
        </table>
    </div>

    <form action="" method="post">
        <input type="submit" value="VOLVER" name="regresar">

    </form>
    
</body>
</html>