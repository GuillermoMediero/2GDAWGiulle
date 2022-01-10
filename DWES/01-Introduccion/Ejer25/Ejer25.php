<?php
    $estudiantes = ["Ane", "Markel", "Nora", "Danel", "Amaia", "Izaro"];
    $x = 0;
    while ($x < count($estudiantes)) {
        $frase = $frase ."<li id=\"$x\">".$estudiantes[$x]."</li>";
        $x++;
    }

    require "Ejer25.view.php"
?>