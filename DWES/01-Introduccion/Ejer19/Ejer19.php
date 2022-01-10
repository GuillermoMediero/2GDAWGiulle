<?php
    $num = $_GET["num"];

    for($x = 0; $x <= $num;$x++){
        $sum = $num + $x;
        $res = $res ."Resultado de la suma: $sum <br>";
    }

    require "Ejer19.view.php";
?>