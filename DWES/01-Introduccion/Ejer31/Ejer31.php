<?php

    function generarArray($tamaño = 20){
        $numeros = [];
        for ($i=0; $i < $tamaño ; $i++) { 
            $numeros[$i]= random_int(min:1,max:999);
        }
        return $numeros;
    }


    for ($i=0; $i < count($numeros) ; $i++) { 
        $frase = $frase ."<li> el array generado es: ".$numeros[$i].",</li>";
    }

    foreach($numeros as $value){
        $min = min($value);
        $max = max($value);

        $frase = $frase ."<li>El valor mas bajo del array es $min</li><li>El valor mas alto del array es $max";
    }

    require "Ejer31.view.php";
?>