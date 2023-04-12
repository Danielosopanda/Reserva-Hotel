<?php 

    $host = "root";
    $password = "";
    $db = "Reserva_Hotel";
    $server = "localhost";

    $conexion = new mysqli($server, $host, $password, $db);

    if($conexion->error) {
        echo "Conexión con la base de datos.";
    }
?>