<?php
    $temperatura = $_GET["temperatura"];
    $unidad = $_GET["unidad"];

    function temperatura($temperatura,$unidad){
    if($unidad == "celsius"){
        $temp = ($temperatura*9/5)+32;
        return $temp;
    }
    else{
        $temp = ($temperatura-32)*5/9;
        return $temp;
    }
    }
    require "Ejer1.view.php";
?>