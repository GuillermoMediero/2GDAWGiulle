<?php
$animales = ["Vacas", "Pollos", "Ovejas", "Cabras"];
$colores = ["Azul", "Blanco", "Negro", "Rojo"];

$animal = $_GET["animal"];
$color = $_GET["color"];

array_push($animales, $animal);

array_unshift($colores, $color);

$todo = array_merge($animales,$colores);

require "Ejer13.view.php";
?>