<?php 
    require_once "conexion.php";

    $idValue = $_GET['idUser'];
        
    $consultaDatos = "SELECT * FROM user WHERE idUser=$idValue;";
    $reservacionesDetalles = $conexion->query($consultaDatos);

    $conexion->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Roboto&display=swap" rel="stylesheet">
    <title>Registro de usuarios</title>
</head>
<body>
    <div class="container">
        <div class="main sombra">
            <?php 
                while ($reservacionEspecifica = $reservacionesDetalles->fetch_object()) {
                    $CheckIn = $reservacionEspecifica->checkInDateUser;
                    $hours = $reservacionEspecifica->hoursUser;
                    $checkOut = date('Y-m-d H:i:s', strtotime($CheckIn . ' + ' . $hours . ' hours'));
            ?>
                    
                <p><?php echo $reservacionEspecifica->nameUser;?><p>
                <p><?php echo $reservacionEspecifica->emailUser;?><p>
                <p><?php echo $reservacionEspecifica->phoneUser;?><p>
                <p><?php echo $reservacionEspecifica->checkInDateUser;?><p>
                <p><?php echo $checkOut;?><p>                
                <p><?php echo $reservacionEspecifica->guestsNumUser;?><p>
                <p><?php 
                    if ($reservacionEspecifica->roomTypeUser == 1) {
                        echo "Estándar";
                    } elseif ($reservacionEspecifica->roomTypeUser == 2) {
                        echo "Jacuzzi";
                        
                    } elseif ($reservacionEspecifica->roomTypeUser == 3) {
                        echo "Deluxe";

                    }
                ?><p>
                <a href="lista-de-reservaciones.php">Atrás</a>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>