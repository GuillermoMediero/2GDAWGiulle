<?php
    $alumno= [
       "curso1" => [
            "Amaia" => 6.5,
            "Ane" => 7.5,
            "Maite" => 5.2,
            "Lorea" => 9.1,
            "Markel" => 6.8,
            "Urtzi" => 8.4,
        ]
        ];

        foreach($alumno as $key => $valor){
            $frase = $frase ."<li>La nota media de $key es de $vlaor </li>";
        }

        require "Ejer30.view.php"
?>