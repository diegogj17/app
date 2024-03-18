var botoncrearqueja = document.getElementById("crearqueja");
var botonresponderqueja = document.getElementById("responderqueja");
var divqueja = document.getElementById("invisible");
var divresponder =document.getElementById("invisible2");
botoncrearqueja.addEventListener("click", aparecerCrearQueja);
botonresponderqueja.addEventListener("click", aparecerResponderQueja);

var contadorAp = 0;
var contadorAp2 = 0;
function aparecerCrearQueja(){
    if (contadorAp==0){
        divqueja.style.display = "inline";
        botonresponderqueja.style.display="none";
        contadorAp=1;
    }else{
        contadorAp=0;
        divqueja.style.display = "none";
        botonresponderqueja.style.display="inline";
    }
}

function aparecerResponderQueja(){
    if (contadorAp2==0){
        divresponder.style.display = "inline";
        botoncrearqueja.style.display="none";
        contadorAp2=1;
    }else{
        contadorAp2=0;
        botoncrearqueja.style.display="inline";
        divresponder.style.display = "none";
        
    }
}
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("continuar").addEventListener("submit", function() {
        document.getElementById("submitBtn").disabled = true; // Disable the submit button
    });
});