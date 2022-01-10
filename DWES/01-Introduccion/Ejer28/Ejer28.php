<?php
    $marcas = ["Audi", "Seat", "Mercedes", "Volkswagen", "BMW", "Fiat"];
    $x = 0;

    foreach($marcas as $valor){
        $frase = $frase ."<li id=\"$x\">".$valor."</li>";
        $x++;
    }

    require "Ejer28.view.php"
?>