<?php
    $diccionario = [
        "Hola" => "Hello",
        "Adios" => "Goodbye",
        "Casa" => "House",
        "Pan" => "Bread",
        "Pajaro" => "Bird",
    ];

    $sum = count($diccionario);
    $frase = "La traduccion de ".$diccionario["Hola"]. " en ingles es " .$diccionario["Hello"]."\n
              La traduccion de ".$diccionario["Adios"]. " en ingles es " .$diccionario["Goodbye"]."\n
              La traduccion de ".$diccionario["Casa"]. " en ingles es " .$diccionario["House"]."\n
              La traduccion de ".$diccionario["Pan"]. " en ingles es " .$diccionario["Bread"]."\n
              La traduccion de ".$diccionario["Pajaro"]. " en ingles es " .$diccionario["Bird"]."\n";

    require "Ejer14.view.php";

?>