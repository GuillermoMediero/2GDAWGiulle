<?php
    require "models/Cuadrado.php";

    $cuadrado1 = new \Ejercicio7\models\Cuadrado("rojo",20,30);

    try{
        echo "Area del cuadrado 1: ".$cuadrado1->area(). ".<br>";
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
?>