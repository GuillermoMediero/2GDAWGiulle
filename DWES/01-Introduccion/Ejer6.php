<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejer6</h1>
    <p> Crea una función llamada multiplicar que reciba dos variables, a y b, y muestre
el resultado de la multiplicación por pantalla. Para probar el ejercicio se enviarán
los valores mediante una petición GET.</p>
    <?php
        $a = $_GET["num1"];
        $b = $_GET["num2"];

        function multiplicar($a,$b){
            $resultado = $a * $b;
            echo "La multiplicacion de $a y $b es de $resultado";
        }

        multiplicar($a,$b);

        
    ?>
</p>
</body>
</html>