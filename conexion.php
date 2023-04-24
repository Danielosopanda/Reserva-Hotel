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
    CREATE TABLE User (
        idUser int NOT NULL AUTO_INCREMENT,
        nameUser varchar(50),
        emailUser varchar(200),
        phoneUser varchar(10),
        checkInDateUser timestamp NULL DEFAULT NULL,
        hoursUser int,
        guestsNumUser int,
        roomTypeUser int,
        PRIMARY KEY (idUser)
    );
    
    CREATE TABLE ADMIN (
        idAdmin INT PRIMARY KEY AUTO_INCREMENT,
        userAdmin VARCHAR(50),
        passwordAdmin VARCHAR(500)
    );
    */
?>