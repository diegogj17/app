var botoncrearqueja = document.getElementById("crearqueja");
var botonresponderqueja = document.getElementById("responderqueja");
var botonconsultarqueja = document.getElementById("consultarqueja");

var divqueja = document.getElementById("invisible");
var divresponder = document.getElementById("invisible2");
var divconsultar = document.getElementById("invisible3");

botoncrearqueja.addEventListener("click", aparecerCrearQueja);
botonresponderqueja.addEventListener("click", aparecerResponderQueja);
botonconsultarqueja.addEventListener("click", aparecerConsultarQueja);

var contadorAp = 0;
var contadorAp2 = 0;
var contadorAp3 = 0;

function aparecerCrearQueja() {
    if (contadorAp == 0) {
        divqueja.style.display = "inline";
        botonresponderqueja.style.display = "none";
        botonconsultarqueja.style.display = "none";
        botoncrearqueja.innerText = "Volver";
        contadorAp = 1;
    } else {
        contadorAp = 0;
        divqueja.style.display = "none";
        botonresponderqueja.style.display = "inline";
        botonconsultarqueja.style.display = "inline";
        botoncrearqueja.innerText = "Crear Queja";
    }
}

function aparecerConsultarQueja() {
    if (contadorAp3 == 0) {
        divresponder.style.display = "none";
        divconsultar.style.display = "inline";
        divqueja.style.display = "none";
        botoncrearqueja.style.display = "none";
        botonconsultarqueja.innerText = "Volver";

        contadorAp2 = 1;
        contadorAp = 1;
    } else {
        contadorAp3 = 0;
        botoncrearqueja.style.display = "none";
        divresponder.style.display = "none";
        botonconsultarqueja.innerText = "Consultar Queja";

    }
}

function aparecerResponderQueja() {
    if (contadorAp2 == 0) {
        divresponder.style.display = "inline";
        botoncrearqueja.style.display = "none";
        botonconsultarqueja.style.display = "none";
        botonresponderqueja.innerText = "Volver";
        contadorAp2 = 1;
    } else {
        contadorAp2 = 0;
        botoncrearqueja.style.display = "inline";
        divresponder.style.display = "none";
        botonconsultarqueja.style.display = "inline";
        botonresponderqueja.innerText = "Responder Queja";
    }
}

function aparecerConsultarQueja() {
    if (contadorAp == 0) {
        divconsultar.style.display = "inline";
        botonresponderqueja.style.display = "none";
        botoncrearqueja.style.display = "none"; 
        botonconsultarqueja.innerText = "Volver"
        contadorAp = 1;
    } else {
        contadorAp = 0;
        divqueja.style.display = "none";
        botonresponderqueja.style.display = "inline";
        botonconsultarqueja.style.display = "inline";
        botoncrearqueja.style.display = "inline";
        divconsultar.style.display = "none";
        botonconsultarqueja.innerText = "Consultar Queja"


    }
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("continuar").addEventListener("submit", function() {
        document.getElementById("submitBtn").disabled = true;
    });
});
