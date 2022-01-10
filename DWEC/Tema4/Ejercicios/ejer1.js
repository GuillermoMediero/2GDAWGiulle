window.onload = function(){

    let enlaces = document.getElementsByTagName("a");
    alert("Numero de enlaces: " + enlaces.length);

    let mensaje = "Direccion del penultimo enlace " + enlaces[enlaces.length-2].href;
    alert(mensaje);

    var contador = 0;
    for(let i =0; i <enlaces.length; i++){
        if(enlaces[i].href == "http://prueba/"){
            contador++;
        }
    }
    alert("El numero de enlaces con http://prueba se de: " + contador);

    let parrafo = document.getElementsByTagName("p");
    let enlacesParrafoTres = parrafo[2].getElementsByTagName("a");
    alert("En el parrafo tres hay " + enlacesParrafoTres.length + " enlaces")
}

