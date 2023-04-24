<?php 

    $host = "root";
    $password = "";
    $db = "Reserva_Hotel";
    $server = "localhost";

    $conexion = new mysqli($server, $host, $password, $db);

    if($conexion->error) {
        echo "Conexión con la base de datos.";
    }

    //Queries necesarios para la base de datos

    /*
    CREATE TABLE user (
        idUser int PRIMARY KEY AUTO_INCREMENT,
        nameUser varchar(50) NOT NULL,
        emailUser varchar(50) NOT NULL,
        phoneUser varchar(15) NOT NULL,
        guestNumUser int NOT NULL,
        checkInDateUser datetime NOT NULL,
        hours int NOT NULL,
        roomTypeUser varchar(10) NOT NULL
    );
    */
?>