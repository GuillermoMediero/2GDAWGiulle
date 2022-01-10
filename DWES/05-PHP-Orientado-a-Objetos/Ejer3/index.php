<?php
    require_once "models/Poligono.php";

    $cuadrado1 = new \Ejercicio3\models\Cuadrado("rojo",20,30);
    echo "Area del cuadrado 1: ".$cuadrado1->area(). ".<br>";

    $triangulo1 = new \Ejercicio3\models\Triangulo("azul",12,13);
    echo "Area del traingulo 1: ".$triangulo1->area(). ".<br>";
?>