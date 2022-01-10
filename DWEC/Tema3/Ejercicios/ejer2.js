var fecha = new Array(5) ;
var anotaciones= new Array(5);  
var dia;

function uno(){
    dia = 1;
}
function dos(){
    dia = 2;
}
function tres(){
    dia = 3;
}
function cuatro(){
    dia = 4;
}
function cinco(){
    dia = 5;
}
function seis(){
    dia = 6;
}

function guardar(){
    let anotacion = document.getElementById("anotacion").value; 

    for(let x = 0; x <fecha.length , x<anotaciones.length; x++){
        fecha[x]=dia;
        anotaciones[x]=anotacion;
    }
    alert("Dia guardado");
}

function visualizar(){
    let cadena="";
    for (let x = 0; x<fecha.length , x<anotaciones.length; x++){
        cadena+= "El dia " + fecha[x] + " se anoto " + anotaciones[x] + ".\n";
    }
    alert(cadena);
}


