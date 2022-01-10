<?php
    $num = $_GET["num"];

    for($x = 0; $x <= $num;$x++){
        if($x%2 ==0){
            $sum = $num + $x;
            $res = $res ."Resultado de la suma: $sum <br>";
        }
    }

    require "Ejer20.view.php";
?>