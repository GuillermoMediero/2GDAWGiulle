<?php
    $paises = ["Brasil", "Portugal", "Islandia", "Mexico", "Filipinas", "Marruecos"];

    $pais = $_GET["pais"];

    function encontrarPosicion($paises,$pais){
        for($x = 0; $x < count($paises); $x++){
            if($pais == $paises[$x]){
                return $paises[$x];
            }
            else{
                return "-1";
            }
        }
    }

    $pos = encontrarPosicion($paises,$pais);

    require "Ejer22.view.php";
?>