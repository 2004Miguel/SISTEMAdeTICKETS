<?php
//include "db.php"; 
$obCerrar = new database();
$obCerrar->constructor();
$obCerrar->conectar_db();

if(!empty($_GET["idTicket"])){
    //print($_GET["idTicket"]);
    $id_ticket = $_GET["idTicket"];
    $obCerrar->cerrarTicket($id_ticket);
}
?>