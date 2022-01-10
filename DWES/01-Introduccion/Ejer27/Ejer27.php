<?php
    $grupo= ["Beatels", "Rolling Stones", "La pegatina", "VolarContigo", "PagaLimones","El pegas","Ill Vido","UltaMes",];

    foreach($grupo as $valor){
        $frase = $frase ."Grupo de musica: $valor <br>";
    }

    require "Ejer27.view.php";
?>