<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operador = $_GET["operacion"];

    function operar($num1,$num2,$operador){
        switch ($operador){
            case "suma": 
                $sum = $num1 + $num2;
                return "La suma de $num1 y $num2 es de $sum";
                break;
            case "resta": 
                $res = $num1 - $num2;
                return "La resta de $num1 y $num2 es de $res";
                break;
            case "multiplicar": 
                $mul = $num1 * $num2;
                return "La multiplicacion de $num1 y $num2 es de $mul";
                break;
            case "dividir": 
                if ($num2 == 0) {
                    return "No se puede dividir entre 0";
                }
                else{
                    $div = $num1 / $num2;
                    return "La division de $num1 y $num2 es de $div";
                }
                break;                           
        }
    }

    require "Ejer2.view.php";
?>