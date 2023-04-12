<?php

    require_once "conexion.php";
        
    if(isset($_POST['submitBtn'])) {
        
        $name = $_POST['campoNombre'];
        $email = $_POST['campoEmail'];
        $phone = $_POST['campoTelefono'];
        $checkInDate = $_POST['checkInDate'];
        $checkOutDate = $_POST['checkOutDate'];
        $guestsNum = $_POST['numeroHuespedes'];
        $rewards = $_POST['programaRecompensas'];
        //$room = $_POST['habitacion'];  

        /*echo $name;
        echo $email;
        echo $phone;
        echo $checkInDate;
        echo $checkOutDate;
        echo $guestsNum;
        echo $rewards;
        echo $room;*/

        $consultaEnviarDatos = "INSERT INTO User VALUES (NULL, '{$name}', '{$email}', '{$phone}', '{$checkInDate}', '{$checkOutDate}', $guestsNum, $rewards, 1);";
        $enviarDatos = $conexion->query($consultaEnviarDatos);

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
        <div class="main sombra">
            <div class="header seccion">
                <img class="logoHotel sombra" src="Images/Logo.png" alt="Logo Hotel" draggable="false">
                <div class="seccionTitulo">
                    <h1>NOMBRE DEL HOTEL</h1>
                    <h2>Eslogan</h2>
                </div>
                
            </div>
    
            <div class="formulario seccion">
                <form id="form" action="#" class="form" method="POST">
                    <h2 class="tituloForm">Registro de Huéspedes</h2>
    
                    <div class="campo campoNombre">
                        <label class="labelCampo" for="campoNombre">Nombre</label>
                        <input id="campoNombre" type="text" name="campoNombre">
                    </div>
                    
    
                    <div class="campoDoble">
                        <div class="campo">
                            <label class="labelCampo" for="campoEmail">Correo electrónico</label>
                            <input id="campoEmail" type="text" name="campoEmail">
                        </div>
                        <div class="campo">
                            <label class="labelCampo" for="campoTelefono">Teléfono</label>
                            <input id="campoTelefono" type="text" name="campoTelefono">
                        </div>   
                    </div>
    
                    <div class="campoDoble">
                        <div class="campo">
                            <label class="labelCampo" for="checkInDate">Fecha de llegada</label>
                            <input id="checkInDate" type="date" name="checkInDate">
                        </div>
                        <div class="campo">
                            <label class="labelCampo" for="checkOutDate">Fecha de salida</label>
                            <input id="checkOutDate" type="date" name="checkOutDate">
                        </div> 
                    </div>
    
                    <div class="campoDoble">
                        <div class="campo">
                            <label class="labelCampo" for="campoNumeroHuespedes">Número de huéspedes</label>
                            <input id="numeroHuespedes" type="text" name="numeroHuespedes">
                        </div>
                        <div class="campo">
                            <label class="labelCampo" for="programaRecompensas">Programa de recompensas</label>

                            <div class="seccionRecompensas">
                                <div class="opcionSi">
                                    <input class="radio" type="radio" name="programaRecompensas" id="opcionSi" value="1">
                                    <label for="opcionSi">Sí</label>
                                </div>
                                <div class="opcionNo">
                                    <input class="radio" type="radio" name="programaRecompensas" id="opcionNo" value="0" checked>
                                    <label for="opcionNo">No</label> 
                                </div>
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
                            <img name="habitacion" value="2" class="imgHabitacion" id="suite" src="Images/Habitacion_Suite.jfif" alt="Suite" draggable="false">
                            <label class="labelHabitacion" for="suite">Suite</label>
                        </div>
                        <div id="habitacionPresidencial" class="habitacion sombra">
                            <img name="habitacion" value="3" class="imgHabitacion" id="presidencial" src="Images/Habitacion_Presidencial.jfif" alt="Habitación presidencial" draggable="false">
                            <label class="labelHabitacion" for="presidencial">Presidencial</label>
                        </div>
                    </div>


<!--                     <label class="labelCampo" for="">Método de pago</label>
                    <div class="seccionTipoPago">

                        <div class="metodoPago">
                            <input value="efectivo" type="radio" name="tipoPago" id="opcionEfectivo" class="radio">
                            <label class="efectivo metodoPago" for="opcionEfectivo">
                                <i class="fas fa-money-bill logoTipoPago logoEfectivo"></i>
                                <span>Efectivo</span>
                            </label>
                        </div>

                        <div class="metodoPago">
                            <input value="visa" class="radio" type="radio" name="tipoPago" id="opcionVisa">
                            <label class="visa metodoPago" for="opcionVisa">
                                <i class="fab fa-cc-visa logoTipoPago logoVisa"></i>
                                <span>Visa</span>
                            </label>
                        </div>

                        <div class="metodoPago">
                            <input value="mastercard" class="radio" type="radio" name="tipoPago" id="opcionMastercard">
                            <label for="opcionMastercard" class="mastercard metodoPago">
                                <i class="fab fa-cc-mastercard logoTipoPago logoMastercard"></i>
                                <span>Mastercard</span>
                            </label>
                        </div>

                        <div class="metodoPago">
                            <input value="paypal" type="radio" name="tipoPago" id="opcionPaypal" class="radio">
                            <label for="opcionPaypal" class="paypal metodoPago">
                                <i class="fab fa-cc-paypal logoTipoPago logoPaypal"></i>
                                <span>PayPal</span>
                            </label>
                        </div>

                        <div class="metodoPago">
                            <input value="american-express" type="radio" name="tipoPago" id="opcionAmericanExpress" class="radio">
                            <label for="opcionAmericanExpress" class="americanExpress metodoPago">
                                <i class="fab fa-cc-amex logoTipoPago logoAmericanExpress"></i>
                                <span> AmericanExpress</span>
                            </label>
                        </div>

                        <div class="metodoPago">

                        </div>
                    </div> -->

                    <div class="boton">
                        <button name="submitBtn" class="sombra btnForm" type="submit">REGISTRAR</button> 
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