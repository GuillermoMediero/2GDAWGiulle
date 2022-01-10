<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejer5</h1>
    <p>Crea dos variables, a y b que recojan los valores enviados mediante el método
GET. Almacena el resultado de las siguientes operaciones en una nuevas variables
y muéstralas por pantalla.
</p>
    <?php
        $a = $_GET["num1"];
        $b = $_GET["num2"];

        $res = $a - $b;
        $div = $a / $b;
        $may = $a > $b;  
        $men = $a <= $b ;

    
        $resultado = "La resta de $a y $b es de $res, la division es de $div";
        echo $resultado;
        echo "<p>Mayor que: ";
        var_export($may) ;
        echo "</p>";
        echo "<p>Menor o igual: ";
        var_export($men);
        echo "</p>";
    ?>

</body>
</html>