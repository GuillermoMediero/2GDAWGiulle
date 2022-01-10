<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejer13</h1>
    <p>Crea dos arrays, uno con 4 tipos de animales ($animales) y otro con 4
nombres de colores ($colores). <br>
■ Calcula el número de elementos de cada array. <br>
■ Añade un elemento al final del array $animales utilizando una función. <br>
■ Añade un elemento al principio del array $colores utilizando una función. <br>
■ Crea un tercer array que incluya los elementos de los dos arrays. <br>
</p>
<?php
    echo "Numero de elementos de animales: " .count($animales). "<br>";
    echo "Numero de elementos de colores: " .count($colores). "<br>";
    print_r($animales); echo "<br>";
    print_r($colores); echo "<br>";
    print_r($todo);
?>

</body>
</html>