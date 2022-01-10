<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    if($num1==$num2){
        $res = $num1 * $num2;
    }
    else{
        $res = $num1 + $num2;
    }

    require "Ejer16.view.php";
?>