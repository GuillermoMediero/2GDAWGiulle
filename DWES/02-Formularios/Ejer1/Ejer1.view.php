<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejer1</h1>
    <p> Crea un convertidor de grados Celsius a Farenheit (y viceversa). La aplicación
pedirá una cantidad al usuario y la unidad mediante un formulario. Una vez enviado,
mostrará el resultado de la conversión realizada. El formulario siempre se mostrará,
de forma que el usuario pueda seguir introduciendo valores.
</p>
<form action="Ejer1.php" method="GET">
<h4></h4>
<p>Introduce la temperatura:<input type="text" name="temperatura"></p>
<p>Indica la unidad de la temperatura introducida: 
    <select name="unidad" id="unid">
        <option value="celsius">Celsius</option>
        <option value="farenheit">Farenheit</option>
    </select>
</p>
<input type="submit" value="Enviar">
</form>
<br>
<?php
    echo "La unidad tranformado en $unidad es de " .temperatura($temperatura,$unidad);
?>
</body>
</html>