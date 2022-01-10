$(document).ready(
    function(){
        let enlaces = $('a');
        alert("Numero de enlaces: " + enlaces.length);

        alert("Direccion del penultimo enlace" + enlaces[enlaces-2].attr("href"));

    }
);