<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejer8</h1>
    <p> Crea una función llamada esMayor() que reciba como parámetros dos
números y devuelva TRUE si el primer número es mayor que el segundo.
</p>
<?php
        $a = $_GET["num1"];
        $b = $_GET["num2"];

        function esMayor($a,$b){
                $mayor=  $a > $b;
                return var_export($mayor);
        }

        echo "Comprobacion entre $a y $b ";
        echo "<p>Mayor que: ";
        esMayor($a,$b);
        echo "</p>";
    ?>
</body>
</html>