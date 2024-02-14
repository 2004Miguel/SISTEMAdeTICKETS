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
                    <th scope="col">Estado</th>
                    <th scope="col">Fecha de apertura</th>
                    <th scope="col">Fecha de cierre</th>
                    <th scope="col">Problema</th>
                    <th scope="col">Trabajador</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "db.php";
                $obVerTickets = new database();
                $obVerTickets->constructor();
                $obVerTickets->conectar_db();

                $query = "SELECT * FROM ticket";
                $resul = mysqli_query($obVerTickets->con, $query);

                
                while($datos = $resul->fetch_object()){ ?>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>quien</td>
                    <td>algo</td>
                    <td>algo</td>
                    <td>
                        <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-xmark"></i></a>
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