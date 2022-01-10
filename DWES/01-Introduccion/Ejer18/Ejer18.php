<?php
    $dia = $_GET["dia"];

    switch($dia){
        case 1:
            $frase = "El día número $dia es lunes";
            break;
        case 2:
            $frase = "El día número $dia es martes";
            break;
        case 3:
            $frase = "El día número $dia es miercoles";
            break;
        case 4:
            $frase = "El día número $dia es jueves";
            break;
        case 5:
            $frase = "El día número $dia es viernes";
            break;
        case 6:
            $frase = "El día número $dia es sabado";
            break;
        case 7:
            $frase = "El día número $dia es domingo";
            break;
        default:
            $frase = "No es ningún día de la semana";
    }

    require "Ejer18.view.php"

?>