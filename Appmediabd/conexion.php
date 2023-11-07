<?php
try{
    $bd = new PDO("mysql:host=localhost;
    dbname=appmediabd", "root", "");
    //echo "Conectado";
} catch (PDOException $e){
    print "!Error!: " . $e->getMessage() . "<br>";
    die();
}
?>