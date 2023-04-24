<?php 
    require_once "conexion.php";

    if(isset($_POST['btn'])) {
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        // Buscar administrador donde el correo sea igual a userAdmin y password igual a passwordAdmin
        $consulta = "SELECT * FROM admin WHERE userAdmin='$correo' AND passwordAdmin='$password';"; // AND MD5(password) = passwordAdmin;
        $usuarioEncontrado = $conexion->query($consulta);

        // Si el número de columnas = 1, te manda a formulario.php ($usuarioEncontrado->num_rows == 1)
        if ($usuarioEncontrado -> num_rows == 1) {
            header("Location: /reserva-hotel/formulario.php");
            exit;
        } else {
            echo "Datos incorrectos"
        }

        $conexion->close();
    }
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
        <form class="main form form--login sombra" action="#" method="POST">
            <h2 class="tituloForm">Iniciar sesión</h2>
            <div class="form__field">
                <label for="" class="form__label">Correo</label>
                <input type="text" class="form__input" name="correo">
            </div>
            <div class="form__field">
                <label for="" class="form__label">Contraseña</label>
                <input type="password" class="form__input" name="password">
            </div>
            <button class="btnForm btnForm--login" type="submit" name="btn">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>