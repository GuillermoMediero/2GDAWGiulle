<?php
    $numero = $_GET["numero"];

    function generarArray($tamaño = 20){
        $numeros = [];
        for ($i=0; $i < $tamaño ; $i++) { 
            $numeros[$i]= random_int(min:1,max:10);
        }
        return $numeros;
    }

    function comprobar($numero){
        $tamaño = 0;
        $numeros = generarArray($tamaño);
        $contador =0;
        foreach($numeros as $value){    
            if ($value == $numero) {
                $contador++;
            }
        }
        return "El numero aparece $contador veces en el array";
    }

    require "Ejer3.view.php"
?>