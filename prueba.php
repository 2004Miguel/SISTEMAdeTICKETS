<?php
include "db.php";

$obPrueba=new database();
$obPrueba->constructor();
$obPrueba->conectar_db();
$obPrueba->fecha_actual();

?>