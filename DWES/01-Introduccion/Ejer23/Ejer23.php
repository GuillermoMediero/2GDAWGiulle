<?php
    $estudiantes = ["Ane", "Markel", "Nora", "Danel", "Amaia", "Izaro"];

    for($x=0; $x < count($estudiantes); $x++){
        $frase = $frase ."<li id=\"$x\">".$estudiantes[$x]."</li>";
    }

    require "Ejer23.view.php"
?>