<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejer10</h1>
    <p> Modifica la función anterior para que establezca un valor por defecto a una
de las cadenas.
</p>
<?php
        $text1 = $_GET["text1"];

        function concatenar($text1, $text2 = 'Anonimo'){
            return $text1 . ' ' . $text2;
        }

        echo concatenar($text1)
    
    ?>
</body>
</html>