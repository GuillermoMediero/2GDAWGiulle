<?php
    $ciudades = ["Paris", "Berlin", "Amsterdam", "Praga"];

    $a = $_GET["pos"];
    $valor = $_GET["ciudad"];

    function getValor($ciudades,$a){
        return $ciudades[$a];
    }

    function setValor($ciudades,$a,$valor){
        array_push($ciudades[$a], $valor);
        return var_dump($ciudades);
    }

    require "Ejer12.view.php";
    ?>
