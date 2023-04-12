const regEx = {
    nombre: /^[A-Za-zÁ-ÿ\s]{1,40}$/,
    email: /^[A-Za-zÁ-ÿ-_.]{1,}\@[A-Za-zÁ-ÿ-_.]{1,}\.[A-Za-zÁ-ÿ-_.]{1,}$/,
    telefono: /^\d{7,12}$/
}

const permisos = {
    nombre: false,
    email: false,
    telefono: false,
    checkInDate: false,
    checkOutDate: false,
    numeroHuespedes: false,
    tipoDePago: false,
    programaRecompensas: false,
    habitaciones: false
}

const   formulario = document.querySelector("#form"),
        container = document.querySelector(".container"),
        successCard = document.querySelector("#successCard"),
        btnSuccess = document.querySelector("#btnSuccess"),

        habitacionEstandar = document.querySelector("#habitacionEstandar"),
        habitacionSuite = document.querySelector("#habitacionSuite"),
        habitacionPresidencial = document.querySelector("#habitacionPresidencial"),

        inputs = document.querySelectorAll("input"),
        labelsHabitacion = document.querySelectorAll(".labelHabitacion"),

        opcionSi = document.querySelector("#opcionSi"),
        opcionNo = document.querySelector("#opcionNo"),

        opcionEfectivo = document.querySelector("#opcionEfectivo"),
        opcionVisa = document.querySelector("#opcionVisa"),
        opcionMastercard = document.querySelector("#opcionMastercard"),
        opcionPaypal = document.querySelector("#opcionPaypal"),
        opcionAmericanExpress = document.querySelector("#opcionAmericanExpress");

var habitacionEstandarActiva = false,
    habitacionSuiteActiva = false,
    habitacionPresidencialActiva = false;

//Enviar formulario
formulario.addEventListener("submit", (e) => {

    comprobarNombre();
    comprobarEmail();
    comprobarTelefono();
    comprobarCheckInDate();
    comprobarCheckOutDate();
    comprobarNumeroHuespedes();
    comprobarProgramaRecompensas();
    comprobarHabitaciones();
    comprobarTipoDePago();

    if( permisos.nombre
        && permisos.email
        && permisos.telefono
        && permisos.checkInDate
        && permisos.checkOutDate
        && permisos.numeroHuespedes
        && permisos.programaRecompensas
        && permisos.habitaciones
        && permisos.tipoDePago){

            inputs.forEach((input) => {
                input.value = "";
                input.classList.remove("inputCorrecto");
                input.classList.remove("inputIncorrecto");
            });

            //Eliminar habitaciones activas
            habitacionEstandar.classList.remove("activa");
            habitacionSuite.classList.remove("activa");
            habitacionPresidencial.classList.remove("activa");
            labelsHabitacion[0].classList.remove("labelActiva");
            labelsHabitacion[1].classList.remove("labelActiva");
            labelsHabitacion[2].classList.remove("labelActiva");
            habitacionEstandarActiva = false;
            habitacionSuiteActiva = false;
            habitacionPresidencialActiva = false;

            //Reiniciar los métodos de pago
            opcionEfectivo.checked = false;
            opcionVisa.checked = false;
            opcionPaypal.checked = false;
            opcionAmericanExpress.checked = false;
            opcionMastercard.checked = false;

            container.style.filter = "blur(4px)";
            successCard.style.visibility = "visible";
            /* e.preventDefault(); */
    } else {
        e.preventDefault();
    }
});

btnSuccess.addEventListener("click", () => {
    successCard.style.visibility = "hidden";
    container.style.filter = "none";
});

//Eliminar bordes de colores al hacer click en un input
inputs.forEach((input) => {
    input.addEventListener("click", () => {
        input.classList.remove("inputIncorrecto");
        input.classList.remove("inputCorrecto");
    }); 
    input.addEventListener("blur", () => {
        input.classList.remove("inputIncorrecto");
        input.classList.remove("inputCorrecto");
    });
});

    



//Habitación Estándar
habitacionEstandar.addEventListener("click", (e) => {
    habitacionSuiteActiva = false;
    habitacionPresidencialActiva = false;

    habitacionSuite.classList.remove("activa");
    habitacionPresidencial.classList.remove("activa");
    labelsHabitacion[1].classList.remove("labelActiva");
    labelsHabitacion[2].classList.remove("labelActiva");

    if(!habitacionEstandarActiva){
        habitacionEstandarActiva = true;
        habitacionEstandar.classList.add("activa");
        labelsHabitacion[0].classList.add("labelActiva");
    }
});

