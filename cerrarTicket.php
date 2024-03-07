<?php
//include "db.php"; Si dejo el include me da error. 
$obCerrar = new database();
$obCerrar->constructor();
$obCerrar->conectar_db();

if(!empty($_GET["idTicket"])){
    //print($_GET["idTicket"]);
    $id_ticket = $_GET["idTicket"];
    $fecha_cierre = $obCerrar->fecha_actual();
    $obCerrar->cerrarTicket($id_ticket, $fecha_cierre);
}
?>