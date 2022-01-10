<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejer2</h1>
<p>Crea un array con 20 números aleatorios entre el 1 y el 10 utilizando la función
random_int(). El usuario introducirá en el formulario un número y al darle a “Enviar”
la aplicación comprobará cuántas veces aparece el número introducido en el array. 
</p>
<?php
    echo comprobar($numero);
?>
<form action="Ejer3.php" method="GET">
    <p>Introduce tu numero: <input type="number" name="numero"> <input type="submit" value="Enviar"></p>
</form>
</body>
</html>