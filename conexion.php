<?php
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=prueba','root','Supergato98%');
    }catch(PDOException $e){
        echo "ERROR: ".$e->getMessge();
    }
?>