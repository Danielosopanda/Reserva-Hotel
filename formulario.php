<?php

    require_once "conexion.php";
        
    if(isset($_POST['submitBtn'])) {
        
        //Declaración variables
        $name = $_POST['campoNombre'];
        $email = $_POST['campoEmail'];
        $phone = $_POST['campoTelefono'];
        $hours = $_POST['horasDeHospedaje'];
        $guestsNum = $_POST['numeroHuespedes'];
        //$room = $_POST['habitacion'];

        //Inserción de datos
        $consultaEnviarDatos = "INSERT INTO user VALUES (NULL, '$name', '$email', '$phone', NOW(), $hours, $guestsNum, 1);";
        $enviarDatos = $conexion->query($consultaEnviarDatos);
        
        //Comprobacion de query
        /* if ($enviarDatos === TRUE) {
            echo '<script>alert("Cliente añadido");</script>';
        } else {
            echo "Error: ". $consultaEnviarDatos ."<br>".$conexion->error;
        } */
        
        //Cerramos conexion
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
    <a  class="btn--navegacion sombra" href="lista-de-reservaciones.php">Lista de reservaciones</a>  
    <div class="container">
        <div class="main sombra">
            <div class="header seccion">
                <img class="logoHotel sombra" src="Images/Logo_2.png" alt="Logo Hotel" draggable="false">
                <div class="seccionTitulo">
                    <h1>Motel Dos Esferas</h1>
                   <!--  <h2>Eslogan</h2> -->
                </div>
                
            </div>
    
            <div class="formulario seccion">
                <form id="form" action="#" class="form" method="POST">
                    <h2 class="tituloForm tituloForm--registro">Registro de Huéspedes</h2>
    
                    <div class="campo campoNombre">
                        <label class="labelCampo" for="campoNombre">Nombre</label>
                        <input id="campoNombre" type="text" name="campoNombre" required>
                    </div>
                    
    
                    <div class="campoDoble">
                        <div class="campo">
                            <label class="labelCampo" for="campoEmail">Correo electrónico</label>
                            <input id="campoEmail" type="text" name="campoEmail" required>
                        </div>
                        <div class="campo">
                            <label class="labelCampo" for="campoTelefono">Teléfono</label>
                            <input id="campoTelefono" type="number" name="campoTelefono" required>
                        </div>   
                    </div>
    
                    <div class="campoDoble">
                        <div class="campo">
                            <label class="labelCampo" for="campoNumeroHuespedes">Número de huéspedes</label>
                            <input id="numeroHuespedes" type="text" name="numeroHuespedes" required>
                        </div>
                        <div class="campo campo--select">
                            <label class="labelCampo" for="horasDeHospedaje">Horas de hospedaje</label>
                            <div class="custom-select">
                                <select class="select input" name="horasDeHospedaje" id="horasDeHospedaje">
                                    <option value="4" class="option">4</option>
                                    <option value="6" class="option">6</option>
                                    <option value="8" class="option">8</option>
                                    <option value="12" class="option">12</option>
                                </select>
                            </div>
                        </div> 
                    </div>
    
                    <label class="labelHabitaciones labelCampo" for="">Tipo de habitación</label>
                    <div class="seccionHabitaciones campo">
                        <div id="habitacionEstandar" class="habitacion sombra">
                            <img name="habitacion" value="1" class="imgHabitacion" id="estandar" src="Images/Habitaciones_Estandar.jfif" alt="Habitación estándar" draggable="false">
                            <label class="labelHabitacion" for="estandar">Estándar</label>
                        </div>
                        <div id="habitacionSuite" class="habitacion sombra">
                            <img name="habitacion" value="2" class="imgHabitacion" id="suite" src="Images/Habitacion_Jacuzzi.jpg" alt="Suite" draggable="false">
                            <label class="labelHabitacion" for="suite">Jacuzzi</label>
                        </div>
                        <div id="habitacionPresidencial" class="habitacion sombra">
                            <img name="habitacion" value="3" class="imgHabitacion" id="presidencial" src="Images/Habitacion_Suite.jfif" alt="Habitación presidencial" draggable="false">
                            <label class="labelHabitacion" for="presidencial">Deluxe</label>
                        </div>
                    </div>      

                    <div class="boton">
                        <button name="submitBtn" class="sombra btnForm" type="submit">REGISTRAR HUÉSPED</button> 
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="successCard" class="successCard sombra">
        <h2>Huésped registrado con éxito</h2>
        <i class="fas fa-check-circle logoSuccess"></i>
        <button id ="btnSuccess" class="btnSuccess sombra">De acuerdo</button>
    </div>
    
    <script src="Js/main.js"></script>
</body>
</html>