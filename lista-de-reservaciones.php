<?php 
    require_once "conexion.php";

    $queryReservaciones = "SELECT idUser, nameUser, phoneUser, roomTypeUser FROM USER";
    $reservaciones = $conexion->query($queryReservaciones);

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
                while ($reservacionActual = $reservaciones->fetch_object()) {
            ?>
                <p><?php echo $reservacionActual->nameUser;?><p>
                <p><?php echo $reservacionActual->phoneUser;?><p>
                <p><?php echo $reservacionActual->roomTypeUser;?><p>
                <a href="detalles-reservacion.php?idUser=<?php echo $reservacionActual->idUser; ?>">Detalle de reservación</a>
            <?php 
                }
            ?>
        </div>
    </div>
</body>
</html>