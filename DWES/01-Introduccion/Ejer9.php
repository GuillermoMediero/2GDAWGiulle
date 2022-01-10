<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejer9</h1>
    <p> Escribe una función que reciba como parámetro dos cadenas de texto y
devuelva la concatenación de dichas cadenas. Muestra el resultado obtenido
por pantalla.
</p>
<?php
        $text1 = $_GET["text1"];
        $text2 = $_GET["text2"];

        function concatenar($text1, $text2){
            return $text1 . ' ' . $text2;
        }

        echo concatenar($text1,$text2)
    ?>
</body>
</html>