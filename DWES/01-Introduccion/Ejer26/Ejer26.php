<?php
        $marcas = ["Audi", "Seat", "Mercedes", "Volkswagen", "BMW", "Fiat"];
        $x = 0;
        do
        {
            $frase = $frase ."<li id=\"$x\">".$marcas[$x]."</li>";
            $x++;
        }while ($x < count($marcas));
    
        require "Ejer26.view.php"
?>