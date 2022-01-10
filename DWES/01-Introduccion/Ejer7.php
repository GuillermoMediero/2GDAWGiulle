<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejer7</h1>
    <p> ¿Cómo mejorarías el ejercicio anterior para que la función sea más reutilizable?
Piénsalo bien y modifica la función.
</p>
    <?php
        $a = $_GET["num1"];
        $b = $_GET["num2"];

        function multiplicar($a,$b){
                return $a * $b;
        }

        echo "La multiplicacion de $a y $b es " . multiplicar($a,$b);

        
    ?>
</p>
</body>
</html>