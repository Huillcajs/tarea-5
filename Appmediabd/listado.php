<?php
    include "conexion.php";
    foreach($bd->query("SELECT * from usuarios") as
    $fila){
        print_r($fila);
    }
    $bd = null;
?>