//Habitación Suite
habitacionSuite.addEventListener("click", (e) => {
    habitacionEstandarActiva = false;
    habitacionPresidencialActiva = false;

    habitacionEstandar.classList.remove("activa");
    habitacionPresidencial.classList.remove("activa");
    labelsHabitacion[0].classList.remove("labelActiva");
    labelsHabitacion[2].classList.remove("labelActiva");
    
    if(!habitacionSuiteActiva){
        habitacionSuiteActiva = true;
        habitacionSuite.classList.add("activa");
        labelsHabitacion[1].classList.add("labelActiva");
    }
});

//Habitación Presidencial
habitacionPresidencial.addEventListener("click", (e) => {
    habitacionEstandarActiva = false;
    habitacionSuiteActiva = false;

    habitacionEstandar.classList.remove("activa");
    habitacionSuite.classList.remove("activa");
    labelsHabitacion[0].classList.remove("labelActiva");
    labelsHabitacion[1].classList.remove("labelActiva");
    
    if(!habitacionPresidencialActiva){
        habitacionPresidencialActiva = true;
        habitacionPresidencial.classList.add("activa");
        labelsHabitacion[2].classList.add("labelActiva");
    }
});

const comprobarNombre = () => {
    if(regEx.nombre.test(inputs[0].value)){
        permisos.nombre = true;
        inputs[0].classList.remove("inputIncorrecto");
        inputs[0].classList.add("inputCorrecto");
    } else {
        permisos.nombre = false;
        inputs[0].classList.remove("inputCorrecto");
        inputs[0].classList.add("inputIncorrecto");
    }
}

const comprobarEmail = () => {
    if(regEx.email.test(inputs[1].value)){
        permisos.email = true;
        inputs[1].classList.remove("inputIncorrecto");
        inputs[1].classList.add("inputCorrecto");
    } else {
        permisos.email = false;
        inputs[1].classList.remove("inputCorrecto");
        inputs[1].classList.add("inputIncorrecto");
    }
}

const comprobarTelefono = () => {
    if(regEx.telefono.test(inputs[2].value)){
        permisos.telefono = true;
        inputs[2].classList.remove("inputIncorrecto");
        inputs[2].classList.add("inputCorrecto");
    } else {
        permisos.telefono = false;
        inputs[2].classList.remove("inputCorrecto");
        inputs[2].classList.add("inputIncorrecto");
    }
}

const comprobarCheckInDate = () => {
    if(inputs[3].value !== ""){
        permisos.checkInDate = true;
        inputs[3].classList.remove("inputIncorrecto");
        inputs[3].classList.add("inputCorrecto");
    } else {
        permisos.checkInDate = false;
        inputs[3].classList.remove("inputCorrecto");
        inputs[3].classList.add("inputIncorrecto");
    }
}

const comprobarCheckOutDate = () => {
    if(inputs[4].value !== ""){
        permisos.checkOutDate = true;
        inputs[4].classList.remove("inputIncorrecto");
        inputs[4].classList.add("inputCorrecto");
    } else {
        permisos.checkOutDate = false;
        inputs[4].classList.remove("inputCorrecto");
        inputs[4].classList.add("inputIncorrecto");
    }
}

const comprobarNumeroHuespedes = () => {
    if(parseInt(inputs[5].value) > 0){
        permisos.numeroHuespedes = true;
        inputs[5].classList.remove("inputIncorrecto");
        inputs[5].classList.add("inputCorrecto");
    } else {
        permisos.numeroHuespedes = false;
        inputs[5].classList.remove("inputCorrecto");
        inputs[5].classList.add("inputIncorrecto");
    }
}

const comprobarProgramaRecompensas = () => {
    if(opcionSi.checked || opcionNo.checked){
        permisos.programaRecompensas = true;
    } else {
        permisos.programaRecompensas = false;
    }
}

const comprobarHabitaciones = () => {
    if(habitacionEstandarActiva || habitacionSuiteActiva || habitacionPresidencialActiva){
        permisos.habitaciones = true;
    } else {
        permisos.habitaciones = false;
    }
}

const comprobarTipoDePago = () => {
    if( opcionEfectivo.checked
        || opcionMastercard.checked
        || opcionVisa.checked
        || opcionPaypal.checked
        || opcionAmericanExpress.checked){

        permisos.tipoDePago = true;

    } else {
        permisos.tipoDePago = false;
    }
}
