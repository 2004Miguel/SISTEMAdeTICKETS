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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

    <h1>REGISTRO</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!--
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
    -->
    <form class="row g-3" method="POST">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Ingrese su nombre o alias por favor</label>
            <input type="text" class="form-control" id="inputEmail4" name="txt_userRegister">
        </div>

        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Ingrese sus apellidos por favor</label>
            <input type="text" class="form-control" id="inputPassword4" name="surname">
        </div>

        <div class="col-12">
            <label for="inputAddress" class="form-label">Ingrese su cargo por favor</label>
            <input type="text" class="form-control" id="inputAddress" name="cargo">
        </div>

        <div class="col-12">
            <label for="inputAddress2" class="form-label">Ingrese su Email por favor</label>
            <input type="email" class="form-control" id="inputAddress2" name="email">
        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">Ingrese su identificación por favor</label>
            <input type="number" class="form-control" id="inputCity" name="iden">
        </div>

        <div class="col-md-2">
            <label for="inputZip" class="form-label">Cree una contraseña segura</label>
            <input type="password" class="form-control" id="inputZip" name="txt_password">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="btn_registrar">Registrar</button>
            <button type="submit" class="btn btn-primary" name="return">Volver</button>
        </div>
    </form>

    
</body>
</html>